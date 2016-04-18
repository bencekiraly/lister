<?php
    class Routes{

        function controller($site){
            if(file_exists("controllers/".$site."_controller.php")){
                return include "controllers/".$site."_controller.php";
            }else{
                return include "err/404.php";
            }
        }

    }
?>