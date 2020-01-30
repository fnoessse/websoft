/**
 * A sample of a main function stating the famous Hello World.
 *
 * @returns void
 */
function main() {
    let a = 1;
    let b;
    let c = 0;
    let range = "";
    let range2 = "";

    b = a + 1;

    for (let i=0; i < 9; i++) {
        range += i + ", ";
    }

    while (c != 10){
        c++;
        if(c % 2 == 0){
            range2 += c + ", ";
        }
    }

    var moment = require('moment');
    var created = moment().format('YYYY-MM-DD hh:mm:ss');
    console.log(created);
    console.info("Hello World");
    console.info(range.substring(0, range.length - 2));
    console.info(a, b);
    console.info(range2.substring(0, range2.length -2));

   

}
main();

