"use strict";

let Lotto = require("./lottoRow.js");
const express = require("express");
const router = express.Router();

let lotto = {};

router.get("/lotto-json", (req, res) => {
    lotto.myData = [];
    if ("row" in req.query) {
        lotto.myData = req.query.row.split(",");
    }

    lotto.userData = [];

    lotto.data = [];
    for (let i = 0; i < 7; i++) {
        lotto.userData[i] = parseInt(lotto.myData[i]);
        let random = Math.floor(Math.random() * 35 + 1);
        if (!lotto.data.includes(random)) {
            lotto.data[i] = random;
        } else {
            i--;
        }
    }
    lotto.hits = [];
    lotto.amountOfHits = 0;

    lotto.data.forEach(element => {
        if (lotto.userData.includes(element)) {
            lotto.hits[lotto.amountOfHits] = element;
            lotto.amountOfHits++;
        }
    });


    res.json({
        "lottoGen": lotto.data,
        "userData": lotto.userData,
        "amountOfHits": lotto.amountOfHits,
        "hits": lotto.hits
    });

});

module.exports = router;