<?php
$nome = "$_POST[nome]"; //nome
$velocidade = "$_POST[velocidade]";

if(velocidade >= 70)
{
    echo"Valor a ser pago 2x mais";
}
else
if(velocidade >= 60)
{
    echo"Valor a ser pago 1x mais";
}
else
if(velocidade < 60)
{
    echo"Valor normal";
}
?>