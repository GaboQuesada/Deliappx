<?php
@session_start();

if (!empty($_SESSION['id'] && $_SESSION["ma"] == 1)) {
    
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
                <a class="nav-item nav-link anav" href="MAmaster.php"><i class="fas fa-user"></i> Usuarios</a>
                <a class="nav-item nav-link anav" href="MAdistribuidores.php"><i class="fas fa-industry"></i> Distribuidores</a>
                <a class="nav-item nav-link anav" href="MAagentes.php"><i class="fas fa-address-card"></i> Agentes</a>
                <a class="nav-item nav-link anav" href="#"><i class="fas fa-heart"></i> Clientes</a>
                <a class="nav-item nav-link anav" href="#"><i class="fas fa-coins"></i> Pagos</a>
                <a class="nav-item nav-link anav" href="#"><i class="fas fa-chart-bar"></i> Estadisticas</a>
                <a class="nav-item nav-link anav" href="#"><i class="fas fa-calculator"></i> Precios</a>
            </div>
            <form class="form-inline my-2 my-lg-0">

                <img src="imgUser/<?php echo $_SESSION["img"]; ?>"width="30" height="30" class="my-2 my-sm-0" alt="">
                 <a class="nav-item nav-link" href="Perfil.php"><i class="fas fa-cog"></i></a>
                 <a class="nav-item nav-link" href="Perfil.php"><i class="fas fa-envelope"></i></a>
                <a class="nav-item nav-link " href="modelGeneral/salir.php"><i class="fas fa-sign-out-alt"></i></a>
               
            </form>
        </div>
    </div>

</nav>