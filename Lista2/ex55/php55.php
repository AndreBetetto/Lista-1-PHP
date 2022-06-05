<!DOCTYPE html>
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php53</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h3>
<?php
    $cont=1;
    $v1 = "$_POST[v1]";
    $v2 = "$_POST[v2]";

    if($v1 > $v2 || $v2 < $v1){
        echo"<br>Nao foi possivel realizar a conta.";
    }
    else    
        do
            echo"<br>O numero ".$cont." e: ".$v1;
            $v1++;
            $cont++;
        while($v1 <= $v2);  
?>
</h3>
</body>
</html>
