<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {

  
    $stmt = $conn->prepare("CALL NOTIBROADCASTINGinsert(:us,:ms)");
    $stmt->bindParam(':us', $_POST['us']);
    $stmt->bindParam(':ms', $_POST['ms']);

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


