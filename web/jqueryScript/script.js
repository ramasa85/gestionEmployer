$(document).ready(function() {
        $('#form').submit(function() {
            var noms = $( 'nom');
            var valid =true;
            if($("#noms").val() == " "){
                $("#nom").next(".error-message").fadeIn().text('Veuiller enter le nom du departement');
                valid = false;
            }
            return valid;

        });
    });