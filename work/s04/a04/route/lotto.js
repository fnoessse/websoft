/**
 * General routes.
 */
"use strict";

let Lotto = require("./lottoRow.js");

const express = require("express");
const router = express.Router();
let lotto = {};



router.get("/lotto", (req, res) => {

    if ("row" in req.query) {
        lotto.myData = req.query.row.split(",");
    }

    lotto.myData = lotto.myData.slice(0, 7);

    lotto.data = [];
    for (let i = 0; i < 7; i++) {
        let random = Math.floor(Math.random() * 35 + 1);
        if (!lotto.data.includes(random)) {
            lotto.data[i] = random;
        } else {
            i--;
        }
    }
    lotto.hits = 0;
    lotto.match = [];
    for (let i = 0; i < lotto.data.length; i++) {
        if (lotto.myData.includes(lotto.data[i].toString())) {
            lotto.match[lotto.hits] = lotto.data[i];
            lotto.hits++;
        }
    };


    lotto.data.sort((a, b) => a - b);
    lotto.myData.sort((a, b) => a - b);
    lotto.match.sort((a, b) => a - b);

    res.render("lotto", lotto);

});



module.exports = router;