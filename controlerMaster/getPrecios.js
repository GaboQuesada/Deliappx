

function getAllPrecios() {

    $.ajax({
        url: "modelMaster/getprecios.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var tam = 0;
            var d = respuesta.resultados;
            $("#tablaPrecios").empty();
            $.each(d, function (i, item) {
                tam = tam + 1;
                $("#tablaPrecios").append("\
<tr>\n\
<td>" + d[i].pre_id + "</td>\n\
                        <td>" + d[i].pre_nob + "</td>\n\
                        <td>" + d[i].pre_mon + "</td>\n\
                        <td>" + d[i].pre_des + "</td>\n\
                    </tr>");
            });
        },
        error: function () {

        }
    });

}


$(document).ready(function () {
    getAllPrecios();


})