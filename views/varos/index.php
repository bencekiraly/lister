<?php

    class View{
        
        private $data = array();
        
        public function setData($varosid, $varosnev){
            $this->data[$varosid] = $varosnev;
        }
        
        public function getData(){
            foreach($this->data as $numrow => $row){
                echo $row."<br\/>";
            }       
        }
        
    }

?>