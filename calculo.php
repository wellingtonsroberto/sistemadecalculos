<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
<title>Valor calculado</title>
</head>
<?php

    $pproduto = $_GET["pproduto"];
     $frete = $_GET["frete"];
     $dolar = $_GET["dolar"];

 
           $totalfrete = ($pproduto * $frete)/100;
	   $produtofrete = ($totalfrete + $pproduto);
           $total = ($produtofrete * $dolar);        
           
           echo "O valor do produto em Real : R$" . number_format($total,2) ;
	
     
     
?>

</html>