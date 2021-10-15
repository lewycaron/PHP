<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Exercicio 3</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <h1>Exercicio 03</h1>
    <?php include_once 'menu.php'; ?>
    <p>
        <h3>Calcular a idade de uma pessoa, tendo em vista que a mesma irá digitar o ano do seu nascimento.</h3>
    </p>
    <form action="ex3.php" method="POST">
    <p>
        <label> Digite seu ano de nascimento: </label><br>
        <input type="number" name="nascimento" min="1920" max="2020" required>;
        </p>
        <p>
            <button type="submit" name='enviar'>Enviar</button>
        </p>
    
    </form>
    <?php 
    if(isset($_POST['enviar'])){

        $nascimento = $_POST['nascimento'];
        $ano = '2021';
        $idade = $ano - $nascimento;
        
        echo "<h4>A sua idade é de $idade anos.</h4>";
    
    }
    ?>


</body>
</html>