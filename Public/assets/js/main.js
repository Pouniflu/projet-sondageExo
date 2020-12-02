// Pour compter les votes
let i = 0;
let x = 0;
let w = 0;
let z = 0;

// Au clic sur le bouton
$("#sendVote1").click(function() {
    // On incrémente i de 1
    i++;

    // On calcule pour que les résultats soient donnés en pourcentage
    i = (100 / (i+x+w+z)) * i;
    $("#nbVote1").html(i + " %");
    x = (100 / (i+x+w+z)) * x;
    $("#nbVote2").html(x + " %");
    w = (100 / (i+x+w+z)) * w;
    $("#nbVote3").html(w + " %");
    z = (100 / (i+x+w+z)) * z;
    $("#nbVote4").html(z + " %");

    // On supprime les boutons de vote pour que l'utilisateur ne puisse pas voter plusieurs fois
    $("#vote").html("Tu as bien voté pour le choix n°1 !");
});

// Même chose pour les autres boutons
$("#sendVote2").click(function() {
    x++;
    i = (100 / (i+x+w+z)) * i;
    $("#nbVote1").html(i + " %");
    x = (100 / (i+x+w+z)) * x;
    $("#nbVote2").html(x + " %");
    w = (100 / (i+x+w+z)) * w;
    $("#nbVote3").html(w + " %");
    z = (100 / (i+x+w+z)) * z;
    $("#nbVote4").html(z + " %");
    $("#vote").html("Tu as bien voté pour le choix n°2 !");
});

$("#sendVote3").click(function() {
    w++;
    i = (100 / (i+x+w+z)) * i;
    $("#nbVote1").html(i + " %");
    x = (100 / (i+x+w+z)) * x;
    $("#nbVote2").html(x + " %");
    w = (100 / (i+x+w+z)) * w;
    $("#nbVote3").html(w + " %");
    z = (100 / (i+x+w+z)) * z;
    $("#nbVote4").html(z + " %");
    $("#vote").html("Tu as bien voté pour le choix n°3 !");
});

$("#sendVote4").click(function() {
    z++;
    i = (100 / (i+x+w+z)) * i;
    $("#nbVote1").html(i + " %");
    x = (100 / (i+x+w+z)) * x;
    $("#nbVote2").html(x + " %");
    w = (100 / (i+x+w+z)) * w;
    $("#nbVote3").html(w + " %");
    z = (100 / (i+x+w+z)) * z;
    $("#nbVote4").html(z + " %");
    $("#vote").html("Tu as bien voté pour le choix n°4 !");
});