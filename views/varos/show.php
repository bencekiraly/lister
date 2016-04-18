<?php

    class View{
        
        private $data = array();
        
        public function setData($varosid, $varosnev){
            $this->data[$varosid] = $varosnev;
        }
        
        public function getData(){
            if(empty($this->data)){
                echo "Nincs felvéve város.";
            }
            foreach($this->data as $numrow => $row){
                echo "<form action=\"index.php\" method=\"get\">";
                echo "<input type=\"hidden\" name=\"p\" value=\"varos\">";
                echo "<input type=\"hidden\" name=\"f\" value=\"update\">";
                echo "<input type=\"hidden\" name=\"megye\" value=\"".$_GET['megye']."\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"".$numrow."\">";
                echo "<input type=\"text\" name=\"varosnev\" value=\"".$row."\">";
                echo "<input type=\"submit\" value=\"Elküldés\">";
                echo "</select>";
                echo "</form>";  
                echo "<a href=\"index.php?p=varos&f=delete&id=".$numrow."&megye=".$_GET['megye']."\">Törlés</a>";
            }       
        }
        
    }

?>