/*
created by Oscar
*/

function getTable() {
    'use strict';
    var munis = [
        { "data": "data/1080.json", value: "1080" },
        { "data": "data/1081.json", value: "1081" },
        { "data": "data/1082.json", value: "1082" },
        { "data": "data/1083.json", value: "1083" },
    ];

    munis.forEach(function(item) {
        var selected = document.getElementById(item.value).selected;
        if (selected) {
            fetch(item.data)
                .then((response) => {
                    return response.json();
                }).then((myjson) => {
                    createHTMLtable(myjson);
                });
        }
    });
    //fetch('https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1080')
};

function createHTMLtable(myjson) {

    var col = [];
    for (var i = 0; i < myjson.Skolenheter.length; i++) {
        for (var key in myjson.Skolenheter[i]) {
            if (col.indexOf(key) === -1) {
                col.push(key);
            }
        }
    }

    var table = document.createElement("table");
    table.id = "tabben";

    var tr = table.insertRow(-1);
    tr.id = "tr";

    for (var i = 0; i < col.length; i++) {
        var th = document.createElement("th");
        th.id = "th";
        th.innerHTML = col[i];
        tr.appendChild(th);
    }

    for (var i = 0; i < myjson.Skolenheter.length; i++) {
        tr = table.insertRow(-1);

        for (var j = 0; j < col.length; j++) {
            var tabCell = tr.insertCell(-1);
            tabCell.id = "td";
            tabCell.innerHTML = myjson.Skolenheter[i][col[j]];

        }
    }

    var container = document.getElementById("content");
    container.innerHTML = "";
    container.appendChild(table);

    if (table != null) {
        for (var i = 0; i < table.rows.length; i++) {
            for (var j = 0; j < table.rows[i].cells.length; j++)
                table.rows[i].cells[j].onclick = function() {
                    tableText(this);
                };
        }
    }
}

function tableText(tableCell) {
    alert(tableCell.innerHTML);
}