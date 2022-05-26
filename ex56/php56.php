<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php56</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h3>
<?php
    $v = "$_POST[v1]";
    $res;

    if($v > 55 || $v < 5){
        echo"<br>Nao foi possivel realizar a conta.";
    }
    else    
        for($p = 0; $p <= 10; $p++){
            $res = $p * $v;
            echo"<br>".$p." x ".$v." = ".$res;
        }
?>
</h3>
</body>
</html>
