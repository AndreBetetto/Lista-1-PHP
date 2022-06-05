<!DOCTYPE html>
<!-- LP II - PHP - Lista 3 -->
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 65 - Exercício 54 com funções</title>
</head>

<body>
    <?php
    $cont2 = 0;
    $cont = 10;
    $v0 = 10;
    $vf = 500;
    /*while($cont < 500):
        if($cont % 2 == 0){
                //$v0 = $v0 + $v0 + 2;
                //$v0 = ($v0 - 500) + $vf + 2 + $v0;
                //$v0 = $v0 + (500 - 2 * $cont2);
                //$cont2 ++;
                $v0 = 2 * $v0 + 2;
        }*/
    
    

    while(++$cont < 500):
        if($cont % 2 == 0){
            $v0+=$cont;
            echo"<br>O número ".$cont." e: ".$v0;
        }
        
    endwhile;  
    echo"<br>O número ".$cont." e: ".$v0;  

    ?>   
</body>
</html>