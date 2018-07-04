function login() {

    var datos = new Array();
    var nb = new objPrm("Nombre", $("#lnb").val());
    datos.push(nb);
    var pb = new objPrm("Contraseña", $("#lps").val());
    datos.push(pb);

    var res = new objRes();
    res = validarEsVacido(datos);

    if (res.est === "ko") {
        alertify.error(res.nombre + " " + res.msj);
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de ' + res.nombre,
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();

    } else {

        $.ajax({
            url: "model/usuarios_check.php",
            type: 'POST',
            dataType: "json",
            data: {us: $("#lnb").val(), ps: $("#lps").val()},
            beforeSend: function () {



            },
            success: function (respuesta) {

                var existe = respuesta.resultados;

                if (existe == 0) {

                    alertify.error('Rellene la informacion');

                    alertify.alert()
                            .setting({
                                'label': 'Entendido',
                                'message': 'Contraseña o Usuario incorrectos ',
                                'onok': function () {
                                    alertify.success('Vuelva a intentarlo :)');
                                }
                            }).show();
                } else {

                    $.ajax({
                        url: "model/usuariosgetByPass.php",
                        type: 'POST',
                        dataType: "json",
                        data: {us: $("#lnb").val(), ps: $("#lps").val()},
                        beforeSend: function () {
                        },
                        success: function (respuesta) {

                            
                            location.href = "lobby.php";
                        },
                        error: function () {
                            alert("fallo 2");
                        }
                    });
                }
            },
            error: function () {
                alert("fallo 1");
            }
        });
    }

}

$(document).ready(function () {

    $("#btnToLogin").click(function (event) {
        event.preventDefault();
        login();

    });

});

