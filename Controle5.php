<?php
    include "Class5.php";
    $Usuario=new Usuario;
    
    $Usuario->setNumero($_GET['Numero']);
    $Usuario->Texte ($Usuario->getNumero());
    echo $Usuario-> getTexte();
   
?>