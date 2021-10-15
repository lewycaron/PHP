<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercicio 4</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Aula 04 - Exercicio 4</h1>
    <?php  include_once 'menu.php'; ?>  

    <h3>Faça um programa que receba o salário e a quantidade de filhos de um funcionário. Com base no valor do salário e na quantidade de filhos, calcule e mostre qual será o novo valor do salário que esse funcionário receberá, já incluído o valor do auxílio-escola</h3>

    <form action="ex4.php" method="post">
        <p>
        <label>Informe salário: </label><br>
        <input type="number" name="salario" required>
        </p>

        <p>
            <label>Informe a quantidade de filhos: </label><br>
            <input type="number" name ="qtd_filhos" required>
        </p>
        <button type="submit" name ="enviar">enviar</button>
    </form>
    <?php 
        if(isset($_POST['enviar'])){
            $salario = $_POST['salario'];
            $qtd_filhos = $_POST['qtd_filhos'];

            if($salario <= 2300 && $qtd_filhos <= 2){
                $auxilio = $salario + 50;
            }
            if($salario <= 2300 && $qtd_filhos > 2){
                $auxilio = $salario + 70;
            }
            if($salario <= 2500 && $salario > 2300 && $qtd_filhos <= 2){
                $auxilio = $salario + 40;
            }
            if($salario <= 2500 && $salario > 2300 && $qtd_filhos > 2){
                $auxilio = $salario + 60;
            }
            if($salario > 2500 && $qtd_filhos <= 2){
                $auxilio = $salario + 30;
            }
            if($salario > 2500 && $qtd_filhos > 2){
                $auxilio = $salario + 20;
            }
            echo "<h4>O valor do salário com o auxilio é de R\$ $auxilio</h4>";
            


        }

    
    ?>
</body>
</html>