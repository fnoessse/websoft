using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using System.IO;
using System.Text.Json;
using System.Text.Json.Serialization;
using FreshApp.Services;
using FreshApp.Models;


namespace FreshApp.Pages
{
    public class AccountModel : PageModel
    {
        private readonly ILogger<AccountModel> _logger;
        public JsonFileAccountService AccountService;

        public IEnumerable<Account> Accounts { get; private set; }

        public Transfer transfer;

        public AccountModel(
            ILogger<AccountModel> logger,
            JsonFileAccountService accountService
        ) {
            _logger = logger;
            AccountService = accountService;
            transfer = new Transfer();
        }

        public void OnGet()
        {
            Accounts = AccountService.GetAccounts();
        }
    }
}