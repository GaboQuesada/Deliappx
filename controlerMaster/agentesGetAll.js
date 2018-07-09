

$(document).ready(function () {
    getAll();
    $("#profile-tab").click(function () {
        getAll();

    })


})

function getAll() {

    $.ajax({
        url: "model/agentesGetAll.php",
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
<td>" + d[i].ag_id + "</td>\n\
<td><img src='userimg/" + d[i].us_im + "' width='50' height='50'>&numsp;" + d[i].us_no + " " + d[i].us_ap1 + " " + d[i].us_ap2 + "</td>\n\
<td><img src='distimg/" + d[i].dis_lo + "' width='50' height='50'>&numsp;" + d[i].dis_no + "</td>\n\
<td><button type='button' class='btn btn-info'>Ver Negocios</button>\n\
<button type='button' class='btn btn-info'>Estadistica</button>\n\
<button type='button' class='btn btn-warning'>Editar</button></td></tr>");
            });
        },
        error: function () {

        }
    });

}