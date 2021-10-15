<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercicio 02</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <h1>Aula 04 - Exercicio 02</h1>
    <?php include_once 'menu.php';?>

    <h3>
    Crie um algoritmo que leia o salário de uma pessoa e com base nesse salário, faça o cálculo e imprima o valor do desconto de INSS.
    </h3>

    <form action="ex2.php" method="post">
        <p>
            <label>Digite o valor do salário:</label><br>
            <input class="inputs" type="number" name="salario" min='600' step="0.01" required>
        </p>
        <p>
            <button type="submit" name="calcular">Calcular</button>
        </p>
    </form>

    <?php 
        if(isset($_POST['calcular'])){
            $salario = $_POST['salario'];

            if ($salario <= 750)
            {
                $inss = $salario * 0.07;
            }
            else if ($salario <= 900)
            {
                $inss = $salario * 0.08;
            }
            else if ($salario <= 1200)
            {
                $inss = $salario * 0.09;
            }
            else
            { 
                $inss = $salario * 0.10;
            }
                $salario    = number_format($salario, "2", ",",".");
                $inss       = number_format($inss, "2", ",",".");
                echo "<p> Seu salário é de R\$ $salario, e seu desconto é de R\$ $inss</p>";

        }
    
    ?>
</body>
</html>