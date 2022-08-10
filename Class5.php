<?php
	class Usuario{
		private $Numero;
        private $Texte;

        public function setNumero($valor1)
        {
            $this->Numero=$valor1;
        }
        public function getNumero()
        {
            return $this->Numero;
        }
        public function Texte ($valor1)
        {
            if ($valor1>0){
                if($valor1%2==0){
                    $this-> Texte = "par";
                }else{
                    $this-> Texte = "impar";
                }
            }elseif ($valor1 ==0) {
                $this-> Texte = " o numero é zero";
            }else{
                $this-> Texte = "o numero é negativo";
            }
            
        }
        public function getTexte()
        {
            return $this->Texte;
        }


	}
?>