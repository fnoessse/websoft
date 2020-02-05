function toggle_visibility(id) {
    var e = document.getElementById(id);
    if (e.style.opacity == 1) {
        e.style.opacity = 0;
    } else {
        e.style.opacity = 1;
    }
}