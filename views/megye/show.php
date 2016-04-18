<?php

    class View{
        
        private $data = array();
        
        public function setData($varosid, $varosnev){
            $this->data[$varosid] = $varosnev;
        }
        
        public function getData(){
            if(empty($this->data)){
                echo "Nincs felvéve város.</br>";
                echo "<a href=\"index.php?p=varos&f=newd&megye=".$_GET['id']."\">Felvétel</a>";
            }
            foreach($this->data as $numrow => $row){
                echo "<a href=\"index.php?p=varos&f=show&id=".$numrow."&megye=".$_GET['id']."\">".$row."</a><br/>";
            }       
        }
        
    }

?>