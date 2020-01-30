/*

*/

var data;

(function() {
    'use strict';
    //fetch('https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1080')
    fetch("data/data.json")
.then((response) => {
    return response.json();
}).then((myjson) => {
    var element = document.getElementById('content');  
    element.innerHTML = (JSON.stringify(myjson));
    
    data = myjson;
    
    

});

myjson.Skolenheter.array.forEach(element => {
    console.log(element)
});


}());




