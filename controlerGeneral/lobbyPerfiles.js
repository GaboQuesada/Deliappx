
$(document).ready(function () {


    $.ajax({
        url: "modelGeneral/perfilesMasterIf.php",
        type: 'POST',
        dataType: "json",
        data: {us: $("#idusp").val()},
        beforeSend: function () {



        },
        success: function (respuesta) {

            var existe = respuesta.resultados;

            if (existe == 0) {

            } else {

                $.ajax({
                    url: "modelGeneral/perfilesMaster.php",
                    type: 'POST',
                    dataType: "json",
                    data: {us: $("#idusp").val()},
                    beforeSend: function () {
                    },
                    success: function (respuesta) {
                        
                        
                        $("#listadeperfiles").append('<li class=" list-group-item cuadro "> \n\
                <div class="  row  ">\n\
                    <div class="col-sm">\n\
                    <img style="display: inline-block" src="imgSys/master.png"  width="45" height="45">\n\
                        &numsp;\n\
                        <p style="display: inline-block">Master</p>\n\
                    </div>\n\
                    <div class="col-sm align-self-center">\n\
                        <img style="display: inline-block" src="imgSys/'+respuesta.resultados['ma_logo']+'" "width="45" height="45">\n\
                        &numsp;\n\
                        <p style="display: inline-block">'+respuesta.resultados['ma_no']+'</p>\n\
                    </div>\n\
                    <div class="col-sm">\n\
                        <a href="MAmaster.php" class="btn btn-outline-dark ">Administrar</a>\n\
                    </div>\n\
                </div>\n\
            </li>')
               


                    },
                    error: function () {

                    }
                });
            }
        },
        error: function () {
            alert("fallo 1");
        }
    });
    
    $.ajax({
        url: "modelGeneral/perfilesDistribuidorasIf.php",
        type: 'POST',
        dataType: "json",
        data: {us: $("#idusp").val()},
        beforeSend: function () {



        },
        success: function (respuesta) {

            var existe = respuesta.resultados;

            if (existe == 0) {

            } else {
                
                $.ajax({
        url: "modelGeneral/perfilesDistribuidoras.php",
        type: 'POST',
        dataType: "json",
        data: {us: $("#idusp").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {

          
            var d = respuesta.resultados;
           
            $.each(d, function (i, item) {
                            
                  $("#listadeperfiles").append('<li class="  list-group-item cuadro"> \n\
                <div class="row ">\n\
                    <div class="col-sm">\n\
                    <img style="display: inline-block" src="imgSys/distribuidor.png"  width="45" height="45">\n\
                        &numsp;\n\
                        <p style="display: inline-block">Distribuidor</p>\n\
                    </div>\n\
                    <div class="col-sm align-self-center">\n\
                        <img style="display: inline-block" src="imgDist/'+d[i].dis_lo+'" "width="45" height="45">\n\
                        &numsp;\n\
                        <p style="display: inline-block">'+d[i].dis_no+'</p>\n\
                    </div>\n\
                    <div class="col-sm">\n\
                        <a href="DIMaster.php" class="btn btn-outline-dark ">Administrar</a>\n\
                    </div>\n\
                </div>\n\
            </li>');
            });
        },
        error: function () {

        }
    });

                
            }
        },
        error: function () {
            alert("fallo 1");
        }
    });
    
    $.ajax({
        url: "modelGeneral/perfilesAgentesIf.php",
        type: 'POST',
        dataType: "json",
        data: {us: $("#idusp").val()},
        beforeSend: function () {



        },
        success: function (respuesta) {

            var existe = respuesta.resultados;

            if (existe == 0) {

            } else {
                
                $.ajax({
        url: "modelGeneral/perfilesAgentes.php",
        type: 'POST',
        dataType: "json",
        data: {us: $("#idusp").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {

          
            var d = respuesta.resultados;
           
            $.each(d, function (i, item) {
                            
                  $("#listadeperfiles").append('<li class="  list-group-item cuadro"> \n\
                <div class="row ">\n\
                    <div class="col-sm">\n\
                    <img style="display: inline-block" src="imgSys/agente.png"  width="45" height="45">\n\
                        &numsp;\n\
                        <p style="display: inline-block">Agente</p>\n\
                    </div>\n\
                    <div class="col-sm align-self-center">\n\
                        <img style="display: inline-block" src="imgDist/'+d[i].dis_lo+'" "width="45" height="45">\n\
                        &numsp;\n\
                        <p style="display: inline-block">'+d[i].dis_no+'</p>\n\
                    </div>\n\
                    <div class="col-sm">\n\
                        <a href="AGMaster.php" class="btn btn-outline-dark ">Administrar</a>\n\
                    </div>\n\
                </div>\n\
            </li>');
            });
        },
        error: function () {

        }
    });

                
            }
        },
        error: function () {
            alert("fallo 1");
        }
    });
    
    

})


