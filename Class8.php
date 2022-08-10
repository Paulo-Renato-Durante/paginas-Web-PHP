<?php
  class Aluno{
      private $nome;
      private $nota;
      public function setNome($nome){
          $this->nome = $nome;
      }
      public function getNome(){
          return $this->nome;
      }
    
      public function setNota($nota){
          $this->nota = $nota;
      }
      public function getNota(){
          return $this->nota;
      }
      public function Media($array=array()){
           $Media=0;
 
           for($i=0; $i<10; $i++){
               $Media += $array[$i]->getNota();
          }
 
          return ($Media/10);
      }
 
      public function MaiorNota($array=array()){
       $Maior = 0;
 
       for($i=0; $i<10; $i++){
           if($array[$i]->getNota() > $Maior){
               $Maior = $array[$i]->getNota();
               $Nome = $array[$i]->getNome();
           }
       }
       return $Nome;
      }
 
      public function Tabela($array=array()){
           $Aluno = array();
 
           for($i=0; $i<10; $i++){
               $Aluno[$i][1] = $array[$i]->getNota();
               $Aluno[$i][0] = $array[$i]->getNome();
           }
 
           rsort($Aluno);
 
          $Tabela = "<table border='1'>";
 
          for($i=0; $i<10; $i++){
               $Tabela.="<tr>";
                   $Tabela.="<td>".$Aluno[$i][0]."</td>";
                   $Tabela.="<td>=</td>";
                   $Tabela.="<td>".$Aluno[$i][1]."</td>";
               $Tabela.="</tr>";
          }
          return $Tabela;
      }
  }
?>
