$(document).ready(function () {

    // recupere l'objet "$('#inputIdentifiant')" jquery dans la variable "$identifiant"
    var $inputNom = $('#inputNom');

    //$inputNom.aucuneSaisie()
    $inputNom.keydown(function () {
        if (($($inputNom).val().empty) && ($(this).blur())) {
            addClassInvalid($inputNom);
        };
    });


});