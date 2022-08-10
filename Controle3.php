<?php
	include "Class3.php";

	$Usuario = new Usuario();

	$Usuario-> setOperacao ($_GET['Operacao']);
    $Usuario-> setNumero1 ($_GET['Numero1']);
    $Usuario-> setNumero2 ($_GET['Numero2']);

    $Usuario-> Conta($Usuario-> getOperacao(),$Usuario-> getNumero1(), $Usuario-> getNumero2());
    echo "O resultado = <b>". $Usuario-> getConta(). "</b><br>";
?>