<?php

    class View{
        
        private $data = array();
        
        public function setData($varosid, $varosnev){
            $this->data[$varosid] = $varosnev;
        }
        
        public function getData(){
            if(empty($this->data)){
                echo "<citylist>";
                echo "<div>";
                echo "<p id=\"citynf\">Nincs felvéve város.</p></br>";
                echo "</div>";
                echo "</citylist>";
            }else{
                echo "<citylist>";
                foreach($this->data as $numrow => $row){
                    echo "<div id=\"varos".$numrow."\">";
                    echo "<p onclick=\"showCity('varos".$numrow."',".$numrow.",".$_GET['id'].")\">".$row."</p>";
                    echo "</div>";
                }
                echo "</citylist>";
            }
            echo "<div id=\"addcity\">";
            echo "<form onsubmit=\"return addCity(".$_GET['id'].")\">";
            echo "<input type=\"submit\" value=\"Város hozzáadása\">";
            echo "</form>";
            echo "</div>";
        }
        
    }

?>