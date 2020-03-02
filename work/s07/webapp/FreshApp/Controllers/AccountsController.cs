using System.Collections.Generic;
using System.Linq;
using System.Text.Json;
using FreshApp.Models;
using FreshApp.Services;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using FreshApp.Pages;

namespace FreshApp.Controllers {
    [ApiController]
    [Route ("api/[controller]")]
    public class AccountsController : Controller {
        public AccountsController (JsonFileAccountService accountService) {
            AccountService = accountService;
        }

        public JsonFileAccountService AccountService { get; }

        [HttpGet]
        public IEnumerable<Account> Get () {
            return AccountService.GetAccounts ();
        }

        [HttpGet ("/account/{id}")]
        public string Get (int id) {
            var accounts = AccountService.GetAccounts ().ToList (); {
                foreach (var item in accounts) {
                    if (id == item.Number) {
                        List<Account> list = new List<Account> ();
                        list.Add (item);
                        var json = JsonSerializer.Serialize<IEnumerable<Account>> (list);
                        return json;
                    }
                }
                return "[{\"error\":\"Could not locate account\"}]";
            }
        }

        [HttpPost ("/account/{idFrom}/{idTo}/{ammount}")]
        public IActionResult Post(string idFrom, string idTo, string ammount) {
            if(AccountService.transfer(idFrom, idTo, ammount)){
                return Ok();
            }else{
                return BadRequest();
            }
        }

        [HttpPost]
        public IActionResult transferForm([FromForm] Transfer transfer){
             if(AccountService.transfer(transfer.Withdraw, transfer.Deposit, transfer.Ammount)){
                     return Redirect(Request.Headers["Referer"].ToString());
             }else{
                 return Redirect("/Error");
            }
        }

        [HttpPost ("/account/transfer")]
        public IActionResult PostTransfer([FromBody]Transfer data){
            if(AccountService.transfer(data.Withdraw, data.Deposit, data.Ammount)){
                return Ok();
            }else{
                return BadRequest();
            }
            
        }

    }
}