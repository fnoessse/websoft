class Lotto {
    constructor() {
        this.lotto = null;
    }

    newNum(num = 35) {
        this.lotto = Math.floor(Math.random() * num + 1);
        return this.lotto;
    }

}

module.exports = Lotto;