<?php
    include "Class4.php";
    $Usuario=new Usuario;
   
    $Usuario-> setNotaAluno = ($_GET['NotaAluno']);
    $Usuario->conceito($Usuario->getNotaAluno());
    
    echo "O resultado: <b>".$Usuario->getConceito() ."</b><br>";
?>