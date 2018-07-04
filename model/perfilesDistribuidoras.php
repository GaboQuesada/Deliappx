
    <?php
session_start();
include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();



        try {
             $stmt = $conn->prepare("CALL PERFILESgetDISTRIBUIDORAS(:us)");
    $stmt->bindParam(':us', $_POST["us"]);
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


    
