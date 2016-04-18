<?php
    class MegyeController{      
        
        private $func;
        private $site;
        private $id = NULL;
        
        function __construct(){
            $this->site = $_GET['p'];
            if(!isset($_GET['f'])){
                $_GET['f'] = "index";
            }
            if(!isset($_GET['id'])){
                $_GET['id'] = NULL;
            }
            $this->func = $_GET['f'];
            $this->id = $_GET['id'];
        }
        
        function model(){
            require 'models/megye.php';
            $model = new MegyeModel();
            $model->setAction($this->func,$this->id);
            return $model;
        }
        
        function action(){
            switch ($this->func){
                case "index": $this->index(); break;
                case "show": $this->show(); break;
                default: $this->index(); break;
            }
        }
        
        function index(){
            $this->model();
        }
        
        function show(){
            $this->model();
        }
        
    }

    $megye = new MegyeController();
    $megye->action();
?>