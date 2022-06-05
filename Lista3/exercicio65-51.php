<!DOCTYPE html>
<!-- LP II - PHP - Lista 3 -->
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 65 - Exercício 51 com funções</title>
    </head>
    
    <body>
        <?php

        $num1 = 98;
        $aux1 = 2;

        incremento($num1, $aux1);

        function incremento($num2,$aux2)
        {
            while ($num2<200):
            $num2+=$aux2;
            echo "Número: ".$num2."<br>";
            endwhile;
        } ?>
    </body>
</html>

