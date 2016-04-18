<?php
    class VarosController{      
        
        private $func;
        private $site;
        private $varosnev = NULL;
        private $megye = NULL;
        private $id = NULL;
        
        function __construct(){
            $this->site = $_GET['p'];
            if(!isset($_GET['f'])){
                $_GET['f'] = "index";
            }
            if(!isset($_GET['id'])){
                $_GET['id'] = NULL;
            }
            if(!isset($_GET['megye'])){
                $_GET['megye'] = NULL;
            }
            if(!isset($_GET['varosnev'])){
                $_GET['varosnev'] = NULL;
            }
            $this->func = $_GET['f'];
            $this->varosnev = $_GET['varosnev'];
            $this->megye = $_GET['megye'];
            $this->id = $_GET['id'];
        }
        
        function model(){
            require 'models/varos.php';
            $model = new VarosModel();
            $model->setAction($this->func, $this->megye, $this->id, $this->varosnev);
            return $model;
        }
        
        function action(){
            switch ($this->func){
                case "index": $this->index(); break;
                case "show": $this->show(); break;
                case "newd": $this->newd(); break;
                case "create": $this->create(); break;
                case "update": $this->update(); break;
                case "delete": $this->delete(); break;
                default: $this->index(); break;
            }
        }
        
        function index(){
            $this->model();
        }
        
        function show(){
            $this->model();
        }
        
        function newd(){
            $this->model();
        }
        
        function create(){
            $this->model();
        }
        
        function update(){
            $this->model();
        }
        
        function delete(){
            $this->model();
        }
        
    }

    $megye = new VarosController();
    $megye->action();
?>