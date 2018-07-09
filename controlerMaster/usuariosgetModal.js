$(document).ready(function () {

    $("#showuserdiinfo").hide();


    $("#modelusuariosDistribuidores").click(function () {

        $.ajax({
            url: "model/usuariosgetAll.php",
            type: 'POST',
            dataType: "json",
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = 0;
                var d = respuesta.resultados;
                $("#UsuariosVerTabledist").empty();
                $.each(d, function (i, item) {
                    tam = tam + 1;
                    $("#UsuariosVerTabledist").append("\
<tr>\n\
<td>" + tam + "</td>\n\
<td>" + d[i].us_no + " " + d[i].us_ap1 + " " + d[i].us_ap2 + "</td>\n\
<td>" + d[i].us_ce + "</td>\n\
<td><img src='userimg/" + d[i].us_im + "' width='50' height='50'></td>\n\
<td><button onclick='setoutmodal(\"" + d[i].us_ce + "\")' type='button' class='btn btn-warning'>Escoger</button></td>\n\</tr>");
                });
            },
            error: function () {

            }
        });
    })


})


function setoutmodal(pce) {
    $.ajax({
        url: "model/usuariosgetByCe.php",
        type: 'POST',
        dataType: "json",
        data: {ce: pce},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d = respuesta.resultados;

            $.each(d, function (i, item) {

                var imgsrc = "userimg/" + d[i].us_im;

                $("#disusids").val(d[i].us_id);
                $("#disusrid").attr("src", imgsrc);
                $("#disusce").text(d[i].us_ce);
                $("#disusno").val(d[i].us_no + " " + d[i].us_ap1 + " " + d[i].us_ap2);
                $("#showuserdiinfo").show();
                $("#modiu").click();

            });
        },
        error: function () {

        }
    });
}