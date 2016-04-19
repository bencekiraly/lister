<?php

    class View{
        
        private $data = array();
        
        public function setData($varosid, $varosnev){
            $this->data[$varosid] = $varosnev;
        }
        
        public function getData(){
            if(empty($this->data)){
                echo "Nincs felvéve város.</br>";
            }
            foreach($this->data as $numrow => $row){
                echo "<div id=\"varos".$numrow."\">";
                echo "<p onclick=\"showCity('varos".$numrow."',".$numrow.",".$_GET['id'].")\">".$row."</p>";
                echo "</div>";
            }
            echo "<div id=\"addcity\">";
            echo "<p onclick=\"addCity(".$_GET['id'].")\" >Felvétel</p>";
            echo "</div>";
        }
        
    }

?>