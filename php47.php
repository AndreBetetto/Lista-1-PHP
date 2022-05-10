<?php
$nome = "$_POST[nome]"; //nome
$velocidade = "$_POST[velocidade]";
$velMax = "$_POST[velocidadeMax]";
$int_v = (int) $velocidade;
if($int_v > $velMax + 34)
    echo"Multa de 200 reais";
else if($int_v > $velMax + 11 && $int_v < $velMax + 34)
    echo"Multa de R$100";
else if($int_v > $velMax +10)
    echo"Multa de R$50!!!!!";
    else
    echo"Sem multa!";


?>