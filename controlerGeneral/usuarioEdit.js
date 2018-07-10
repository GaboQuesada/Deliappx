function readURLModificaU(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#newusimgp')
                    .attr('src', e.target.result)
                    .width(220)
                    .height(180);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function setdata() {
    $.ajax({
        url: "modelGeneral/usuariosgetByCe.php",
        type: 'POST',
        dataType: "json",
        data: {ce: $("#NewUserCe").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d = respuesta.resultados;

            $.each(d, function (i, item) {

                var imgsrc = "imgUser/" + d[i].us_im;


                $("#newusimgp").attr("src", imgsrc);
                $("#NewUserName").val(d[i].us_no);
                $("#NewUserAp1").val(d[i].us_ap1);
                $("#NewUserAp2").val(d[i].us_ap2);
                $("#NewUserCo").val(d[i].us_co);
                $("#NewUserUs").val(d[i].us_us);
                $("#NewUserPa").val(d[i].us_ps);
                $("#usidimg").val(d[i].us_im);

            });
        },
        error: function () {

        }
    });
}








$(document).ready(function () {

    setdata();


    $("#frmNewUser").submit(function (e) {
        e.preventDefault();

        alertify.confirm('Confirm Title', 'Confirm Message', function () {


            var formElement = document.getElementById("frmNewUser");
            var parametros = new FormData(formElement);
            var imgVal = $('#NewUserIm').val();
            if (imgVal == '')
            {
                x = "si";
                parametros.append("fileex", x);
            }
            parametros.append("fileex", x);

            if ($("#NewUserName").val() == "" || $("#NewUserAp1").val() == "" || $("#NewUserAp2").val() == "" || $("#NewUserCo").val() == ""
                    || $("#NewUserUs").val() == "")
            {
                alert("Rellene todos los campos")
            } else {
                $.ajax({
                    url: "modelGeneral/usuarioUpdate.php",
                    type: "POST",
                    contentType: false,
                    data: parametros,
                    processData: false,
                    beforeSend: function () {

                        $('#div_carga').show();

                    },
                    success: function () {
$("#iraAncla")[0].click();
                        setdata();
                        $('#div_carga').hide();
                        alertify.alert('Importante', 'Los cambios surgiran efecto en el sistema en el proximo inicio de sesion', function () {
                            alertify.success('Ok');
                        });

                    },
                    error: function (r) {

                        alert("Error del servidor");
                    }
                });
            }

        }
        , function () {
            setdata();
            alertify.error('No se ha modificado')
        });


    });

});
