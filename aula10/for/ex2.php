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
    <h1>Aula 10 - For - Exemplo 2</h1>

    <h4>
		Mostrar a quantidade de valores ímpares dentro do intervalor entre -10 e 57. Para tanto, utilize o laço <i>for</i>:
	</h4>

	<h3>Resultado:</h3>
    <p class="code">

<?php 
    $qtde = 0;
    for ($cont = - 10; $cont <= 57; $cont++)
        if ($cont % 2 != 0)
        {
            $qtde++;
        }
    echo "A quantidade de valores impares é de: $qtde";
    ?>
    </p>

    




</body>
</html>