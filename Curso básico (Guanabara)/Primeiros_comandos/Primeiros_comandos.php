<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Primeiros comandos em PHP</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

        $n1 = 20;
        $n2 = 25;

        $soma = $n1 + $n2;
        $subtrai = $n1 - $n2;
        $divide = $n1 / $n2;
        $multiplica = $n1 * $n2;
        $media = ($n1 + $n2) /2;


        echo "Soma: " . $soma . "<br>Subtracao: " . $subtrai . "<br>Divisao: " . $divide . "<br>Multiplicacao: " . $multiplica . "<br>Media entre os valores: " . $media;

        //Funçoes pré definidas

        echo "<br>Valor absoluto: " . abs($n1);
        echo "<br>Potencia entre os dois valores: " . pow($n1, $n2);
        echo "<br>Arredondamento entre os valores: " . round($n1, $n2);


    ?>
  </body>
</html>