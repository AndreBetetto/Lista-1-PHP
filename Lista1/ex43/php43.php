<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel ="stylesheet" type ="text/css" href="estilo.css">
</head>
<body>
    <h3>

<?php
//<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
include("estilo.css");
    $altura = "$_POST[alt]";
    $peso = "$_POST[peso]";

    $altura = number_format($altura, 2);
    $peso = number_format($peso, 2);

    $imc = ($peso) / ($altura * $altura);
    $imc = number_format($imc, 2);
    echo"<br>Seu IMC é: ".$imc;
    echo"<br><br><br><br>";
    if($imc < 18.5)
        echo"IMC menor que 18,5, Magreza";
    else
    if(18.5< $imc && $imc <= 24.9)
        echo"IMC entre 18,5 e 24,9 --> Normal";
    else
    if(24.9 < $imc && $imc <= 29.9) 
        echo"IMC entre 25 e 29,9 --> Sobrepeso";
    else
    if(18.5< $imc && $imc <= 24.9)
        echo"IMC entre 18,5 e 24,9 --> Obesidade";
    else       
    if(24.9 < $imc && $imc <= 29.9)
        echo"IMC entre 25 e 39.99 --> Obesidade II";
    else
    if(30 > $imc && $imc <= 40)  
        echo"IMC entre 25 e 39.99 --> Obesidade III" ;
        else
    if($imc > 40)  
        echo"IMC maior que 40";
    echo"<br><br><br><br>https://www.saudenaosepesa.com.br/diagnostico.html?utm_source=g-search&utm_medium=cpc&utm_content=texto&utm_term=normal&utm_campaign=ogilvybr_novo-nordisk_always-on-performance_g-search_cliques_202205_texto_cpc_calcule-imc";    
?>
</h3>
</body>
</html>




