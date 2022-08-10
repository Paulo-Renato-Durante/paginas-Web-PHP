<?php
    include "Class7.php";
    $Usuario = new Usuario;

    $Usuario-> setPeso($_GET['Peso']);
    $Usuario-> setAltura($_GET['Altura']);
    $Usuario-> setSexo($_GET['Sexo']);
    $Usuario-> IMC ($Usuario->getPeso(),$Usuario->getAltura());
    echo $Usuario-> SituaUsuario($Usuario-> getIMC())."<br>";
    echo "Seu peso ideal é <b>".$Usuario-> Ideal($Usuario->getAltura(),$Usuario->getSexo())."</b>";

?>