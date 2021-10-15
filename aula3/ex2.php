<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - Exercicio 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Exercicio 02</h1>
    <?php include_once 'menu.php';?>
    <h3>Calcular o volume de uma caixa (largura x altura x comprimento).</h3>

    <form action="ex2.php" method="POST">
        <p>
            <label>Largura:</label><br>
            <input type="number" name="largura" required>
        </p>
        <p>
            <label>altura:</label><br>
            <input type="number" name="altura" required>
        </p>
        <p>
            <label>comprimento</label><br>
            <input type="number" name="comprimento" required>
        </p>

    <p>
        <button type="submit" name="calcular">Calcular</button>
    </p>
    </form>
    <?php

    if(isset($_POST['calcular'])){

        $largura = $_POST['largura'];
        $altura = $_POST['altura'];
        $comprimento = $_POST['comprimento'];

        $volume = $largura * $altura * $comprimento;


        echo "<h4> O valor do volume da caixa é de $volume. </h4>";

    }

    ?>




    
</body>
</html>