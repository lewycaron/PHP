<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 2 - Exercicio 2</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once 'menu.php';?> 
<h1>Atividade Avaliativa 2 - Exercicio 2</h1>
<form action="ex2.php" method="post">
    <p><label>Insira o valor de A: </label><br>
    <input type="number" value="a" name="a" required>
    </p>
    <p>
    <label>Insira o valor de B:</label><br>
    <input type="number" value="b" name="b" required>
    </p>
    <p><div>
        <label>Insira o valor de C: </label><br>
        <input type="number" value="c" name="c" required>
    </div></p>
    <input type="submit" value="enviar" name="enviar">
</form>
<?php
    if(isset($_POST['enviar'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $delta = pow($b,2) - 4 * $a * $c;
        if($delta == 0){
            $x1 = (-$b + sqrt($delta)) / (2*$a);
            //$resultado_um = ($a * pow($x1, 2)) + ($b * $x1 + $c);
            echo "<h4>O resultado da equação de Baskara é: $x1</h4>";
            echo "<h4>A conta da equação é de: $resultado_um";
        }else if ($delta > 0){
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $resultado_um = ($a * pow($x1, 2)) + ($b*$x1) + $c;
            //$resultado_dois = ($a * pow($x2, 2)) + ($b*$x2) + $c;
            echo "<h4>O resultado da equação de Baskara é: $x1 e $x2</h4>";
            echo "<h4>A conta da equação é de: $resultado_um e $resultado_dois";
        }else {
            echo '<h3>Valor de Delta esta Negativo<br> Impossivel realizar conta!</h3>';
        }
        echo "<h4>O valor de A é: $a </h4>";
        echo "<h4>O valor de B é: $b </h4>";
        echo "<h4>O valor de C é: $c</h4>";
        echo "<h4>O valor de DELTA é: $delta</h4>";
    }
?>
</body>
</html>