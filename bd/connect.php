

<?php

include_once '../../db/connectctrl.php';

class Connect {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    function __construct() {

       $outco = new bdconect();


        $this->servername = $outco->getServername();
        $this->username = $outco->getUsername();
        $this->password = $outco->getPassword();
        $this->dbname = $outco->getDbname();
    }

    public function conect() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function test() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'exito';
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }

}
