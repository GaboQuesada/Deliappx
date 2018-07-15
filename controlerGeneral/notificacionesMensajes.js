


function getcountms() {

    $.ajax({
        url: "modelGeneral/mensageacNotiCount.php",
        type: 'POST',
        dataType: "json",
        data: {id: $("#usid").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d = respuesta.resultados;
            
            $("#msnoti").text(d);

        },
        error: function () {

        }
    });



}




$(document).ready(function () {

    getcountms();

});