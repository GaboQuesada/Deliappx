

function  usuariosGetAll(){
       $.ajax({
        url: "modelMaster/usuariosgetAll.php",
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
<td>" + d[i].us_no + " " + d[i].us_ap1 + " " + d[i].us_ap2 + "</td>\n\
<td>" + d[i].us_ce + "</td>\n\
<td>" + d[i].us_co + "</td>\n\
<td>" + d[i].us_us + "</td>\n\
<td>" + d[i].us_ps + "</td>\n\
<td><img class='rounded-circle' src='imgUser/" + d[i].us_im + "' width='50' height='50'></td>\n\
<td>" + d[i].us_pi + "</td>\n\
<td><button type='button' onclick='setdatap("+d[i].us_ce+")' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-edit'></i> Editar</button></td>\n\</tr>");
            });
        },
        error: function () {

        }
    }); 
    
    
}


$(document).ready(function (){
   
    $("#profile-tab").click(function () {
   
 usuariosGetAll();
});
    
    
});






