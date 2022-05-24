<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php54</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
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
            echo"<br>O numero ".$cont." e: ".$v0;
        }
        
    endwhile;  
    echo"<br>O numero ".$cont." e: ".$v0;  
    ?>
</body>
</html>