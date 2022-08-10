<?php
    class Usuario{
        private $NotaAluno;
        private $Conceito;

        public function setNotaAluno ($valor1)
        {
            $this->NotaAluno=(int)$valor1 ;
        }
        public function getNotaAluno ()
        {
            return $this->NotaAluno ;
        }
        public function Conceito($valor1)
        {
            if($valor1==10 OR $valor1==9){
               $this-> Conceito= "A";
            }
            elseif($valor1==8 OR $valor1==7){
                $this-> Conceito= "B";
            }
            elseif($valor1==6 OR $valor1==5){
                $this-> Conceito= "C";
            }
            elseif($valor1<5 AND $valor1>0){
                $this-> Conceito="D";
            }elseif($valor1>10 OR $valor1<0){
                $this-> Conceito= "Valor incorreto";
            }
        }
        public function getConceito(){
            return $this->Conceito;
        }
 
 




    }



?>