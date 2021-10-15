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
    <h1>Aula 10 - For - Exemplo 1</h1>
    

    <h4>
        Mostrar na tela todos os valores pares dentro do intervalo entre 1 e 50. Para tanto, utilize o laço de repetição <i>for</i>.
    </h4>
        <p class ="code">
            <?php 
                    for ($cont = 1; $cont <= 50; $cont++)
            {
                if ($cont % 2 == 0){
                    echo "- $cont";
                }
            }
            ?>
        </p>

</body>
</html>