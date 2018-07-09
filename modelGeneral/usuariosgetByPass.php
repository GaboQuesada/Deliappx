<?php

session_start();

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL USUARIOSgetByPass(:pus,:pps)");
    $stmt->bindParam(':pus', $_POST["us"]);
    $stmt->bindParam(':pps', $_POST["ps"]);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $respuesta['resultados'] = $user;
    $id = $user['us_id'];
    $ce = $user['us_ce'];
    $nombre = $user['us_no']." ".$user['us_ap1']." ".$user['us_ap2'];
    $imagen = $user['us_im'];
    $_SESSION["id"] = $id;
    $_SESSION["ce"] = $ce;
    $_SESSION["nb"] = $nombre;
    $_SESSION["img"] = $imagen;
    $_SESSION["ma"] = 0;
    $_SESSION["di"] = 0;
    $_SESSION["ag"] = 0;
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
     print json_encode($respuesta);
}
    

