<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();



try {
    
    
 $sourcePath = $_FILES['NewUserImm']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "../userimg/" . $_FILES['NewUserImm']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
    
    $stmt = $conn->prepare("CALL MASTER_Usuario_Update(:no, :ap1, :ap2, :us, :im, :co, :ps, :ce)");

    $stmt->bindParam(':no', $_POST['NewUserNamem']);
    $stmt->bindParam(':ap1', $_POST['NewUserAp1m']);
    $stmt->bindParam(':ap2', $_POST['NewUserAp2m']);
    $stmt->bindParam(':us', $_POST['NewUserUsm']);
    $vari = $_POST["fileex"];
    if ($vari == "si") {

        $stmt->bindParam(':im', $_POST["usimgm"]);
    } else {
       
        $stmt->bindParam(':im', $_FILES["NewUserImm"]["name"]);
    }


    $stmt->bindParam(':co', $_POST['NewUserCom']);
    $stmt->bindParam(':ps', $_POST['NewUserPam']);
    $stmt->bindParam(':ce', $_POST['NewUserCem']);

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
            


