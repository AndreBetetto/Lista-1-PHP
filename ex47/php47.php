<?php
include("estilo.css");
$nome = "$_POST[nome]"; //nome
$velocidade = "$_POST[velocidade]";
$velMax = "$_POST[velocidadeMax]";
$int_v = (int) $velocidade;
if($int_v > $velMax + 34)
    echo"<h3>Multa de 200 reais</h3>";
else if($int_v > $velMax + 11 && $int_v < $velMax + 34)
    echo"<h3>Multa de R$100</h3>";
else if($int_v > $velMax +10)
    echo"<h3>Multa de R$50!!!!!</h3>";
    else
    echo"<h3>Sem multa!</h3>";


?>