var miniatures = document.getElementsByClassName("miniature");

for (var miniature of miniatures) {
    miniature.addEventListener("click", function(event) {

        // console.log(event.target.src)
        afficheImage(event);

    });  
}


function afficheImage(event) {

    document.getElementById("ImageGrand").innerHTML = '<img src=' + event.target.src + '>';
    document.getElementById("Rendu").value = event.target.src;
}


// console.log("test");


/* ========================================================== JS FORMULAIRE ============================================= */

