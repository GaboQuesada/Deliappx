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
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/distribuidor.css">
        <link rel="stylesheet" href="lib/animation/css/animation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="lib/animation/js/animation.js"></script>
        <script src="lib/alertifyjs/js/alertify.js"></script>
        <script src="controlerGeneral/notificacionesMensajes.js"></script>
        <script src="controlerGeneral/showMensages.js"></script>
        <script src="controlerMaster/broadcasting.js"></script>

        <script src="controlerMaster/usuariosgetModal.js"></script>
        <script src="controlerMaster/distribuidoraInsert.js"></script>
        <script src="controlerMaster/distribuidorgetall.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <p id="ancla"></p> 
        <a id="iraAncla" href="#ancla"></a>


        <div id="div_carga">
            <img id="cargador"  src="img/gifcarga.gif"/>
        </div>
        <input type="hidden" id="usid" value="<?php echo $_SESSION['id'] ?>"/>
        <input type="hidden" id="usno" value="<?php echo $_SESSION['nb'] ?>"/>
        <input type="hidden" id="usim" value="<?php echo $_SESSION['img'] ?>"/>
        <input type="hidden" id="usce" value="<?php echo $_SESSION['ce'] ?>"/>
        <input type="hidden" id="ge"/>

        <?php include './navMaster.php'; ?>
        <div class="container" style="margin-top: 58px;">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-plus-square"></i> Agregar Distribuidor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-eye"></i> Ver o Modificar Distribuidor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-envelope"></i> Mensajeria</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent" style="margin: 2px">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <div class="container cuadroinsert"  style="padding-top: 25px; padding-left: 20px; padding-right: 20px; background-color:white; margin-top: 10px; border-color: slategrey; border-style: solid; border-width:1px;">
                        <form id="frmNewDist" name="frmNewDist" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre del encargado</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" name="disusno" id="disusno" placeholder="Encargado" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <input type="hidden" id="disusids"  name="disusids" />
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" id="modelusuariosDistribuidores" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i> Buscar</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="container" id="showuserdiinfo">
                                <div class="row">
                                    <div class="col-sm">
                                        <img id="disusrid" src="imgSys/user.png" width="75" height="75" alt="..." class="rounded border border-primary">
                                    </div>
                                    <div id="disusce"  class="col-sm row align-items-center">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre de fantasia del distribuidor</label>
                                <input type="text" class="form-control" name="distnewname" id="distnewname" aria-describedby="emailHelp" placeholder="">     
                            </div>

                            <label for="exampleInputPassword1">Imagen para el logo</label>


                            <input type="file" onchange="readURLModificaU(this);"   name="NewDistIm" id="NewDistIm">
                            <img id="newusimgp" name="newusimgp" src="imgSys/imagen.png" width="85" height="85" alt="..." class="rounded border border-primary">
                            <div class="form-group">

                                <br>
                                <button type="submit" id="BtnNewUser" name="BtnNewDist" class="btn btn-primary btn-lg btn-block">Agregar</button>

                            </div>

                        </form>
                    </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div style="padding-top: 25px; padding-left: 20px; padding-right: 20px; background-color:white; margin-top: 10px; border-color: slategrey; border-style: solid; border-width:1px;">
                        <table class="table table-hover ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Representante</th>
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


            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Escoger Encargado</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="UsuariosVerTabledist">

                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="modiu" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>

<!-- Modal para editar -->
<div class="modal fade" id="editdis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmNewDist" name="frmNewDist" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre del encargado</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" name="disusno" id="disusno" placeholder="Encargado" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <input type="hidden" id="disusids"  name="disusids" />
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" id="modelusuariosDistribuidores" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i> Buscar</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="container" id="showuserdiinfo">
                                <div class="row">
                                    <div class="col-sm">
                                        <img id="disusrid" src="imgSys/user.png" width="75" height="75" alt="..." class="rounded border border-primary">
                                    </div>
                                    <div id="disusce"  class="col-sm row align-items-center">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre de fantasia del distribuidor</label>
                                <input type="text" class="form-control" name="distnewname" id="distnewname" aria-describedby="emailHelp" placeholder="">     
                            </div>

                            <label for="exampleInputPassword1">Imagen para el logo</label>


                            <input type="file" onchange="readURLModificaU(this);"   name="NewDistIm" id="NewDistIm">
                            <img id="newusimgp" name="newusimgp" src="imgSys/imagen.png" width="85" height="85" alt="..." class="rounded border border-primary">
                            <div class="form-group">

                                <br>
                                <button type="submit" id="BtnNewUser" name="BtnNewDist" class="btn btn-primary btn-lg btn-block">Agregar</button>

                            </div>

                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        </div>
    </body>
</html>