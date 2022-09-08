<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
        $contador=1;
        do{
            echo "\n$contador";
            $contador++;
        }
        while($contador <= 10);


        //contando impares

        $contador2 = 1;
        do{
            echo "\n$contador2";
            $contador2+=2;
        }
        while($contador2 <= 20);

        //Contagem regressiva

        $contador3 = 10;
        do{
            echo "\n$contador3";
            $contador3--;
        }
        while($contador3 >= 1);

    ?>
  </body>
</html>
