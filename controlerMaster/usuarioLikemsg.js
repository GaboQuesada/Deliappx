



$(document).ready(function () {
     $("#userSearchre").hide();

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

                        $("#userSearchre").append('<li class="list-group-item">\n\
                                        <div>\n\
                                            <div class="row">\n\
                                                <div class="col-sm-8">\n\
                                                    <img src="imgUser/' + d[i].us_im + '"width="30" height="30" >&numsp;\n\
                                                    ' + d[i].us_no + ' ' + d[i].us_ap1 + ' ' + d[i].us_ap2 + '\n\
                                                </div>\n\
                                                <div class="col-sm-3">\n\
                                                    <button type="button" class="btn btn-primary btn-sm">Enviar Mensaje</button>\n\
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


});