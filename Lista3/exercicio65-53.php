<!DOCTYPE html>
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<!-- LP II - PHP - Lista 3 -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 65 - Exercício 53 com funções (PHP)</title>
</head>

<body>
    <?php
    $varini = "$_POST[v1]";
    $varfi = "$_POST[v2]";

    if ($varini >= $varfi)
    {
        echo "O valor inicial do intervalo é maior ou igual ao valor final.";
    }

    else
    {
        somaIntervalos($varini,$varfi);  
    }
    
    function somaIntervalos($varini, $varfi)
    {
        echo "Números entre $varini e $varfi <br><br>";
        while($varini <= $varfi):
            echo "Número: $varini <br>";
            $varini++;
        endwhile;  
    }
    ?>  
    
    <a href="ex65-53.html"> Voltar </a>
      
</body>
</html>