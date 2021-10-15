<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 2 - Exercicio 5</title>
    <link rel="stylesheet" href="css/estilo.css">
 
</head>
<body>
    <?php include_once 'menu.php';?>
    <h1>Atividade Avaliativa 2 - Exercicio 5</h1>

    <form action="ex5.php" method="post">
        <p>
            <label>Informe o operador:</label><br>
            1 : Área da Circunferêrencia<br>
            2 : Perimetro da Circunferêrencia<br>
            <input type="text" name="operador" required>

            <!-- <select name = "operador">
                <option value="1">Área da Circunferêrencia</option>
                <option value="2">Perimetro da Circunferêrencia</option>
            </select> -->
        </p>
        <p>
            <label>Informe o Raio da Circunferêrencia:</label><br>
            <input type="number" name="raio" value="raio" required>
        </p>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?php
    if(isset($_POST['enviar'])){

        $operador =$_POST['operador'];
        $raio = $_POST['raio'];

        if($operador == 1){
            $result = number_format(pi() * pow($raio,2), 2);
            echo "O valor da Área da Circunferêrencia é de: $result ";
        } else if ($operador == 2) {
            $result = number_format(2 * pi() * $raio, 2);
            echo "O valor do Perimetro da Circunferêrencia é de: $result ";
        }else {
            echo "<h3>Erro ao selecionar o operador!</h3>";
        }
    }
    ?>
</body>
</html>