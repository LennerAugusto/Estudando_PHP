<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
   	 <?php
		//FUNÇÕES PARA MATRIZES E VETORES
		$vetor = array("a", "j", "v", "a");

		print_r($vetor);//EXIBE O VETOR PARA TESTE

		echo"o vetor tem " .count($vetor) . "elementos"; //CONTA A QUANTIDADE E ELEMENTOS NO VETOR

		//ADICIONANDO ELEMENTOS NO FINAL
		array_push($vetor, "L");
		array_push($vetor, "H");

		//REMOVENDO ELEMENTOS DO FINAL
		array_pop($vetor);


		//ADICIOANNDO ELEMENTOS NO INÍCIO
		array_unshift($vetor, 1);
		array_unshift($vetor, 2);

		//REMOVENDO ELEMENTOS DO INICIO
		array_shift($vetor);
		print_r($vetor);
  </body>
</html>

