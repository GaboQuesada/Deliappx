<?php
@session_start();

if (!empty($_SESSION['id'] && $_SESSION["ag"] == 1)) {
    
} else {
    header("Location: index.php");
}
?>

<nav class="navbar navbar-expand-lg  bg-dark fixed-top  ">

    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">l</span>
        </button>
        <a class="navbar-brand" >
            <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link anav "  href="lobby.php"><i class="fas fa-home"></i> Perfiles </a>
                <a class="nav-item nav-link anav" href="AGMaster.php"><i class="fas fa-heart"></i> Agregar Cliente</a>
                <a class="nav-item nav-link anav" href="AGMaster.php"><i class="fas fa-heart"></i> Clientes</a>
                <a class="nav-item nav-link anav" href="#"><i class="fas fa-chart-bar"></i> Estadisticas</a>
                <a class="nav-item nav-link anav" href="#"><i class="fas fa-calculator"></i> Calcular Precio</a>
            </div>
            <form class="form-inline my-2 my-lg-0">

                <img src="imgUser/<?php echo $_SESSION["img"]; ?>"width="30" height="30" class="my-2 my-sm-0" alt="">
                <a class="nav-item nav-link" href="Perfil.php"><i class="fas fa-cog"></i></a>
                <a id="boxshowmsit" class="nav-item nav-link" href="#"><i class="fas fa-envelope"></i><span id="msnoti" class="badge badge-primary"></span></a>
                <a class="nav-item nav-link " href="modelGeneral/salir.php"><i class="fas fa-sign-out-alt"></i></a>

            </form>
        </div>
    </div>

</nav>


<div id="contmsg" class="showmsgboxnav" style="position: fixed; left:65%; top: 7%; z-index: 4950; width: 280px;">

    <ul id="msgshowboxnav" class="list-group list-group-flush " >

    </ul>
    <br> 
    <p style="font-size: 12px; padding-left: 5px;"><i class="fas fa-envelope-open"></i> Ver todos<p>
</div>



<!-- Modal -->
<div class="modal fade" style="z-index: 8000" id="MsgModalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <center><i style="font-size: 50px;" class="fas fa-envelope-square"></i></center>
                <hr>

                <br>
                <p><center><strong>Asunto: </strong><span id="tims"> Buenas tardes </span></center></p>

                <p id="cpms" style="padding: 12px; border-style: solid; border-color: black; border-width: 1px;"> A partir del 23 de Abril estara disponible un nuevo modulo denominado aperturas , este servira para el trasnapaso</p>



                <p style="font-size: 10px;"><strong>fecha y hora del mensaje:</strong> <span id="fcms"> 23/15/2016 </span>  <span id="hrms"> 8:23:46</span></p>
                <p>Desde: <strong><span> Master</span></strong></p>
                <div style="display: inline-block">
                    <img id="imms" class="rounded-circle" src="imgUser/adri.jpg"width="45" height="45" />
                    &numsp;
                    <span id="nbms"> Gabriel Quesada Sanchez</span>
                </div>
                <hr>
                <center> <button type="button" id="mscl" data-dismiss="modal" class="btn btn-primary btn-sm">Listo</button></center>
                <input type="hidden" id="msid" />
            </div>

        </div>
    </div>
</div>