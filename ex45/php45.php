<?php
//<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
include("estilo.css");
    $time1 = "$_POST[t1]";
    $time2 = "$_POST[t2]";
    $nome1 = "$_POST[t1nome]";
    $nome2 = "$_POST[t2nome]";

    $time1 = number_format($time1, 1);
    $time2 = number_format($time2, 1);

    if($nome1 == "" || $nome1 == " ")
        $nome1 = "Time 1";
    if($nome2 == "" || $nome2 == " ")
        $nome2 = "Time 2";  
  
    if($time1 > $time2)
        echo"".$nome1." venceu!!";
    else
    if($time2 > $time1)
        echo"".$nome2." venceu!!!";
    else            
        echo "".$nome1." e ". $nome2." empataram!! com ".$time1." pontos";
?>