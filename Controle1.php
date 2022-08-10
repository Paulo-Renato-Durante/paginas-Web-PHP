<?php
	include "Class1.php";

	$Usuario = new Usuario();

	$Usuario-> setSalarioBruto($_GET['SalarioBruto']);
	$Usuario-> setValorHoraExtra($_GET['ValoHoraExtra']);
	$Usuario-> setQuantidadeHoras($_GET['QuantidadeHoras']);
	$Usuario->INSS($Usuario->getSalarioBruto(), $Usuario->getValorHoraExtra(), $Usuario->getQuantidadeHoras());
	$Usuario->SalarioLiquido($Usuario->getSalarioBruto(), $Usuario->getValorHoraExtra(), $Usuario->getQuantidadeHoras(), $Usuario->getINSS());

	echo "O valor do Salario Liquido: <b>".$Usuario->getSalarioLiquido()."</b><br>";

?>