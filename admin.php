<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend/css/navbar.css">
        <link rel="stylesheet" href="frontend/css/general.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="backend/controller/usuarioInsert.js"></script>
        <script src="backend/controller/usuarioGetAll.js"></script>
        <script src="backend/controller/usuarioModificar.js"></script>
        <script src="backend/controller/usuarioCheckIfExist.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>

    <body class="container">

        <br>
        <?php include_once 'frontend/navbaradmin.php'; ?>

        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="UsM" data-toggle="tab" href="#menu2">Mensajes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="UsS" data-toggle="tab" href="#home">Editar Secciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="UsU" data-toggle="tab" href="#menu1">Editar / Agregar Usuarios</a>
            </li>



        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="menu2">
                <p>ff</p>
            </div>
            <div class="tab-pane container fade" id="home">
                <br>
                <h2>Secciones</h2>
                <p>Dasplegando cada panel podras editar la sección respectiva</p>

                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Sección #1
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="email">Banner:</label>
                                        <input type="file" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Titulo:</label>
                                        <input type="password" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Detalle:</label>

                                        <textarea class="form-control" rows="5" id="comment"></textarea>

                                    </div>


                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Sección #2
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="email">Banner:</label>
                                        <input type="file" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Titulo:</label>
                                        <input type="password" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Detalle:</label>

                                        <textarea class="form-control" rows="5" id="comment"></textarea>

                                    </div>


                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Sección #3
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="email">Banner:</label>
                                        <input type="file" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Titulo:</label>
                                        <input type="password" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Detalle:</label>

                                        <textarea class="form-control" rows="5" id="comment"></textarea>

                                    </div>


                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour">
                                Sección #4
                            </a>
                        </div>
                        <div id="collapsefour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="email">Banner:</label>
                                        <input type="file" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Titulo:</label>
                                        <input type="password" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Detalle:</label>

                                        <textarea class="form-control" rows="5" id="comment"></textarea>

                                    </div>


                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="menu1">
                <div class="row">
                    <div class="col-lg-4"><br><div class="card">
                            <div id="tituloUsuarios"class="card-header">Agregar</div>
                            <div class="card-body">


                                <form id="frmFormulario" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="email">usuario:</label>
                                        <input type="text"  class="form-control"  name="usus" id="usus">
                                        <p id="isAble" ></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Contraseña:</label>
                                        <input type="password" class="form-control" name="usps2" id="usps2">
                                    </div>

                                    
                                    <div id="image_preview">
                                        <img id="previewing" width="220" height="180" src="frontend/img/user.png" /></div>
                                    <div class="form-group">
                                        <label for="pwd">Imagén:</label>
                                        <input type="file" onchange="readURL(this);"  name="archivo" id="archivo">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Nombre Completo:</label>
                                        <input type="text"   class="form-control"  name="usnc" id="usnc">

                                    </div>


                                    <input type="submit" id="btnUsuarioGuardar" value="Guardar" class="btn btn-primary">

                                </form>
                            </div> 

                        </div></div>
                    <div class="col-lg-8">
                        <br><div class="card">
                            <div class="card-header">Usuarios actuales</div>
                            <div class="card-body"><table class="table table-dark table-hover">
                                    <thead >
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Imagén</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="usuariosActules">

                                    </tbody>
                                </table></div> 

                        </div> </div>

                </div>

            </div>

        </div>


        <!-- The Modal -->
        <div class="modal fade" id="myModalEditUsuarios">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modicicar Usuario</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form id="uploadimage2x"  enctype="multipart/form-data">
                            <input type="hidden" name="usid" id="usid"/>
                            <input type="hidden" name="usimg" id="usimg"/>    
                            
                            <div class="form-group">
                                <label for="email">usuario:</label>
                                <input type="text" class="form-control" name="usus2x" id="usus2x">
                            </div>
                            <div class="form-group">
                                <label for="email">Contraseña:</label>
                                <input type="password" class="form-control" name="usps3x" id="usps3x">
                            </div>
                            <div id="image_preview2"><img id="vista2x" width="220" height="180" src="frontend/img/user.png" /></div>
                            <div class="form-group">
                                <label for="pwd">Imagén:</label>
                                <input type="file" onchange="readURLModificaU(this);" name="file2x" id="file2x"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Nombre Completo:</label>
                                <input type="text" class="form-control" name="usnc2x" id="usnc2x">
                            </div>


                            
                       

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="submit"   value="Modificar"  class="btn btn-primary" />
                        
                        <button type="button" id="btnusc" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
 </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body></html>
