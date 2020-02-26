using System;
using System.Collections.Generic ;
using System.IO;
using System.Text.Json;
using System.Text.Json.Serialization;

namespace FreshApp.Models
{
    public class Transfer
    {
        public string Deposit { get; set; }
        public string Withdraw { get; set; }
        public string Ammount { get; set; }
    }
}
