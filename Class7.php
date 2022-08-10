<?php
    class Usuario
    {
        private $Peso;
        private $Altura;
        private $IMC;
        private $Sexo;
        
        public function setPeso ($Valor1)
        {
            $this->Peso = $Valor1;
        }
        public function setAltura ($Valor1)
        {
            $this->Altura = $Valor1;
        }
        public function setSexo($Valor1)
        {
            $this-> Sexo=$Valor1;
        }
        public function getSexo()
        {
            return $this->Sexo;
        }
        public function getPeso ()
        {
            return $this->Peso;
        }
        public function getAltura()
        {
            return $this->Altura;
        }
        public function IMC ($Valor1, $Valor2)
        {
            $this->IMC = $Valor1/pow($Valor2,2);
        }
        public function getIMC()
        {
            return $this->IMC;
        }
        public function SituaUsuario ($Valor1)
        {
            if ($Valor1<20){
                return "Abaixo do peso";
            }elseif($Valor1>=20 and $Valor1<25){
                return "Peso normal";
            }elseif($Valor1>=25 and $Valor1<30){
                return "Sobre peso";
            }elseif($Valor1>=30 and $Valor1<40){
                return "Obeso";
            }else{
                return "Obeso Morbido";
            }
        }
        public function Ideal ($Valor1,$Valor2)
        {
            if ($Valor2=="m"){
                return (72.7*$Valor1)-58;
            }else{
                return (62.1*$Valor1)-44.7;
            }
        }
    }


?>