$(document).ready(function () {

    // recupere l'objet "$('#inputIdentifiant')" jquery dans la variable "$identifiant"
    var $identifiant = $('#inputIdentifiant');

    // ajoute la classe "is-invalid"
    function addClassErreur(inputName) {
        $(inputName).addClass('is-invalid');
    };

    // supprime la classe "is-invalid"
    function removeClassErreur(inputName) {
        $(inputName).removeClass('is-invalid');
    };

    // ajoute la classe "is-valid"
    function addClassValid(inputName) {
        $(inputName).addClass('is-valid');
    };

    // supprime la classe "is-valid"
    function removeClassValid(inputName) {
        $(inputName).removeClass('is-valid');
    };

    // premier point d'insertion a l'ouverture de la page d'accueil
    $('#inputIdentifiant').focus();
});