<?php
    class Routes{

        private $root = "megye";
        
        function controller($site){
            
            if($site == null){
                $site = $this->root;
            }
            if(file_exists("controllers/".$site."_controller.php")){
                return include "controllers/".$site."_controller.php";
            }else{
                return include "err/404.php";
            }
        }

    }
?>