<?php
    class Connect {
        
        private $address = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'orszag';
        private $conn;
        
        public function connect(){
            
            $conn = new mysqli($this->address,$this->username,$this->password,$this->dbname);
            $this->conn = $conn;
            $this->conn->set_charset("utf8");
            $this->error();
        }
        
        private function error(){
            if($this->conn->connect_error){
                echo "Hiba az adatbázishoz való csatlakozásban: " . mysqli_connect_error();
            }
        }      
        
        public function getConn(){
            return $this->conn;
        }
        
    }


    $connect = new Connect();
    $connect->connect();

?>