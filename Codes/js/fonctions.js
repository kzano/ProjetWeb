$(document).ready(function () {

    var $identifiant = $('#inputIdentifiant');

    // premier point d'insertion
    $('#inputIdentifiant').focus();

    $identifiant.keydown(function(){
        $("#inputIdentifiant").css("background-color", "yellow");
      });

    

    // ajoute la classe "is-invalid"
    function ajoutClassErreur(inputName) {
        $(inputName).addClass("is-invalid");
    };

    // supprime la classe "is-invalid"
    function suppClassErreur(inputName) {
        $(inputName).removeClass("is-invalid");
    };

    $identifiant.keyup(function () {
        if ($(this).val().length < 5) { // si la chaîne de caractères est inférieure à 5
            ajoutClassErreur("#inputIdentifiant");
        }
    });

    console.log($identifiant);
});