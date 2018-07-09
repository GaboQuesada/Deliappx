

$(document).ready(function () {

    $("#frmNewDist").submit(function (e) {
        e.preventDefault();

        url = "model/distribuidoraInsert.php";
        var parametros = new FormData($(this)[0]);

        if ($("#NewUserCe").val() === "" ||
                $("#disusno").val() === "" ||
                $("#disusids").val() === "" ||
                $("#NewDistIm").val() === "")
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

                    $("#disusno").val("");
                    $("#disusids").val("");
                    $("#NewDistIm").val("");
                   
                    alertify.success("Distribuidor Agregado");
                    $("#profile-tab").click();


                },
                error: function () {

                    alert("Error del servidor");
                }
            });
        }

    });


});

