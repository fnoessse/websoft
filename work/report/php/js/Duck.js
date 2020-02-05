/*


*/

(function() {
    var speed = 2;
    var element = document.getElementById("duck");
    console.log(element);

    element.addEventListener("click", function() {
        element.innerHTML = "<p>" + "Kwack!" + "</p>";
        speed = 0;
        var timer = setInterval(function() {
            speed = Math.floor(Math.random() * 5) + 1;
            element.innerHTML = "";
            clearInterval(timer);
        }, 2000);

    });


    var id = setInterval(frame, 10);
    var direction = true;

    element.addEventListener("mouseover", function() {
        if (direction) {
            direction = false;
        } else {
            direction = true;
        }
        speed = Math.floor(Math.random() * 5) + 1;
    });

    function frame() {

        if (direction) {
            element.style.left = element.offsetLeft + speed + "px";
            if (element.offsetLeft > window.innerWidth - (128 + speed)) {
                direction = false;
                speed = Math.floor(Math.random() * 5) + 1;
            }
        } else {
            element.style.left = element.offsetLeft - speed + "px";
            if (element.offsetLeft < 20) {
                direction = true;
                speed = Math.floor(Math.random() * 5) + 1;
            }
        }
    }


})();