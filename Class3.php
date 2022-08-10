<?php
	class Usuario{
        private $Operacao;
        private $Numero1;
        private $Numero2;
        private $Conta;


        public function setOperacao($valor1)
        {
            $this-> Operacao = $valor1;
        }
        public function getOperacao()
        {
            return $this-> Operacao ;
        }
        public function setNumero1($valor1)
        {
            $this->Numero1 = $valor1;
        }
        public function getNumero1()
        {
            return $this->Numero1;
        }
        public function setNumero2($valor1)
        {
            $this->Numero2 = $valor1;
        }
        public function getNumero2()
        {
            return $this->Numero2;
        }
        public function Conta ($valor1,$valor2,$valor3)
        {
            if ($valor1==1)
            {
                $this-> Conta=$valor2+$valor3;
            }elseif ($valor1==2)
            {
                $this-> Conta=$valor2-$valor3;
            }elseif($valor1==3)
            {
                $this-> Conta=$valor2*$valor3;
            }else{
                $this-> Conta=$valor2/$valor3;
            }
                
        }
        public function getConta()
        {
            return $this-> Conta;
        }
        
        
        
	}
?>