<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - For - Exemplo 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php include_once 'menu.php'?>
    <h1>Aula 10 - For - Exemplo 3</h1>
    <p>
        <h4>Somar todos os valores pares entre 34 e 87. Ao final, mostra a soma, a quantidade de valores pares encontrados e a média destes valores.</h4>
    </p>
    <h4>
        Resultado:
    </h4>
    <p class="code">
    <?php
        $soma = 0; 
        $qtde = 0;
    
    for ($cont = 34; $cont <= 37; $cont++)
    {
        if ($cont  % 2 == 0){
            $qtde++;
            $soma += $cont;
        }
    }

    $media = $soma /  $qtde;

    echo "A soma dos valores pares: $soma<br>";
    echo "A quantidade de valores pares é de: $qtde<br>";
    echo "A Média dos valores pares: $media";

    ?>
    </p>    


</body>
</html>