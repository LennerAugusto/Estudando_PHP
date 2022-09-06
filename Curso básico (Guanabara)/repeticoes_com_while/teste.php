<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

        $contador = 1;

        while($contador <= 10){
        echo "\n$contador";
    
        $contador++;
        }

        echo "\n\n";
        //contagem regressiva

        $contador2 = 10;

        while($contador2 >= 1){
            echo "\n$contador2";
    
            $contador2--;
        }
    ?>
  </body>
</html>
