using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text.Json;
using System.Text.Json.Serialization;

namespace app {
    static class Program {
        static void Main (string[] args) {
            bool showMenu = true;
            while (showMenu) {
                showMenu = MainMenu ();
            }
        }

        private static bool MainMenu () {

            Console.Clear ();
            Console.WriteLine ("Choose an option:");
            Console.WriteLine ("1) View accounts");
            Console.WriteLine ("2) View account by number");
            Console.WriteLine ("3) Search account");
            Console.WriteLine ("4) Move / Transfer");
            Console.WriteLine ("5) Create new account");
            Console.WriteLine ("6) Exit");
            Console.Write ("\r\nSelect an option: ");

            switch (Console.ReadLine ()) {
                case "1":
                    Console.Clear ();
                    viewAccounts (true);
                    return true;
                case "2":
                    Console.Clear ();
                    ViewSingleAccount ();
                    return true;
                case "3":
                    searchAccount ();
                    return true;
                case "4":
                    Console.Clear ();
                    CashTransfer ();
                    return true;
                case "5":
                    Console.Clear ();
                    newAccount ();
                    return true;
                case "6":
                    return false;
                default:
                    Console.Clear ();
                    Console.WriteLine ("Option not available: press any key to return to menu");
                    Console.ReadKey ();
                    return true;
            }
        }

        private static void viewAccounts (Boolean keyToReturn) {
            var accounts = ReadAccounts ();
            var table = new TablePrinter ("Number", "Balance", "Label", "Owner");
            foreach (var Account in accounts) {
                table.AddRow (Account.Number, Account.Balance, Account.Label, Account.Owner);
            }
            table.Print ();
            if (keyToReturn) {
                Console.WriteLine ("\n Press any key to return to menu");
                Console.ReadKey ();
            }
        }

        private static void ViewSingleAccount () {
            var accounts = ReadAccounts ();
            var table = new TablePrinter ("Number", "Balance", "Label", "Owner Id");
            bool exists = false;
            Console.Clear ();
            Console.WriteLine ("\r\n Enter Owner Id:");
            var input = RemoveWhitespace (Console.ReadLine (), true);

            foreach (var Account in accounts) {
                if (Account.Owner.ToString ().Equals (input)) {
                    table.AddRow (Account.Number, Account.Balance, Account.Label, Account.Owner);
                    exists = true;
                }
            }

            if (exists) {
                table.Print ();
                Console.WriteLine ("\nPress any key to return to menu");
                Console.ReadKey ();
            } else {
                Console.WriteLine ("No annount found");
                Console.WriteLine ("\nPress any key to return to menu");
                Console.ReadKey ();
            }
        }

        private static void searchAccount () {
            var accounts = ReadAccounts ().ToList ();
            var table = new TablePrinter ("Number", "Balance", "Label", "Owner Id");
            bool exists = false;
            Console.Clear ();
            Console.WriteLine ("\r\n Enter search statement:");
            var input = RemoveWhitespace (Console.ReadLine (), true);

            var matches = accounts.Where (c =>
                c.Number.ToString ().Contains (input) ||
                c.Label.ToString ().ToLower ().Contains (input.ToLower ()) ||
                c.Owner.ToString ().Contains (input));

            if (IsAny (matches)) {
                foreach (var Account in matches) {
                    table.AddRow (Account.Number, Account.Balance, Account.Label, Account.Owner);
                    exists = true;
                }
            }

            if (exists) {
                table.Print ();
                Console.WriteLine ("\nPress any key to return to menu");
                Console.ReadKey ();
            } else {
                Console.WriteLine ("No annount found");
                Console.WriteLine ("\nPress any key to return to menu");
                Console.ReadKey ();
            }

        }

        private static bool IsAny<T> (this IEnumerable<T> data) {
            return data != null && data.Any ();
        }

        private static void CashTransfer () {
            viewAccounts (false);
            Console.WriteLine ("Select accountNumber to transfer from");
            var fromAccount = RemoveWhitespace (Console.ReadLine (), false);
            Console.WriteLine ("Select accountNumber to transfer to");
            var toAccount = RemoveWhitespace (Console.ReadLine (), false);
            Console.WriteLine ("Input Ammount to transfer");
            var Ammount = RemoveWhitespace (Console.ReadLine (), false);
            var accounts = ReadAccounts ();

            if (fromAccount != toAccount) {
                if ((accounts.Any (i => i.Number.ToString ().Equals (fromAccount)) && (accounts.Any (i => i.Number.ToString ().Equals (toAccount))))) {
                    int sum;
                    bool sumOk = false;
                    if (int.TryParse (Ammount, out sum)) {
                        foreach (var item in accounts) {
                            if (fromAccount == item.Number.ToString ()) {
                                if (item.Balance >= sum) {
                                    item.Balance -= sum;
                                    sumOk = true;
                                    Console.WriteLine ("Sum ok, amount withdrawn from account: " + item.Number);
                                } else {
                                    Console.WriteLine ("Ammount to large, insufficient funds");
                                }
                            }
                        }
                        foreach (var item in accounts) {
                            if (toAccount == item.Number.ToString () && sumOk) {
                                item.Balance += sum;
                                Console.WriteLine ("Sum ok, amount deposited to account: " + item.Number);
                                SaveAccounts (accounts);
                                Console.WriteLine ("Updating Database...");
                            }
                        }
                    } else {
                        Console.WriteLine ("Invalid input, can not be used as an ammount");
                    }
                } else {
                    Console.WriteLine ("Can not locate accounts, please make sure account numbers are correct");
                }
            } else {
                Console.WriteLine ("Recipient account can not be same as sender");
            }
            Console.WriteLine ("\nPress any key to return to menu");
            Console.ReadKey ();
        }

        private static String RemoveWhitespace (String input, Boolean clearConsole) {
            if (clearConsole) {
                Console.Clear ();
            }
            return input.Replace (" ", "");
        }

        static IEnumerable<Account> ReadAccounts () {
            String file = "../../data/account.json";

            using (StreamReader r = new StreamReader (file)) {
                string data = r.ReadToEnd ();

                var json = JsonSerializer.Deserialize<Account[]> (
                    data,
                    new JsonSerializerOptions {
                        PropertyNameCaseInsensitive = true
                    }
                );
                return json;
            }
        }

        static void SaveAccounts (IEnumerable<Account> accounts) {
            String file = "../../data/account.json";

            using (var outputStream = File.OpenWrite (file)) {
                JsonSerializer.Serialize<IEnumerable<Account>> (
                    new Utf8JsonWriter (
                        outputStream,
                        new JsonWriterOptions {
                            SkipValidation = true,
                                Indented = true
                        }
                    ),
                    accounts
                );
            }
        }

        static void newAccount () {
            Console.WriteLine ("Enter AccountNumber");
            var accNbr = Console.ReadLine ();
            var accounts = ReadAccounts ().ToList ();

            if (!accounts.Any (i => i.Number.ToString () == accNbr)) {
                Console.WriteLine ("Enter account Label");
                var accLabel = Console.ReadLine ();
                Console.WriteLine ("Enter account owner ID");
                var accOwner = Console.ReadLine ();

                int Number;
                int.TryParse (accNbr, out Number);

                int Owner;
                int.TryParse (accOwner, out Owner);

                accounts.Add (new Account (Number, accLabel, Owner));
                Console.WriteLine ("Creating account...");

                SaveAccounts (accounts);
                Console.WriteLine ("Account stored...");

            } else {
                Console.WriteLine ("Account number already exists");
            }
            Console.WriteLine ("\nPress any key to return to menu");
            Console.ReadKey ();
        }

    }

}

public class Account {
    public Account () { }

    public Account (int Number, String Label, int Owner) {
        this.Number = Number;
        this.Label = Label;
        this.Owner = Owner;
    }
    public int Number { get; set; }
    public int Balance { get; set; }
    public string Label { get; set; }
    public int Owner { get; set; }

    public override string ToString () {
        return JsonSerializer.Serialize<Account> (this);
    }

}