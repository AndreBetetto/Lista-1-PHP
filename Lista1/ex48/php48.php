<?php
//<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
    include("estilo.css");
    ini_set('default_charset','UTF-8');
    $nome = "$_POST[nome]";
    $num = "$_POST[integrantes]";

    switch($num){
        case 0: echo"<h3>Não forma equipe</h3>";
                break;
        case 1: echo"<h3>Não forma equipe</h3>"; 
                break;   
        //case 2: echo"Equipe formada com sucesso.";
                break;
        case 2: case 3: case 4: echo"<h3>Equipe formada com sucesso. O lider e ".$nome.".</h3>";
                      break;
        //case 4: echo"Equipe formada com sucesso.";
        //        break;           
    }
?>