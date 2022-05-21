<?php
    include("estilo.css");
    $valor = "$_POST[temp]";
    $temp = ($valor - 32) / 1.8;
    $temp = number_format($temp, 2);
    echo"Temperatura é ".$temp." graus Celcius<br><br>";
    if($temp <= 0.99)
    {
        echo"Frio ártico";
    }
    else
    if($temp >= 1 && $temp <= 12.99)
    {
        echo"Muito frio";
    }
    else
    if($temp >= 13 && $temp <= 23.99)
    {
        echo"Clima ameno";
    }
    else
    if($temp >= 24 && $temp <= 32.99)
    {
        echo"Calor";
    }
    else
    if($temp >= 33 && $temp <= 40.99)
    {
        echo"Calor tórrido";
    }
    else
        echo"Sem registro";
?>