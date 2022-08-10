<?php
    class Usuario{
        private $CustoFabrica;
        private $CustoCarro;

        public function setCustoFabrica ($valor1)
        {
            $this-> CustoFabrica=$valor1;
        }
        public function getCustoFabrica ()
        {
            return $this-> CustoFabrica;
        }
        public function CustoCarro ($valor1)
        {
            $this-> CustoCarro = $valor1+($valor1*0.73);
        }
        public function getCustoCarro()
        {
            return $this-> CustoCarro;
        }



    }




?>