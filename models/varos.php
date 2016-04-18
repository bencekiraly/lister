<?php
    require('config/db.php');
    class VarosModel {
        
        private $db;
        private $action;
        private $megye;
        private $id;
        private $varosnev;
        private $q;
        private $view;
        
        public function __construct(){
            $this->database();
        }
        
        public function database(){
            $this->db = new Connect();
            $this->db = $this->db->getConn();
        }
        
        public function setAction($action, $megye = NULL, $id = NULL, $varosnev = NULL){
            $this->action = $action;
            $this->megye = $megye;
            $this->id = $id;
            $this->varosnev = $varosnev;
            $this->getData();
        }
        
        private function getData(){
            switch ($this->action){
                case "index": $this->q = "SELECT * FROM varos"; break;
                case "show": $this->q = "SELECT * FROM varos WHERE varosid=".$this->id; break;
                case "newd": $this->q = ""; break;
                case "update": $this->q = "UPDATE varos SET varosnev=\"".$this->varosnev."\" WHERE varosid=".$this->id; break;
                case "create": $this->q = "INSERT INTO varos(varosnev, megye) VALUES(\"".$this->varosnev."\",".$this->megye.")"; break;
                case "delete": $this->q = "DELETE FROM varos WHERE varosid=".$this->id; break;
                default: $this->q = "SELECT * FROM varos"; break;
            }
            $this->dataToView();
        }
        
        public function dataToView(){
            if($this->action == "index" || $this->action == "show"){
                include "views/varos/".$this->action.".php";
                $this->view = new View();
                $result = $this->db->query($this->q);
                while($row = $result->fetch_assoc()){
                    $this->view->setData($row['varosid'],$row['varosnev']);
                }
                $this->view->getData();
            }else if($this->action == "newd"){
                include "views/varos/".$this->action.".php";
                $this->view = new View();
                $this->view->getData();
            }else{
                $result = $this->db->query($this->q);
                header("Location: index.php?p=megye&f=show&id=".$this->megye);
                exit;
            }
        }
                
    }

    $megye = new VarosModel();
?>