<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
        function soma(){
            $p=func_get_args();
            $total=func_num_args();
            $s = 0;
    
            for($i=01; $i<$total; $i++){
                $s = $s + $p[$i];
            }
    
            return $s;
        }

        $r = soma(3,5,2,8);
        echo "A soma entre os números é: $r";
    ?>    
  </body>
</html>
