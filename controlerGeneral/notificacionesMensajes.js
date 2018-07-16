


function getcountms() {


    $.ajax({
        url: "modelGeneral/mensageacNotiCount.php",
        type: 'POST',
        dataType: "json",
        data: {id: $("#usid").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {
            var totales = 0;

            var d = respuesta.resultados;


            var resultado = parseInt(totales) + parseInt(d);
            totales = resultado;
            

            $.ajax({
                url: "modelGeneral/mensageBroadcastinggetnoticount.php",
                type: 'POST',
                dataType: "json",
                data: {us: $("#usid").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {


                    var d = respuesta.resultados;
                    var resultado = parseInt(totales) + parseInt(d);
                    totales = resultado;
                    

                  
                    $("#msnoti").text(totales);
                },
                error: function () {

                }
            });

        },
        error: function () {

        }
    });






}




$(document).ready(function () {

    getcountms();

});