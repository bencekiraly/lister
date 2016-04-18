<?php

    class View{
        
        private $data = array();
        
        public function setData($megyeid, $megyenev){
            $this->data[$megyeid] = $megyenev;
        }
        
        public function getData(){
            echo "<form action=\"index.php\" method=\"get\">";
            echo "<input type=\"hidden\" name=\"p\" value=\"megye\">";
            echo "<input type=\"hidden\" name=\"f\" value=\"show\">";
            echo "<select name=\"id\" onchange=\"this.form.submit()\">";
            echo "<option>Válassz megyét!</option>";
            foreach($this->data as $numrow => $row){
                echo "<option value=\"".$numrow."\">".$row."</option>";
            }
            echo "</select>";
            echo "</form>";          
        }
        
    }

?>