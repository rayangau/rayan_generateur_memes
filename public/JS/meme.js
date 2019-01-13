//////////////////////////////////////////////////////////////////////////////////////////////
///////////////// Visualiser en direct le texte écrit sur le formulaire.//////////////////////

// Concerne le texte contenu dans le premier input.
// On récupère l'id de l'input.
var affiche1 = document.getElementById('ecrit1');

// Le texte va s'afficher dans une div.
// On récupère l'id de la div texte.
affiche1.onkeyup = function(){
    document.getElementById('deplace1').innerHTML = affiche1.value;
}

// Concerne le texte contenu dans le deuxième input.
// On récupère l'id de l'input.
var affiche2 = document.getElementById('ecrit2');

// Le texte va s'afficher dans une div.
// On récupère l'id de la div texte.
affiche2.onkeyup = function(){
    document.getElementById('deplace2').innerHTML = affiche2.value;
}

/////////////////////////////////////////////////////////////////////////////////////////////
//////// Déplacer à l'aide de la souris une div avec le texte contenu à l'intérieur./////////

/////////////////////////// Déplace la première div et son texte.////////////////////////////
var mousePosition1; 
var offset1 = [0,0];
var div1;
var isDown1 = false;

div1 = document.getElementById("deplace1");
// Défini la position par défaut de la première div rouge.
div1.style.left = "130px";
div1.style.top = "270px";
// La possition absolute (CSS) de la div rouge prend en compte l'id box.
document.getElementById("box").appendChild(div1);

div1.addEventListener('mousedown', function(e) {
    isDown1 = true;
    offset1 = [
        div1.offsetLeft - e.clientX,
        div1.offsetTop - e.clientY
    ];""
}, true);

document.addEventListener('mouseup', function() {
    isDown1 = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown1) {
        mousePosition1 = {

            x : event.clientX,
            y : event.clientY

        };
        // Déplace la div avec les abscisses x & y.
        div1.style.left = (mousePosition1.x + offset1[0]) + 'px';
        div1.style.top  = (mousePosition1.y + offset1[1]) + 'px';
        console.log(div1.style.left);
        // Défini la valeur des input cachés de la première div.
        document.getElementById('left1').value = (mousePosition1.x + offset1[0]);
        document.getElementById('top1').value = (mousePosition1.y + offset1[1]);
    }
}, true);


////////////////////////////// Déplace la deuxième div et son texte.//////////////////////////
var mousePosition2;
var offset2 = [0,0];
var div2;
var isDown2 = false;

div2 = document.getElementById("deplace2");
// Défini la position par défaut de la première div rouge.
div2.style.left = "130px";
div2.style.top = "410px";

// La possition absolute (CSS) de la div rouge prend en compte l'id box.
document.getElementById("box").appendChild(div2);

div2.addEventListener('mousedown', function(e) {
    isDown2 = true;
    offset2 = [
        div2.offsetLeft - e.clientX,
        div2.offsetTop - e.clientY
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown2 = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown2) {
        mousePosition2 = {

            x : event.clientX,
            y : event.clientY

        };
        // Déplace la div avec les abscisses x & y.
        div2.style.left = (mousePosition2.x + offset2[0]) + 'px';
        div2.style.top  = (mousePosition2.y + offset2[1]) + 'px';
        // Défini la valeur des imput cachés de la deuxième div.
        document.getElementById('left2').value = (mousePosition2.x + offset2[0]);
        document.getElementById('top2').value = (mousePosition2.y + offset2[1]);
    }
}, true);