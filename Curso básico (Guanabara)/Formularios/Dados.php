<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Teste de formul�rios</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $valor = isset($_GET["v"])?$_GET["v"]:"N�o informado";
    $calcula = $valor*$valor;
    
    echo "A raiz quadrada de $valor " . "e igual a " . $calcula;
    
    
    $nome = isset($_GET["n"])?$_GET["n"]:["N�o informado"];
    $sexo = isset($_GET["s"])?$_GET["s"]:["N�o informado"];
    $ano = isset($_GET["a"])?$_GET["a"]:["N�o informado"];
    $idade = (2022 - $ano);
    
    echo "$nome nasceu em $ano tem $idade e e $sexo";
	
    	
   ?>
  </body>
</html>
