document.addEventListener("DOMContentLoaded", function () {
    document.getElementsByClassName("toggle")[0].addEventListener("click", function () {
        var nb = document.getElementById("navBar");
        if (nb.getAttribute("class") !== "active") {
            nb.setAttribute("class", "active");
        } else {
            nb.removeAttribute("class");
        }
    });
});

// function resizePage(){
//     var element, style;
//     elem = document.querySelector('.active');
//     style = getComputedStyle(elem);
//     var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
//     if(width >= 950 && width <= 951){ // your page breakpoint happens probably between 525px and 526px width at this range we gonna disable the transition temporarily
//         style.transitionProperty="none";
//     } 
//     else{
//         style.transitionProperty="visibility, opacity, transform";
//     }
// }