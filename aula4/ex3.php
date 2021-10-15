<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Aula 04 - exercicio 03</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Aula 04 - Exercicio 03</h1>
    <?php include_once 'menu.php';?>

    <h3>Faça um programa que receba o salário e o tempo (em anos) de serviço de um funcionário. Com base no valor do salário e no tempo e serviço, mostre qual será o valor da gratificação que esse funcionário receberá</h3>

    <form action="ex3.php" method="post">

    <p>
        <label>Digite seu salário:</label><br>
        <input type="number" name="salario" min='800' required step="0.01" class="inputs"> 
    </p>
    <p>
        <label> Informe o tempod e serviço (em anos):</label><br>
        <input type="number" name="tempo" >
    </p>
    <p>
        <button type="submit"name ="enviar">Enviar</button>
    </p>

    </form>
    <?php 
    
    if (isset($_POST['enviar']))
    {
        $salario = $_POST['salario'];
        $tempo   = $_POST['tempo'];

        if ($salario > 1500 && $tempo <= 3)
        {
            $bonus  = 200;
        }
        else if ($salario > 1500 && $tempo > 3)
        {
            $bonus  = 300;
        }
        else if ($salario <= 1500 && $tempo <= 3)
        {
            $bonus = 230;
        }
        else if ($salario <= 1500 && $tempo <= 6)
        {
            $bonus = 330;
        }
        else 
        {
            $bonus = 350;
        }

        $salario    = number_format ($salario , "2");
        $bonus      = number_format ($bonus, "2" );

        echo "<h4>Seu salário é de R\$ $salario, e sua gratificação é de $bonus.</h4>";

    }


    ?>
</body>
</html>