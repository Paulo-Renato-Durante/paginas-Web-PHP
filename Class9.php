<?php
    class Usuario{
        public $Numero;
        public $Fatorial = "<table border = '1'>";
        public $Total = 1;
 
        public function set_Numero($valor){
            $this->Numero = $valor;
        }
 
        public function get_Numero(){
            return $this->Numero;
        }
 
        public function Fatorial(){
            $i = $this->Numero;
 
            $this->Fatorial.="<tr>";
            $this->Fatorial.="<td>".$this->Numero."!</td>";
            $this->Fatorial.="<td>=</td>";
            while($i >= 1){
                    $this->Fatorial.="<td>$i</td>";
                    if($i != 1){
                        $this->Fatorial.="<td>x</td>";
                    }
                $this->Total *= $i;
                $i-=1;
            }
            $this->Fatorial.="<td>=</td>";  
            $this->Fatorial.="<td>$this->Total</td>";
            $this->Fatorial.="<tr>";
 
            return $this->Fatorial;
        }
    }  
?>
