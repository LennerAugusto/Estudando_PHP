<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Preço do produto</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php 
        
        $contador1 = 2022;
        $contador2 = 2022;
        
        $preco = $_GET['p'];
        
        echo "O preco do produto e: " . $preco;     
        
        $preco += ($preco*10/100);
        
        echo "<br>O preco com 10% de aumento e: " . $preco;
        
       //Teste da atribuição de incremento e decremento (Contador)
        
        echo"<br><br> Teste de operadores incremento / decremento<br>";
        
        $contador1++;
        echo "<br>Um ano a mais: " . $contador1;
        
        $contador2--;
        
        echo "<br>Um ano a menos: " . $contador2; 
        
        
        //Variáveis de variáveis
        
        $abc = "Curso em video";
        $$abc = "def";
        
        echo "<br>Testando as variaveis de variaveis<br>";
        
        echo "<br>A variavel abc recebera o valor: " . $abc . " pois pegou o conteudo que estava dentro de abc";
        
    ?>
  </body>
</html>