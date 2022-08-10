<?php
    class Usuario{
        private $ValorA;
        private $ValorB;
        private $ValorC;



        public function setValorA ($Valor1)
        {
            $this-> ValorA = $Valor1;

        }
        public function setValorB ($Valor1)
        {
            $this-> ValorB = $Valor1;

        }
        public function setValorC ($Valor1)
        {
            $this-> ValorC = $Valor1;

        }
        public function getValorA()
        {
            return $this-> ValorA;

        }
        public function getValorB()
        {
            return $this-> ValorB;
            
        }
        public function getValorC()
        {
            return $this-> ValorC;
            
        }
        public function Bask1 ($Valor1,$Valor2,$Valor3)
        {
            return ((-1*$Valor2)+(sqrt($Valor2*$Valor2)-(4*$Valor1*$Valor3)))/2*$Valor1;

        }
        public function Bask2 ($Valor1,$Valor2,$Valor3)
        {
            return ((-1*$Valor2)-(sqrt($Valor2*$Valor2)-(4*$Valor1*$Valor3)))/2*$Valor1;

        }


    
    }


?>