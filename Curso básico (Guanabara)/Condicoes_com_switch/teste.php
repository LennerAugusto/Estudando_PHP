<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php 
       $n=isset($_GET["num"])?$_GET["num"]:0;
       $o=isset($_GET["oper"])?$_GET["oper"]:1;
       
       switch($o){
           case 1:
               $r = $n * 2;
               break;
           
           case 2:
               $r = $n ^ 3;
               break;
               
           case 3:
               $r = sqrt($n);
               break;
       }
       
       echo "O resultado da operacao solicitada e: $r";
       
    ?>
    
    <a href="teste.html" class="botao">voltar</a>
  </body>
</html>