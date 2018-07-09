<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {

    $sourcePath = $_FILES['NewDistIm']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../distimg/" . $_FILES['NewDistIm']['name']; // Target path where file is to be stored
    move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file


    $stmt = $conn->prepare("CALL DISTRIBUIDORinsert(:no,:lo,:us)");
    $stmt->bindParam(':no', $_POST['distnewname']);
    $stmt->bindParam(':us', $_POST['disusids']);
    $stmt->bindParam(':lo', $_FILES["NewDistIm"]["name"]);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Distribuidor Registrado";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}


