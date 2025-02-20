<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
 
 
<h1> Matriz </h1>
 
<?php
 
$matriz = [
       
    [30, 24, 13, 42, 38],
    [10, 21, 23, 14, 12],
    [5, 9, 15, 8, 2 ],
    [45, 32, 44, 41, 40],
    [34, 22, 20, 19, 1]
   
    ];
 
    $maiorNumero = $matriz[0][0];
    $posicaoLinha = 0;
    $posicaoColuna = 0;
   
    foreach ($matriz as $a => $linha) {
        foreach ($linha as $b => $elemento) {
            if ($elemento > $maiorNumero) {
                $maiorNumero = $elemento;
                $posicaoLinha = $a;
                $posicaoColuna = $b;
            }
        }
    }
 
   
    echo "O maior numero da matriz é: $maiorNumero " ;
   
 
 
?>
 
 
   
</body>
</html>