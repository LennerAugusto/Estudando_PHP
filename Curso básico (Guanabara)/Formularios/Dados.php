<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Teste de formulários</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $valor = isset($_GET["v"])?$_GET["v"]:"Não informado";
    $calcula = $valor*$valor;
    
    echo "A raiz quadrada de $valor " . "e igual a " . $calcula;
    
    
    $nome = isset($_GET["n"])?$_GET["n"]:["Não informado"];
    $sexo = isset($_GET["s"])?$_GET["s"]:["Não informado"];
    $ano = isset($_GET["a"])?$_GET["a"]:["Não informado"];
    $idade = (2022 - $ano);
    
    echo "$nome nasceu em $ano tem $idade e e $sexo";
	
    	
   ?>
  </body>
</html>
