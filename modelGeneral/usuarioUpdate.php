<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();



try {
    
    
 
    
    $stmt = $conn->prepare("CALL PerfilUpdate(:no, :ap1, :ap2, :ce , :co , :us, :ps , :im)");

    $stmt->bindParam(':no', $_POST['NewUserName']);
    $stmt->bindParam(':ap1', $_POST['NewUserAp1']);
    $stmt->bindParam(':ap2', $_POST['NewUserAp2']);
    $stmt->bindParam(':us', $_POST['NewUserUs']);
    $vari = $_POST["fileex"];
    if ($vari == "si") {

        $stmt->bindParam(':im', $_POST["usidimg"]);
    } else {
       $sourcePath = $_FILES['NewUserIm']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "../imgUser/" . $_FILES['NewUserIm']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
        $stmt->bindParam(':im', $_FILES["NewUserIm"]["name"]);
    }


    $stmt->bindParam(':co', $_POST['NewUserCo']);
    $stmt->bindParam(':ps', $_POST['NewUserPa']);
    $stmt->bindParam(':ce', $_POST['NewUserCe']);

    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}
            


