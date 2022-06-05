<!DOCTYPE html>
<!-- LP II - PHP - Lista 3 -->
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 65 - Exercício 52 com funções</title>
</head>

<body>
    <?php

    $num = 501;
    $aux = 2;

    echo "Número: ".$num."<br>";

    function soma($num,$aux)
    {
        while ($num<1000):
            $num+=$aux;
            echo "Número: ".$num."<br>";
        endwhile;
    }
    ?>   
</body>
</html>