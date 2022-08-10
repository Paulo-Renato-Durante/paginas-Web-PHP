<?php
    include "Class9.php";
 
    $Usuario = new Usuario();
 
    $Usuario->set_Numero($_GET['NUMERO']);
 
    echo "Numero digitado: <b>".$Usuario->get_Numero()."</b><br>";
    echo "Fatorial: <b>".$Usuario->Fatorial()."</b><br>";
?>
