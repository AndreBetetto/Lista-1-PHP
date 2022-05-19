<?php
    ini_set('default_charset','UTF-8');
    $nome = "$_POST[nome]";
    $num = "$_POST[integrantes]";

    switch($num){
        case 0: echo"Não forma equipe";
                break;
        case 1: echo"Não forma equipe"; 
                break;   
        //case 2: echo"Equipe formada com sucesso.";
                break;
        case 2: case 3: case 4: echo"Equipe formada com sucesso. O lider e ".$nome.".";
                      break;
        //case 4: echo"Equipe formada com sucesso.";
        //        break;           
    }
?>