<?php
@session_start();

if (!empty($_SESSION['id'] && $_SESSION["ag"] == 1)) {
    
} else {
    header("Location: index.php");
}
if (@$_GET["cerrar"]) {
    session_destroy();
    header("location: index.php");
}
?>
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



        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="lib/alertifyjs/css/alertify.css" rel="stylesheet">
        <link href="lib/alertifyjs/css/themes/default.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">


        <title>Hello, world!</title>
    </head>
    <body>



        <?php include_once './navAgentes.php'; ?>

        <div class="container" style="margin-top: 68px;">

            <p>Nuevo Cliente:</p>
            <hr>
            <input type="text" name="" placeholder="nombre"/>
            <br>
            <input type="text" name="" placeholder="cedula Juridica o fisica"/>
            <br>
            <input type="text" name="" placeholder="telefono oficina"/>
            <br>
            <input type="text" name="" placeholder="telefono local"/>
            <br>
            <label>Descripción del negocio</label>
            <br>
            <textarea placeholder="" rows="4" cols="50"></textarea>
            <br>
            <label>Dirección</label>
            <br>
            <textarea placeholder="" rows="4" cols="50"></textarea>

        </div>







    </body>
</html>