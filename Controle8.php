<?php
  include "Class8.php";
  $alunos =  array();
 
  for($i=0;$i<10;$i++){
      $nome = $_GET['NOME'.($i+1)];
      $nota = $_GET['NOTA'.($i+1)];
 
      $alunos[$i] = new Aluno();
      $alunos[$i]->setNome($nome);
      $alunos[$i]->setNota($nota);
  }
 
  $outroAluno = new Aluno();
  $media = $outroAluno->Media($alunos);
  $NomeMaior = $outroAluno->MaiorNota($alunos);
  $tabela = $outroAluno->Tabela($alunos);
 
  echo "Media: <b>".$media."</b><br>";
  echo "Nome da maior nota: <b>".$NomeMaior."</b><br>";
  echo "<b>".$tabela."</b><br>";
?>
