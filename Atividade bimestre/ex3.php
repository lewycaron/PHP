<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 2 - Exercicio 3</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <?php include_once 'menu.php';?> 
<h1>Atividade Avaliativa 2 - Exercicio 3</h1>

<form action="ex3.php" method="post">
    <p>
        <label> Informe a idade: </label><br>
        <input type="number" value="idade" name="idade" required>
    </p>
    <input type="submit" value="enviar" name="enviar">
</form>

<?php
    if(isset($_POST['enviar'])){
        $idade = $_POST['idade'];
        
        if($idade < 4){
            $categoria = "SEM CATEGORIA";
        }else if($idade >= 4 && $idade <= 7){
            $categoria = "INFANTIL A";
        }else if($idade >= 8 && $idade <= 10){
            $categoria = "INFANTIL B";
        }else if($idade >= 11 && $idade <= 13){
            $categoria = "JUVENIL A";
        }else if($idade >= 14 && $idade <= 17){
            $categoria = "JUVENIL B";
        }else {
            $categoria = "ADULTO";
        }
        echo "<h4>A categoria é: $categoria!</h4>";
    }
?>
</body>
</html>