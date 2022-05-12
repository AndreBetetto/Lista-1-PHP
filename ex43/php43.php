<?php
    $altura = "$_POST[alt]";
    $peso = "$_POST[peso]";

    $altura = number_format($altura, 2);
    $peso = number_format($peso, 2);

    $imc = ($peso) / ($altura * $altura);
    echo"<br>Seu IMC é: ".$imc;
    echo"<br><br><br><br>";
    if($imc < 18.5)
        echo"IMC menor que 18.5, Magreza";
    else
    if(18.5< $imc <= 24,9)
        echo"IMC entre 18,5 e 24,9";
    else
    if(24.9 < $imc <= 29,9) 
        echo"IMC entre 25 e 29,9";
    else
    if(18.5< $imc <= 24,9)
        echo"IMC entre 18,5 e 24,9";
    else       
    if(24,9 < $imc <= 29.9)
        echo"IMC entre 25 e 39.99";
    else
    if(30 > $imc <= 40);  
        echo"IMC entre 25 e 39.99";
        else
    if($imc > 40);  
        echo"IMC maior que 40";
?>


