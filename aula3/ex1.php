<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - Exercicio 1</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <h1>Exercicio 01</h1>
<?php include_once 'menu.php';?>

<h3>Calcular o aumento que será dado a um funcionário, obtendo do usuário as seguintes informações: Saário atual e a porcentagem de aumento. Apresentar o novo valor do salário eo valor do aumento.</h3>

<form action="ex1.php" method="POST">
    <p>
        <label>Salário atual:</label><br>
        <input type="number" name="salario" min="800" max="10000"  step="0.1" required>
    </p>
    <p>
        <label>Porcentagem</label><br>
        <input type="number" name="porcentagem">
    </p>
    <p>
        <button type="submit" name ="calcular">Calcular</button>
    </p>

</form>

<?php 

    if (isset($_POST['calcular']))
    {
        $salario = $_POST['salario'];
        $porcentagem = $_POST['porcentagem'];

        $aumento = $salario * ($porcentagem/100);
        $salario_final = $salario + $aumento;

        echo "<h4> Seu salário final é de R\$ $salario_final. Voce teve um aumento de R\$ $aumento </h4>";
    }

?>


</body>
</html>