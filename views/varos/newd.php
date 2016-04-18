<?php

    class View{
        
        public function getData(){
            echo "<form action=\"index.php\" method=\"get\">";
            echo "<input type=\"hidden\" name=\"p\" value=\"varos\">";
            echo "<input type=\"hidden\" name=\"f\" value=\"create\">";
            echo "<input type=\"hidden\" name=\"megye\" value=\"".$_GET['megye']."\">";
            echo "<input type=\"text\" name=\"varosnev\" value=\"\">";
            echo "<input type=\"submit\" value=\"Elküldés\">";
            echo "</select>";
            echo "</form>";  
        }
        
    }

?>