<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="lib/animation/css/animation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="lib/animation/js/animation.js"></script>
        <script src="lib/alertifyjs/js/alertify.js"></script>
        <script src="controler/validaciones.js"></script>
        <script src="controler/usuarios_check.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/sigin.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin">
            <img class="mb-4 pulse" src="img/logo.png" alt="" width="120" height="120">
            <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
            <label for="inputEmail" class="sr-only">Usuario</label>
            <input type="text" id="lnb" class="form-control" placeholder="Usuario" autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="lps" class="form-control" placeholder="Contraseña" >
            <div class="checkbox mb-3">
                <label>
                   
                </label>
            </div>
            <button id="btnToLogin"class="btn btn-lg btn-primary btn-block" type="button">Entrar</button>
          
            <p class="mt-5 mb-3 text-muted">Panel de control</p>
           
        </form>
    </body>
</html>
