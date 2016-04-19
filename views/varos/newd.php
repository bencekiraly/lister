<?php

    class View{
        
        public function getData(){
            echo "<form onsubmit=\"return newdCity('".$_GET['megye']."',varosnev.value)\" action=\"\">";
            echo "<input type=\"text\" name=\"varosnev\" value=\"\" >";
            echo "<input type=\"submit\">";
            echo "</form>";  
        }
    }

?>