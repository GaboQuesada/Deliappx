
<?php
@session_start();

if (!empty($_SESSION['id'])) {
    
} else {
    header("Location: index.php");
}
if (@$_GET["cerrar"]) {
    session_destroy();
    header("location: index.php");
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
        <script src="controlerGeneral/usuariosAdd.js"></script>
        <script src="controlerGeneral/usuariosgetall.js"></script>
        <script src="controler/usuarioMastermodificar.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/lobby.css">
        
        <title>Bootstrap Example</title>

  
    </head>

    <body>
        
         <nav class="navbar navbar-expand-lg  bg-dark fixed-top  ">

            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">l</span>
                </button>
                <a class="navbar-brand" >
                    <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
 Centro de Control 
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mr-auto">
                      
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <img src="userimg/<?php echo $_SESSION["img"]; ?>"width="35" height="35" class="my-2 my-sm-0" alt="">
                        &numsp; <?php echo $_SESSION["nb"]; ?>
                        <a class="nav-item nav-link " href="#"><i class="fas fa-sign-out-alt"></i></a>
                        <a class="nav-item nav-link" href="#"><i class="fas fa-cog"></i></a>
                    </form>
                </div>
            </div>

        </nav>
        
        
        
        <div class="container">
           <input type="hidden" id="idusp" name="idusp" value="<?php echo $_SESSION["id"];?>" /> 
        <br>
       
        <br>
        <br>
       
        <br>
        
        <p><strong>Cuentas Vinculadas:</strong></p>
        <hr>
        <ul id="listadeperfiles" class="list-group list-group-flush">
            
           
          

        </ul> 
            <p id="idus"><?php echo $_SESSION["ce"]; ?></p>
        </div>
        
        
        
        
        
        <script type="text/javascript" src="controlerGeneral/lobbyPerfiles.js" ></script>
    </body>
</html>
