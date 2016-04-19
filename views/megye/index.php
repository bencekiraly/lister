<?php

    class View{
        
        private $data = array();
        
        public function setData($megyeid, $megyenev){
            $this->data[$megyeid] = $megyenev;
        }
        
        public function getData(){
            echo "<form>";
            echo "<select name=\"id\" onchange=\"showCounty(this.value)\">";
            echo "<option selected disabled>Válassz megyét!</option>";
            foreach($this->data as $numrow => $row){
                echo "<option value=\"".$numrow."\">".$row."</option>";
            }
            echo "</select>";
            echo "</form>";          
        }
        
    }

?>