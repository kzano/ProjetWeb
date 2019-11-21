$(document).ready(function () {

    // recupere l'objet "$('#inputIdentifiant')" jquery dans la variable "$identifiant"
    var $inputNom = $('#inputNom');

    // ajoute la classe "is-invalid"
    function addClassInvalid(inputName) {
        $(inputName).addClass('is-invalid');
    };

    // supprime la classe "is-invalid"
    function removeClassInvalid(inputName) {
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

    //$inputNom.aucuneSaisie()
    $inputNom.keydown(function () {
        if (($($inputNom).val().empty) && ($(this).blur())) {
            addClassInvalid($inputNom);
        };
    });


});