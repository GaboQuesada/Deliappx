

$(document).ready(function () {

    $("#frmNewUser").submit(function (e) {
        e.preventDefault();

        url = "model/usuarioInsert.php";
        var parametros = new FormData($(this)[0]);

        if ($("#NewUserCe").val() === "" ||
                $("#NewUserName").val() === "" ||
                $("#NewUserAp1").val() === "" ||
                $("#NewUserAp2").val() === "" ||
                $("#NewUserUs").val() === "" ||
                $("#NewUserIm").val() === "" ||
                $("#NewUserCo").val() === "" ||
                $("#NewUserPa").val() === "")
        {
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Por favor rellene todos los campos',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();
        } else {

            $.ajax({
                type: "POST",
                url: url,
                data: parametros,
                contentType: false,
                processData: false,
                beforeSend: function () {

                    $('#div_carga').show();

                },
                success: function (data) {
                    $('#div_carga').hide();

                    $("#NewUserName").val("");
                    $("#NewUserAp1").val("");
                    $("#NewUserAp2").val("");
                    $("#NewUserUs").val("");
                    $("#NewUserIm").val("");
                    $("#NewUserCo").val("");
                    $("#NewUserPa").val("");
                    alertify.success("Usuario Agregado");
                    $("#profile-tab").click();


                },
                error: function () {

                    alert("Error del servidor");
                }
            });
        }

    });


});

