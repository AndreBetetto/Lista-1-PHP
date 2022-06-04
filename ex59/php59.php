<!DOCTYPE html>
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php59</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h3>
<?php
    $cont=0;
    $entrada = "$_POST[input]";  
    $nomes = array('ana', 'andreia', 'andre', 'beatriz', 'kaori', 'bianca', 'bruno', 'camila', 'carlos', 'davi');
    for($i = 0; $i<10; $i++)
    {
        if($entrada == $nomes[$i])
        {
            $cont = 1;
        }
    }
    if($cont >= 1)
    {
        echo"O nome está na lista.";
    }
    else
        echo"O nome não está na lista.";
?>
</h3>
</body>
</html>