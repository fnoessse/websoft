using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text.Json;
using System.Text.Json.Serialization;
using Microsoft.AspNetCore.Hosting;
using FreshApp.Models;

namespace FreshApp.Services
{
    public class JsonFileAccountService
    {
        public JsonFileAccountService(IWebHostEnvironment webHostEnvironment)
        {
            WebHostEnvironment = webHostEnvironment;
        }

        public IWebHostEnvironment WebHostEnvironment { get; }

        private string JsonFileName
        {
            get { return Path.Combine(WebHostEnvironment.ContentRootPath, "../..", "data", "account.json"); }
        }

        public IEnumerable<Account> GetAccounts()
        {
            using (var jsonFileReader = File.OpenText(JsonFileName))
            {
                return JsonSerializer.Deserialize<Account[]>(jsonFileReader.ReadToEnd(),
                    new JsonSerializerOptions
                    {
                        PropertyNameCaseInsensitive = true
                    });
            }
        }

        public void SaveAccounts (IEnumerable<Account> accounts) {
            string file = "../../data/account.json";

            using (var outputStream = File.Open (file, FileMode.Truncate)) {
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

        public bool transfer (string idFrom, string idTo, string ammount) {
            var accounts = GetAccounts ().ToList ();
            if (idFrom != idTo) {
                if ((accounts.Any (i => i.Number.ToString ().Equals (idFrom)) && (accounts.Any (i => i.Number.ToString ().Equals (idTo))))) {
                    int sum;
                    bool sumOk = false;
                    if (int.TryParse (ammount, out sum)) {
                        foreach (var item in accounts) {
                            if (idFrom == item.Number.ToString ()) {
                                if (item.Balance >= sum) {
                                    item.Balance -= sum;
                                    sumOk = true;
                                } else {
                                    return false;
                                    //return "Ammount to large, insufficient funds";
                                }
                            }
                        }
                        foreach (var item in accounts) {
                            if (idTo == item.Number.ToString () && sumOk) {
                                item.Balance += sum;
                                SaveAccounts (accounts);
                                return true;
                                //return "Amount " + ammount + " transfered from " + idFrom + " To " + idTo;
                            }
                        }
                    } else {
                        return false;
                        //return "Invalid amomount, transaction canceled";
                    }
                } else {
                    return false;
                    //return "Could not locate accounts, no transaction performed";
                }
            }
            return false;
            //return "Not possible to transfer, recipient is same as sender";
        }

    }
}
