<?php
    require('config/db.php');
    class MegyeModel {
        
        private $db;
        private $action;
        private $id;
        private $q;
        private $view;
        
        public function __construct(){
            $this->database();
        }
        
        public function database(){
            $this->db = new Connect();
            $this->db = $this->db->getConn();
        }
        
        public function setAction($action, $id = NULL){
            $this->action = $action;
            $this->id = $id;
            $this->getData();
        }
        
        private function getData(){
            switch ($this->action){
                case "index": $this->q = "SELECT * FROM megye"; break;
                case "show": $this->q = "SELECT * FROM varos WHERE megye=".$this->id; break;
                default: $this->q = "SELECT * FROM megye"; break;
            }
            $this->dataToView();
        }
        
        public function dataToView(){
            include "views/megye/".$this->action.".php";
            $this->view = new View();
            $result = $this->db->query($this->q);
            while($row = $result->fetch_assoc()){
                if($this->action == "index"){
                    $this->view->setData($row['megyeid'],$row['megyenev']);
                }else{
                    $this->view->setData($row['varosid'],$row['varosnev']);
                }
            }
            $this->view->getData();
        }
                
    }

    $megye = new MegyeModel();
?>