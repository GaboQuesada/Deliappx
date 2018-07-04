<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="lib/animation/css/animation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="lib/animation/js/animation.js"></script>
        <script src="lib/alertifyjs/js/alertify.js"></script>
        <script src="controler/usuariosgetModal.js"></script>
        <script src="controler/distribuidoraInsert.js"></script>
        <script src="controler/agentesGetAll.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">

        <title>Hello, world!</title>
    </head>
    <body>



        <nav class="navbar navbar-expand-lg  bg-dark ">
            <a class="navbar-brand" >
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                CONTROL APP
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link anav "  href="lobby.php"><i class="fas fa-home"></i> Perfiles </a>
                    <a class="nav-item nav-link anav" href="master.php"><i class="fas fa-user"></i> Usuarios</a>
                    <a class="nav-item nav-link anav" href="distribuidores.php"><i class="fas fa-industry"></i> Distribuidores</a>
                    <a class="nav-item nav-link anav" href="agentes.php"><i class="fas fa-address-card"></i> Agentes</a>
                    <a class="nav-item nav-link anav" href="#"><i class="fas fa-heart"></i> Clientes</a>
                    <a class="nav-item nav-link anav" href="#"><i class="fas fa-coins"></i> Pagos</a>
                    <a class="nav-item nav-link anav" href="#"><i class="fas fa-chart-bar"></i> Estadisticas</a>
                    <a class="nav-item nav-link anav" href="#"><i class="fas fa-calculator"></i> Precios</a>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <img src="userimg/114840791.jpg" width="30" height="30" class="my-2 my-sm-0" alt="">

                    <a class="nav-item nav-link " href="#"><i class="fas fa-sign-out-alt"></i></a>
                    <a class="nav-item nav-link" href="#"><i class="fas fa-cog"></i></a>
                </form>
            </div>
        </nav>


        <div id="div_carga">
            <img id="cargador"  src="img/gifcarga.gif"/>
        </div>


        <ul class="nav nav-tabs" id="myTab" role="tablist">
           
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-eye"></i> Ver o Modificar Distribuidor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-envelope"></i> Mensajeria</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent" style="margin: 2px">
            
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <div style="padding-top: 25px; padding-left: 20px; padding-right: 20px">
                    <table class="table table-hover ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Distribuidora</th>
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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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



    </body>
</html>