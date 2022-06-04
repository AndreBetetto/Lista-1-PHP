<!DOCTYPE html>
<!-- André Luiz de Oliveira Betetto, n°03 e Louise Vicentino de Moraes, n°25 - 72B -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 64 (PHP) - Lista 3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        
        if ($num>5 && $num<50)
        {
            echo "Tabuada do número $num <br><br>";
            tabuada($num); 
        }

        else{
            echo "O valor digitado não está dentro do intervalo requisitado. 
            Retorne a página anterior e redigite um valor entre 5 e 50.";
        }

        function tabuada($num)
        { 
            $aux = 0;
            do
            {
                echo $num." * ".$aux." = ".$num*$aux."<br>";
                $aux++;
            } while($aux <= 10);
        }
    ?>
    <br><br>  
    <a href="exercicio64.html"> Voltar a página anterior </a>
</body>
</html>