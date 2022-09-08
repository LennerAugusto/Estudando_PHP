<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
        for($contador=1;$contador<=10;$contador++){
            echo"\n$contador";
        }
    
        //Contagem de impares
        for($contador2=1;$contador2<=20;$contador2+=2){
            echo"\n$contador2";
        }
    
        //Contagem decrescente
        for($contador3=10;$contador3>=1;$contador3--){
            echo"\n$contador3";
        }
?>

  </body>
</html>
