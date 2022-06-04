<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<?php
    
    $num1 = 100;
    $aux1 = 2;

    incremento($num1, $aux1);

    function incremento($num2,$aux2)
    {
        while ($num2<=200):
        $num2+=$aux2;
        echo "Número: ".$num2."<br>";
        endwhile;
    }

?>