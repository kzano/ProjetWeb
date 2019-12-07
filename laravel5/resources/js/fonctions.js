
$(document).ready(function () {

    // ajoute la classe "is-invalid"
    function ajoutClassErreur() {
        $("#inputIdentifiant").addClass("is-invalid");
        $("#inputPassword").addClass("is-invalid");
    };

    // supprime la classe "is-invalid"
    function suppClassErreur() {
        $("#inputIdentifiant").removeClass("is-invalid");
        $("#inputPassword").removeClass("is-invalid");
    };

    ajoutClassErreur();
});
