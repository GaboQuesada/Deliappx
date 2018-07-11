<?php
@session_start();

if (!empty($_SESSION['id'])) {
    
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="lib/animation/css/animation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="lib/animation/js/animation.js"></script>
        <script src="lib/alertifyjs/js/alertify.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/lobby.css">
        
        <script src="controlerGeneral/usuarioEdit.js"></script>

        <title>Bootstrap Example</title>


    </head>

    <body>
        <p id="ancla"></p> 
        <a id="iraAncla" href="#ancla"></a>
<div id="div_carga">
            <img id="cargador"  src="img/gifcarga.gif"/>
        </div>
        <nav class="navbar navbar-expand-lg  bg-dark fixed-top  ">

            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-arrow-circle-down"></i></span>
                </button>
                <a class="navbar-brand" >
                    <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">

                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link anav "  href="lobby.php"><i class="fas fa-home"></i> Perfiles </a>
 
            </div>
                   
                    <form class="form-inline my-2 my-lg-0">
                        <img src="imgUser/<?php echo $_SESSION["img"]; ?>"width="35" height="35" class="my-2 my-sm-0" alt="">
                        &numsp; <?php echo $_SESSION["nb"]; ?>
                        <a class="nav-item nav-link " href="modelGeneral/salir.php"><i class="fas fa-sign-out-alt"></i></a>

                    </form>
                </div>
            </div>

        </nav>



        <div class="container">
            <input type="hidden" id="idusp" name="idusp" value="<?php echo $_SESSION["id"]; ?>" /> 
            <br>

            

            <br>

            <p><strong>Modificar cuenta de usuario:</strong></p>
            <hr>



            <div class="row">
                <div class="col-sm align-self-center">
                    <div class="row justify-content-center">
                        <p><i class="fas fa-edit" style="font-size: 98px;"></i></p>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="contenedorformperfil"> 
                        <form id="frmNewUser" name="frmNewUser" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control form-control-sm" name="NewUserName" id="NewUserName" aria-describedby="emailHelp" placeholder="">     
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Primer Apellido</label>
                                <input type="text" class="form-control form-control-sm" name="NewUserAp1" id="NewUserAp1" aria-describedby="emailHelp" placeholder="">     
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Segundo Apellido</label>
                                <input type="text" class="form-control form-control-sm" name="NewUserAp2" id="NewUserAp2" aria-describedby="emailHelp" placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cedula</label>
                                <input type="hidden" class="form-control form-control-sm"  name="NewUserCe" id="NewUserCe" aria-describedby="emailHelp" value="<?php echo $_SESSION["ce"]; ?>" placeholder="sin guines ni espacios"> 
                                <input type="number" class="form-control form-control-sm" disabled="true"  name="NewUserCe2" id="NewUserCe2" aria-describedby="emailHelp" value="<?php echo $_SESSION["ce"]; ?>" placeholder="sin guines ni espacios">  
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input type="email" class="form-control form-control-sm" name="NewUserCo" id="NewUserCo" aria-describedby="emailHelp" placeholder="">
                                <small id="emailHelp" class="form-text text-muted">a este se enviara informacion importante.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Usuario</label>
                                <input type="text" class="form-control form-control-sm" name="NewUserUs" id="NewUserUs" aria-describedby="emailHelp" placeholder="">
                                <small id="emailHelp" class="form-text text-muted">Con este ingresara al sistema.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control form-control-sm" name="NewUserPa" id="NewUserPa" placeholder="Password">

                            </div>
                            <label for="exampleInputPassword1">Imagen de Usuario</label>


                            <input type="file" onchange="readURLModificaU(this);"  name="NewUserIm" id="NewUserIm">


                            <br>
                            <div class="container" id="showuserdiinfo">
                                <br>
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="hidden" name="usidimg" id="usidimg" />
                                        <img id="newusimgp" src="imgSys/user.png" width="85" height="85" alt="..." class="rounded border border-primary">
                                    </div>
                                    <div id="disusce"  class="col-sm row align-items-center">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">

                                <br>
                                <button type="submit" id="BtnNewUser" name="BtnNewUser" class="btn btn-primary btn-lg btn-block btn-sm">Modificar</button>

                            </div>

                        </form></div>

                </div>

            </div>







            <hr>
          

        </div>





        <script type="text/javascript" src="controlerGeneral/lobbyPerfiles.js" ></script>
    </body>
</html>
