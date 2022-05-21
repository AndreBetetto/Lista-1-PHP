<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ex52</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
        $a = 501;
        $cont = 1;
        while($a < 1000):
            echo"O número ".$cont." é: ".$a;
            $a += 2;
            $cont++;
        endwhile;
    ?>
</body>
</html>