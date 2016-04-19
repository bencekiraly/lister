<?php

    class View{
        
        private $data = array();
        
        public function setData($varosid, $varosnev){
            $this->data[$varosid] = $varosnev;
        }
        
        public function getData(){
            if(empty($this->data)){
                echo "Nincs felvéve város.";
            }else{
                foreach($this->data as $numrow => $row){
                    echo "<form onsubmit=\"return modifyCity('".$_GET['megye']."','".$numrow."',varosnev.value)\" action=\"\">";
                    echo "<input type=\"text\" name=\"varosnev\" value=\"".$row."\">";
                    echo "<input type=\"submit\" value=\"Mentés\">";
                    echo "<button type=\"button\" onclick=\"return deleteCity('".$_GET['megye']."','".$numrow."')\">Törlés</button>";
                    echo "<button type=\"button\"  onclick=\"showCounty('".$_GET['megye']."')\">Mégsem</button>";
                    echo "</select>";
                    echo "</form>";
                }   
            }
        }
        
    }

?>