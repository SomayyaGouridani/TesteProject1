<?php
 class connect{

//connection a la base de donnee
        public function db(){
                    try {
                            $conn = new PDO("mysql:host=localhost;dbname=reservationvoiture", "root", "");
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            
                            return $conn;
                    } catch(PDOException $e) {
                            echo "Connection failed: " . $e->getMessage()."<br>";
                    }
        }
}
?>