function notiout(){
    
     $.ajax({
        url: "modelGeneral/mensageacCHes.php",
        type: 'POST',
        dataType: "json",
        data: {id: $("#msid").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {
         getcountms();
         getmshshow();
        

        },
        error: function () {

        }
    });
    
}

function watchmsg(img, nb, ti, cp, fe, he, fr) {


  

    var imgp = "imgUser/" + img;
    $("#imms").attr("src", imgp);
    $("#nbms").text(nb);
    $("#tims").text(ti);
    $("#cpms").text(cp);
    $("#fcms").text(fe);
    $("#hrms").text(he);
    $("#msid").val(fr);
    
    notiout();


}



function getmshshow() {
    $("#contmsg").show();

    $.ajax({
        url: "modelGeneral/mensageacNotiShow.php",
        type: 'POST',
        dataType: "json",
        data: {id: $("#usid").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {
            
            var d = respuesta.resultados;
            $("#msgshowboxnav").empty();
            $.each(d, function (i, item) {
                var img = d[i].us_im;
                var nb = d[i].us_no + '  ' + d[i].us_ap1 + '  ' + d[i].us_ap2;
                var ti = d[i].mc_ti;
                var cp = d[i].mc_mg;
                var fe = d[i].mc_fc;
                var he = d[i].mc_ho;
                var nombre = d[i].us_no + ' ' + d[i].us_ap1 + ' ' + d[i].us_ap2;
                var fr = d[i].mc_id;
                $("#msgshowboxnav").append('<li onclick="watchmsg(\'' + img + '\',  \'' + nb + '\', \'' + ti + '\' , \'' + cp + '\' , \'' + fe + '\' , \'' + he + '\',\'' + fr + '\' )" data-toggle="modal" data-target="#MsgModalShow" class="list-group-item">\n\
                                        <div>\n\
<div class="row msga">\n\
    <div class="col-lg-2 align-self-center">\n\
        <img src="imgUser/' + d[i].us_im + '"width="30" height="30" />\n\
    </div>\n\
    <div  class="col-lg-9">\n\
        <div id="msgus">' + d[i].mc_fr + ' | ' + d[i].us_no + ' ' + d[i].us_ap1 + ' ' + d[i].us_ap2 + '</div>\n\
        <div>' + d[i].mc_ti + '</div>\n\
        <div id="msgus">' + d[i].mc_fc + ' |  ' + d[i].mc_ho + '</div>\n\
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









$(document).ready(function () {


    var click = "no";

    $("#contmsg").hide();
    $("#boxshowmsit").click(function () {

        if (click === "no") {

            click = "si";
            getmshshow();


        } else {

            $("#contmsg").hide();
            click = "no";

        }





    });


});
