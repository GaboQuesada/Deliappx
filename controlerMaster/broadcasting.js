
var ultimoid;
var userid;



function broadcastingGetAll() {
// muestra todos los mensajes 
    $.ajax({
        url: "modelMaster/broadcastingGetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var d = respuesta.resultados;
            $("#BroasdaLL").empty();
            $.each(d, function (i, item) {

                var str = d[i].mc_ti;

                var n = str.substring(0, 20);


                var ti = d[i].mc_ti;
                var cp = d[i].mc_mg;
                var fv = d[i].bm_fv;
                var he = d[i].bm_ho;




                $("#BroasdaLL").append('<li class="list-group-item">\n\
<div class="msgshowbox msgshowboxtitle" title="' + d[i].mc_ti + '" ><i class="fab fa-readme"></i> ' + n + '</div>\n\
<div class="msgshowbox" ><i class="fas fa-calendar-alt"></i> ' + d[i].bm_fv + ' </div>\n\
<div class="msgshowbox" ><i class="fas fa-clock"></i> ' + d[i].bm_ho + '</div>\n\
<div class="msgshowbox" ><button onclick="seeinbox(\'' + ti + '\',  \'' + cp + '\', \'' + fv + '\' , \'' + he + '\' )" type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button></div>\n\
</li>');
            });
        },
        error: function () {

        }
    });


}

function sendBroadcastingMaster(id, ti, cu) {

    var fr = "Master";                     // de donde se envia (master,distribuidor,  agente)


    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth() + 1; //hoy es 0!
    var yyyy = hoy.getFullYear();

    if (dd < 10) {
        dd = '0' + dd
    }

    if (mm < 10) {
        mm = '0' + mm
    }

    hoy = yyyy + '-' + mm + '-' + dd;



    var fv = hoy;                         // fecha de envio


    var hora = new Date();
    var ho = hora.getHours() + ":" + hora.getMinutes() + ":" + hora.getSeconds();


    $.ajax({
        url: "modelMaster/broadcastingenviar.php",  // guarda el mensaje 
        type: 'POST',
        dataType: "json",
        data: {fr: fr, se: id, ti: ti, mg: cu, fv: fv, ho: ho},
        beforeSend: function () {

        },
        success: function (respuesta) {


            $.ajax({
                url: "modelMaster/broadcastingObtenerUltimo.php", // obtiene el ultimo 
                type: 'POST',
                dataType: "json",

                beforeSend: function () {

                },
                success: function (respuesta) {

                    var d = respuesta.resultados[0].bm_id;
                    ultimoid = d; // el ultimo
                  

                    // aqui se llama a cada uno de los usuarios 
                    $.ajax({
                        url: "modelMaster/usuariosgetAll.php",
                        type: 'POST',
                        dataType: "json",
                        beforeSend: function () {
                            $("#iraAncla")[0].click();
                            $('#div_carga').show();
                        },
                        success: function (respuesta) {

                            broadcastingGetAll();
                            $("#profile-tab2")[0].click();
                            $("#msjccancel").click();
                            $('#div_carga').hide();
                            alertify.success("Mensaje enviado.");


                            var d = respuesta.resultados;

                            $.each(d, function (i, item) {

                                //llenando las notificaciones
                                $.ajax({
                                    url: "modelMaster/brodcastingMasterNotificaciones.php",
                                    type: 'POST',
                                    dataType: "json",
                                    data: {us:d[i].us_id,ms:ultimoid },
                                    beforeSend: function () {

                                    },
                                    success: function (respuesta) {
                                      
                                    },
                                    error: function () {

                                    }
                                });

                            });
                        },
                        error: function () {

                        }
                    });

                },
                error: function () {

                }
            });



        },
        error: function () {

        }
    });



}

function seeinbox(ti, cp, fe, he) {




    $("#swtitulo").val(ti);
    $("#swcuerpo").val(cp);
    $("#spmnb").text("Todos los usuarios")
    $("#fcv").html("<strong>Fecha de envio:</strong> " + fe);
    $("#hrv").html("<strong>Hora de envio:</strong> " + he);


}


$(document).ready(function () {
    broadcastingGetAll();

    $("#msjsend").click(function () {

        var titulo = $("#msjcti").val();
        var cuerpo = $("#msjccp").val();
        var idquien = $("#usid").val();
        if (titulo === "" || cuerpo === "") {

            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Rellene los campos',
                        'onok': function () {

                        }
                    }).show();

        } else {
            sendBroadcastingMaster(idquien, titulo, cuerpo);
        }


    });

});
