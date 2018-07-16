

$(document).ready(function (){
   
    $("#profile-tab").click(function () {
   
    $.ajax({
        url: "modelMaster/distribuidorGetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var tam = 0;
            var d = respuesta.resultados;
            $("#UsuariosVerTable").empty();
            $.each(d, function (i, item) {
                tam = tam + 1;
                $("#UsuariosVerTable").append("\
<tr>\n\
<td>" + tam + "</td>\n\
<td><img src='imgDist/" + d[i].dis_lo + "' width='50' height='50'></td>\n\
<td>" + d[i].dis_no + "</td>\n\
<td>" + d[i].us_no + " " + d[i].us_ap1 + " " + d[i].us_ap2 + "</td>\n\
<td><button type='button' class='btn btn-info'>Ver agentes</button>\n\
<button type='button' class='btn btn-info'>Ver Clientes</button>\n\
<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#editdis'>Editar</button></td></tr>");
            });
        },
        error: function () {

        }
    });
})
    
    
})
