<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Execicio 04</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <h1>Exercicio 04</h1>
    <?php include_once 'menu.php';?>

    <h3>Calcular o consumo por litro de um carro, sendo que será informada a quantidade de quilômetros percorrido e a quantidade de litros abastecido (basta dividir a quilometragem percorrida pela quantidade de litros abastecida).</h3>

    <form action="ex4.php" method="POST">
        <p>
        <label>Quilômetros percorridos</label><br>
        <input type="number" name="km" required>
        </p>    
        <p>
            <label>Litros abastecidos</label><br>
            <input type="number" name="litros" required>
        </p>    

        <p><button type="submit" name="calcular">Calcular</button></p>
    </form>
        <?php 
        if(isset($_POST['calcular'])){
            $km = $_POST['km'];
            $litros = $_POST['litros'];
            $consumo = $km / $litros;

            echo "O consumo por litro do carro é igual a $consumo Km/l";
        }

        ?>

    
</body>
</html>