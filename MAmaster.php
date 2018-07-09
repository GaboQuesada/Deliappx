<?php
@session_start();

if (!empty($_SESSION['id'] && $_SESSION["ma"] == 1)) {
    
} else {
    header("Location: index.php");
}

?>
<!doctype html>
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
        <script src="controlerGeneral/usuariosAdd.js"></script>
        <script src="controlerGeneral/usuariosgetall.js"></script>
        <script src="controler/usuarioMastermodificar.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">

        <title>Hello, world!</title>
    </head>
    <body>


  <?php include './navMaster.php'; ?>
      


        <div id="div_carga">
            <img id="cargador"  src="img/gifcarga.gif"/>
        </div>

        <div class="container" style="margin-top: 58px;">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-plus-square"></i> Agregar Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-eye"></i> Ver o Modificar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-envelope"></i> Mensajeria</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent" style="margin: 2px">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <div class="container contenedorform" >
                        <form id="frmNewUser" enctype="multipart/form-data" method="post">
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
                                <input type="number" class="form-control form-control-sm" name="NewUserCe" id="NewUserCe" aria-describedby="emailHelp" placeholder="sin guines ni espacios">     
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


                            <input type="file" onchange="readURL(this);"  name="NewUserIm" id="NewUserIm">


                            <br>
                            <div class="container" id="showuserdiinfo">
                                <br>
                                <div class="row">
                                    <div class="col-sm">
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
                                <button type="submit" id="BtnNewUser" name="BtnNewUser" class="btn btn-primary btn-lg btn-block btn-sm">Agregar</button>

                            </div>

                        </form>
                    </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div style="padding-top: 25px; padding-left: 20px; padding-right: 20px">
                        <table class="table table-hover ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Contraseña</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Pin</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="UsuariosVerTable">

                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>

        </div>



        <!-- Editar Usuarios MOdal -->


        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  ">

                        <div class="container ">
                            <form id="frmNewUserm" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="usimgm" id="usimgm"/> 

                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control form-control-sm" name="NewUserNamem" id="NewUserNamem" aria-describedby="emailHelp" placeholder="">     
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Primer Apellido</label>
                                    <input type="text" class="form-control form-control-sm" name="NewUserAp1m" id="NewUserAp1m" aria-describedby="emailHelp" placeholder="">     
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Segundo Apellido</label>
                                    <input type="text" class="form-control form-control-sm" name="NewUserAp2m" id="NewUserAp2m" aria-describedby="emailHelp" placeholder="">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cedula</label>
                                    <input type="number" class="form-control form-control-sm" disabled="true" name="NewUserCem" id="NewUserCem" aria-describedby="emailHelp" placeholder="sin guines ni espacios">     
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo</label>
                                    <input type="email" class="form-control form-control-sm" name="NewUserCom" id="NewUserCom" aria-describedby="emailHelp" placeholder="">
                                    <small id="emailHelp" class="form-text text-muted">a este se enviara informacion importante.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuario</label>
                                    <input type="text" class="form-control form-control-sm" name="NewUserUsm" id="NewUserUsm" aria-describedby="emailHelp" placeholder="">
                                    <small id="emailHelp" class="form-text text-muted">Con este ingresara al sistema.</small>
                                </div>
                                <div class="form-group" >
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control form-control-sm" name="NewUserPam" id="NewUserPam" placeholder="Password">

                                </div>
                                <label for="exampleInputPassword1">Imagen de Usuario</label>


                                <input type="file" onchange="readURL(this);"  name="NewUserImm" id="NewUserImm">


                                <br>
                                <div class="container" id="showuserdiinfo">
                                    <br>
                                    <div class="row">
                                        <div class="col-sm">
                                            <img id="newusimgpm" src="imgSys/user.png" width="85" height="85" alt="..." class="rounded border border-primary">
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
                                   

                                </div>

                            
                        </div>

                    </div>
                    <div class="modal-footer">
                         <button type="submit" id="BtnNewUserm" name="BtnNewUserm" class="btn btn-primary  btn-sm">Modificar</button>
                        <button type="button" id="ummodel" class="btn btn-secondary btn-sm" data-dismiss="modal">Volver sin cambios</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>