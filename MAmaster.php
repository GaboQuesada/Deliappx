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
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="lib/animation/css/animation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="lib/animation/js/animation.js"></script>
        <script src="lib/alertifyjs/js/alertify.js"></script>
        <script src="controlerMaster/usuariosAdd.js"></script>
        <script src="controlerMaster/usuariosgetall.js"></script>
        <script src="controlerGeneral/usuarioEdit.js"></script>
        <script src="controlerMaster/usuarioLikemsg.js"></script>
        <script src="controlerGeneral/notificacionesMensajes.js"></script>
        <script src="controlerGeneral/showMensages.js"></script>
        <script src="controlerMaster/broadcasting.js"></script>

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

                    <div class="row">
                        <div class="col-sm align-self-center">
                            <div class="row justify-content-center">
                                <p><i class="fas fa-edit" style="font-size: 98px;"></i></p>
                            </div>

                        </div>
                        <div class="col-sm">
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


                                    <input type="file" onchange="readURLModificaU(this);"  name="NewUserIm" id="NewUserIm">


                                    <br>
                                    <div class="container" id="showuserdiinfo">
                                        <br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <img id="newusimgp" name="newusimgp" src="imgSys/user.png" width="85" height="85" alt="..." class="rounded border border-primary">
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

                    </div>



                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
                    <input class="form-control form-control-sm" type="text" placeholder="Buscar por nombre o cedula">
                    <div style="padding-top: 25px; padding-left: 20px; padding-right: 20px; background-color:white; margin-top: 10px; border-color: slategrey; border-style: solid; border-width:1px;">
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
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div style="height: 70px; width: 100%; margin-top: 20px;">
                                    <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#msgcol"><i class="fas fa-pen-square"></i> Escribir Mensage a todos </button>
                                </div>
                                <div>
                                    <div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="userSearch" name="userSearch" placeholder="Escribir mensaje a usuario especifico" aria-label="Username" aria-describedby="basic-addon1">

                                        </div>



                                        <div class="searchbox msgshowbox" style="position: absolute; left: 55px; top: 130px; z-index: 3950; width: 80%;">
                                            <ul id="userSearchre" class=" cuadroresult list-group list-group-flush cuadroresult" >

                                            </ul>
                                        </div>

                                    </div>


                                    <div style=" z-index: 3902;">
                                        <p>mensajes enviados</p>
                                        <ul class="nav nav-tabs"  id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Individuales</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Colectivos</a>
                                            </li>
                                            <li class="nav-item">

                                            </li>


                                        </ul> 
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                                                <input type="text" style=" height: 16px; width:270px; font-size: 12px; "  name="userse" id="userse"  placeholder="Busca por usuario mensajes enviados"/>
                                                <ul id="MSGaLL" class="list-group list-group-flush ">

                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                                                
                                                 <ul id="BroasdaLL" class="list-group list-group-flush ">

                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">

                                <div class="boxshowmens">

                                    <div><div class="headboxmdg">PARA:</div>  &numsp;<img id="spmim" src="imgSys/user.png"width="30" height="30" style="display: inline-block;" > &numsp; <p id="spmnb" style="display: inline-block;"></p></div>
                                    <div><div class="headboxmdg">DESDE:</div>  &numsp;<img  src="imgSys/master.png" width="30" height="30" style="display: inline-block;" > &numsp; <p style="display: inline-block;">Master</p></div>

                                    <div class="form-group">
                                        <label for="e">Titulo / Asunto:</label>
                                        <input type="text" class="form-control" id="swtitulo" >
                                        <div class="form-group">
                                            <label for="ex">Cuerpo del mensaje</label>
                                            <textarea class="form-control" id="swcuerpo" rows="3"></textarea>
                                        </div>
                                        <br>
                                        Datos:
                                        <hr>
                                        <div id="fcv">Fecha de envio:</div>
                                        <div id="hrv">Hora de envio:</div>
                                        <div>Estado:</div>
                                        <div>Fecha de visualización:</div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <form id="frmNewUserm" name="frmNewUserm" enctype="multipart/form-data" method="post">



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
                                        <input type="hidden" class="form-control form-control-sm" name="NewUserCem" id="NewUserCem" aria-describedby="emailHelp">  
                                        <input type="number" class="form-control form-control-sm" disabled="true" name="NewUserCem2" id="NewUserCem2" aria-describedby="emailHelp" >  
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


                                    <input type="file" onchange=" readURLModificaU(this);"  name="NewUserImm" id="NewUserImm">


                                    <br>
                                    <div class="container" id="showuserdiinfo">
                                        <br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <img id="newusimgpm" src="imgSys/user.png" width="85" height="85" alt="..." class="rounded border border-primary">
                                                <input type="hidden" id="usidimgm" name="usidimgm" />

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


            <!-- modal mensajes-->
            <div class="modal fade" id="Modalmsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center>  <h5 class="modal-title" id="exampleModalLabel">Nuevo mensaje</h5></center>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div><div class="headboxmdg">PARA:</div>  &numsp;<img id="pmim" src=" "width="30" height="30" style="display: inline-block;" > &numsp; <p id="pmnb" style="display: inline-block;"></p></div>
                            <div><div class="headboxmdg">DESDE:</div>  &numsp;<img  src="imgSys/master.png" width="30" height="30" style="display: inline-block;" > &numsp; <p style="display: inline-block;">Master</p></div>
                            <div><div class="headboxmdg">DE:</div>  &numsp;<img id="rmim" src="imgSys/master.png" width="30" height="30" style="display: inline-block;" > &numsp; <p id="rmnb" style="display: inline-block;">Master</p></div>
                            <div class="form-group">
                                <label for="e">Titulo / Asunto:</label>
                                <input type="text" class="form-control" id="mstitulo" >
                                <div class="form-group">
                                    <label for="ex">Cuerpo del mensaje</label>
                                    <textarea class="form-control" id="mscuerpo" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="msgmodalclose" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="msgenvBtn" class="btn btn-primary btn-sm">Enviar Mensaje</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Mensageria colectiva -->


            <!-- Modal -->
            <div class="modal fade" id="msgcol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Mensaje general</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div><div class="headboxmdg">DESDE:</div>  &numsp;<img  src="imgSys/master.png" width="30" height="30" style="display: inline-block;" > &numsp; <p style="display: inline-block;">Master</p></div>
                                <div><div class="headboxmdg">DE:</div>  &numsp;<img id="rmim" src="imgUser/<?php echo $_SESSION["img"] ?>" width="30" height="30" style="display: inline-block;" > &numsp; <p id="rmnb" style="display: inline-block;"><?php echo $_SESSION["nb"] ?></p></div>
                                <div class="form-group">
                                    <label for="e">Titulo / Asunto:</label>
                                    <input type="text" class="form-control" id="msjcti" >
                                    <div class="form-group">
                                        <label for="ex">Cuerpo del mensaje</label>
                                        <textarea class="form-control" id="msjccp" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="msjccancel" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                                <button type="button" id="msjsend" class="btn btn-primary btn-sm">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>

                </body>
                </html>