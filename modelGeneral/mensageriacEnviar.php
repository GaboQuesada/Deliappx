<?php

session_start();
include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL MENSAGECASTINGinsert(:fr, :se ,:ge , :ti , :mg , :fc , :es , :ho)");
    $stmt->bindParam(':fr', $_POST["fr"]);
    $stmt->bindParam(':se', $_POST["se"]);
    $stmt->bindParam(':ge', $_POST["ge"]);
    $stmt->bindParam(':ti', $_POST["ti"]);
    $stmt->bindParam(':mg', $_POST["mg"]);
    $stmt->bindParam(':fc', $_POST["fc"]);
    $stmt->bindParam(':es', $_POST["es"]);
    $stmt->bindParam(':ho', $_POST["ho"]);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $respuesta['resultados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["di"] = 1;
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}
?>