<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Condicionais</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php 
        $idade = $_GET["idade"];
        
        echo "Ja posso dirigir?<br>";
        if($idade >= 18){
            echo "<br>Voce tem mais que 18 anos, ja pode dirigir";
        }else{
           
            echo"<br>Voce tem menos que 18 anos, ainda nao pode dirigir<br>";
        }
       
        echo "Ja posso votar?<br>";
        if($idade >= 16){
            echo "Voce tem mais que 16 anos, ja pode votar";
        }else{
            
            echo"<br>Voce tem menos que 16 anos, ainda nao pode votar";
        }
    ?>
  </body>
</html>