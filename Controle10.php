<?php
   include "Class10.php";
 
   $Usuario = new Usuario();
 
   $Usuario->set_Nome($_GET['NOME']);
   $Usuario->set_Email($_GET['EMAIL']);
   $Usuario->set_Telefone($_GET['TELEFONE']);
   $Usuario->set_Empresa($_GET['EMPRESA']);
   $Usuario->set_Assunto($_GET['ASSUNTO']);
   $Usuario->set_Mensagem($_GET['MENSAGEM']);
 
   $txt = $Usuario->CriarTxt();
   
   echo "<b>".$Usuario->AbrirTxt($txt)."</b><br>";
?>
