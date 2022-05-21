<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ex51</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
        $a = 100;
        $cont=1;
        while($a <= 200):
        
            echo"<h3>Número ".$cont." é: ".$a."<br></h3>";
            $a += 2;
            $cont++;
        endwhile;
    ?>
</body>
</html>