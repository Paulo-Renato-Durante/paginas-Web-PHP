<?php
    include "Class2.php";

    $Usuario = new Usuario();
    
    $Usuario->  setCustoFabrica($_GET['CustoFabrica']);
    $Usuario-> CustoCarro($Usuario->getCustoFabrica());

    echo "o valor que chegara ao consumidor é de <b>"  .$Usuario->getCustoCarro()."</b><br>";

?>
