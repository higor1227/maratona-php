<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
   
    <h1> Matrizes </h1>
   
    <?php
 
    $matriz = [
 
        [ 10, 40, 36 ],
        [ 98, 57, 78 ],
        [ 50, 29, 90 ]
 
    ];
 
    $soma = 0;
 
    foreach ($matriz as $linha){
        foreach ($linha as $elemento)
        $soma += $elemento;
    }
 
    echo "A soma da Matriz total é: " . $soma;
 
 
    ?>
 
   
</body>
</html>