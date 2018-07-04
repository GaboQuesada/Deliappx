<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {

    $sourcePath = $_FILES['NewUserIm']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../userimg/" . $_FILES['NewUserIm']['name']; // Target path where file is to be stored
    move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file


    $stmt = $conn->prepare("CALL USUARIOSinsert(:ce,:no,:ap1, :ap2, :us, :im, :co, :pi, :ps)");
    $stmt->bindParam(':ce', $_POST['NewUserCe']);
    $stmt->bindParam(':no', $_POST['NewUserName']);
    $stmt->bindParam(':ap1', $_POST['NewUserAp1']);
    $stmt->bindParam(':ap2', $_POST['NewUserAp2']);
    $stmt->bindParam(':us', $_POST['NewUserUs']);
    $stmt->bindParam(':im', $_FILES["NewUserIm"]["name"]);
    $stmt->bindParam(':co', $_POST['NewUserCo']);
    $stmt->bindParam(':pi', hacerpin());
    $stmt->bindParam(':ps', $_POST['NewUserPa']);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Usuario Registrado";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}

function hacerpin() {

    $num1 = rand(0, 9);
    $num2 = rand(0, 9);
    $num3 = rand(0, 9);
    $num4 = rand(0, 9);
    $retu = $num1 . $num2 . $num3 . $num4;
    return $retu;
}
