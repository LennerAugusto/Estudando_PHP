<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
         $a = readline("Digite um número");
         $b = readline("Digite outro número");
    
        function soma($a, $b){
            $soma = $a + $b;
        
             return $soma;
        }
    
        $r = soma($a, $b);
    
        echo"A soma é: ".$r; 
    ?>
 </body>
</html>
