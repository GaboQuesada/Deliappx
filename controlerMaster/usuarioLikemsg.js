
function setinfo(pr, nb, pge) {
    $("#userSearch").val("");
    $("#userSearchre").empty();
    $("#userSearchre").hide();



    var img = "imgUser/" + pr;
    var imgr = "imgUser/" + $("#usim").val();



    $("#pmim").attr("src", img);
    $("#pmnb").text(nb);

    $("#rmim").attr("src", imgr);
    $("#rmnb").text($("#usno").val());

    $("#ge").val(pge);



}

function sendmsg(pfr) {

    var fr = pfr;                     // de donde se envia (master,distribuidor,  agente)
    var se = $("#usid").val();         // quien lo envia (id)
    var ge = $("#ge").val();           // quien lo recibe(id)
    var ti = $("#mstitulo").val();     // Titulo del mensaje(id)
    var mg = $("#mscuerpo").val();     // Cuerpo del mensaje(id)

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



    var fc = hoy;                         // fecha de envio
    var es = "no";                        // estado leido por el receptor

    var hora = new Date();
    var ho = hora.getHours() + ":" + hora.getMinutes() + ":" + hora.getSeconds();


    $.ajax({
        url: "modelGeneral/mensageriacEnviar.php",
        type: 'POST',
        dataType: "json",
        data: {fr: fr, se: se, ge: ge, ti: ti, mg: mg, fc: fc, es: es, ho: ho},
        beforeSend: function () {
            $("#iraAncla")[0].click();
            $('#div_carga').show();
        },
        success: function (respuesta) {

            getAll();
            $("#msgmodalclose").click();
            $('#div_carga').hide();
            alertify.success("Mensaje enviado.");

        },
        error: function () {

        }
    });



}

function settoshowbox(img, nb, ti, cp, fe, he)
{


    var imgp = "imgUser/" + img;
    $("#spmim").attr("src", imgp);
    $("#spmnb").text(nb);
    $("#swtitulo").val(ti);
    $("#swcuerpo").val(cp);
    $("#fcv").html("<strong>Fecha de envio:</strong> " + fe);
    $("#hrv").html("<strong>Hora de envio:</strong> " + he);

}

function getAll() {
    $.ajax({
        url: "modelGeneral/mensageriaacGetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var d = respuesta.resultados;
            $("#MSGaLL").empty();
            $.each(d, function (i, item) {

                var str = d[i].mc_ti;

                var n = str.substring(0, 20);

                var img = d[i].us_im;
                var nb = d[i].us_no + '  ' + d[i].us_ap1 + '  ' + d[i].us_ap2;
                var ti = d[i].mc_ti;
                var cp = d[i].mc_mg;
                var fe = d[i].mc_fc;
                var he = d[i].mc_ho;
                var fr = d[i].mc_fr;



                $("#MSGaLL").append('<li class="list-group-item">\n\
<div class="msgshowbox" ><img title="' + d[i].us_no + '  ' + d[i].us_ap1 + '  ' + d[i].us_ap2 + ' - ' + d[i].us_ce + '" src="imgUser/' + d[i].us_im + '" width="30" height="30"/></div>\n\
<div class="msgshowbox msgshowboxtitle" title="' + d[i].mc_ti + '" ><i class="fab fa-readme"></i> ' + n + '</div>\n\
<div class="msgshowbox" ><i class="fas fa-calendar-alt"></i> ' + d[i].mc_fc + ' </div>\n\
<div class="msgshowbox" ><i class="fas fa-clock"></i> ' + d[i].mc_ho + '</div>\n\
<div class="msgshowbox" ><button onclick="settoshowbox(\'' + img + '\',  \'' + nb + '\', \'' + ti + '\' , \'' + cp + '\' , \'' + fe + '\' , \'' + he + '\',\'' + fr + '\' )" type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button></div>\n\
</li>');
            });
        },
        error: function () {

        }
    });



}


function getByUser() {
    $.ajax({
        url: "modelGeneral/mensageacXuser.php",
        type: 'POST',
        dataType: "json",
        data: {bu: $("#userse").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {

            var d = respuesta.resultados;
            $("#MSGaLL").empty();
            $.each(d, function (i, item) {

                var str = d[i].mc_ti;

                var n = str.substring(0, 20);

                var img = d[i].us_im;
                var nb = d[i].us_no + '  ' + d[i].us_ap1 + '  ' + d[i].us_ap2;
                var ti = d[i].mc_ti;
                var cp = d[i].mc_mg;
                var fe = d[i].mc_fc;
                var he = d[i].mc_ho;
                var fr = d[i].mc_fr;



                $("#MSGaLL").append('<li class="list-group-item">\n\
<div class="msgshowbox" ><img title="' + d[i].us_no + '  ' + d[i].us_ap1 + '  ' + d[i].us_ap2 + ' - ' + d[i].us_ce + '" src="imgUser/' + d[i].us_im + '" width="30" height="30"/></div>\n\
<div class="msgshowbox msgshowboxtitle" title="' + d[i].mc_ti + '" ><i class="fab fa-readme"></i> ' + n + '</div>\n\
<div class="msgshowbox" ><i class="fas fa-calendar-alt"></i> ' + d[i].mc_fc + ' </div>\n\
<div class="msgshowbox" ><i class="fas fa-clock"></i> ' + d[i].mc_ho + '</div>\n\
<div class="msgshowbox" ><button onclick="settoshowbox(\'' + img + '\',  \'' + nb + '\', \'' + ti + '\' , \'' + cp + '\' , \'' + fe + '\' , \'' + he + '\',\'' + fr + '\' )" type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button></div>\n\
</li>');
            });
        },
        error: function () {

        }
    });



}





$(document).ready(function () {

    getAll();


    $("#userSearchre").hide();

    $("#userse").keyup(function () {



        if ($("#userse").val() === "") {

          getAll();
          
        } else {

            getByUser();
        }

    });

    $("#userSearch").keyup(function () {

        $("#userSearchre").empty();
        $("#userSearchre").hide();

        if ($("#userSearch").val() === "") {


        } else {

            $.ajax({
                url: "modelMaster/usuarioLike.php",
                type: 'POST',
                dataType: "json",
                data: {userSearch: $("#userSearch").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {
                    $("#userSearchre").show();
                    var tam = 0;
                    var d = respuesta.resultados;
                    $("#userSearchre").empty();
                    $.each(d, function (i, item) {

                        var nombre = d[i].us_no + ' ' + d[i].us_ap1 + ' ' + d[i].us_ap2;
                        $("#userSearchre").append('<li class="list-group-item">\n\
                                        <div>\n\
                                            <div class="row">\n\
                                                <div class="col-sm-8">\n\
                                                    <img src="imgUser/' + d[i].us_im + '"width="30" height="30" >&numsp;\n\
                                                    ' + d[i].us_no + ' ' + d[i].us_ap1 + ' ' + d[i].us_ap2 + '\n\
                                                </div>\n\
                                                <div class="col-sm-3">\n\
                                                    <button type="button" onclick="setinfo(\'' + d[i].us_im + '\',  \'' + nombre + '\', \'' + d[i].us_id + '\')" data-toggle="modal" data-target="#Modalmsg" class="btn btn-primary btn-sm">Enviar Mensaje</button>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </li>');
                    });
                },
                error: function () {

                }
            });
        }
    });

    $("#msgenvBtn").click(function () {

        sendmsg("Master");

    });


});