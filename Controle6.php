<?php
    include "Class6.php";
    $Usuario = new Usuario;

    $Usuario-> setValorA($_GET['ValorA']);
    $Usuario-> setValorB($_GET['ValorB']);
    $Usuario-> setValorC($_GET['ValorC']);

    echo "as raizes são:
    X1=<b>".$Usuario-> Bask1 ($Usuario->getValorA(),$Usuario->getValorB(),$Usuario->getValorC())."</b><br>
    X2=<b>".$Usuario-> Bask2 ($Usuario->getValorA(),$Usuario->getValorB(),$Usuario->getValorC())."</b><br>";

?>