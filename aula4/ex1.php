<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercicio 01</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Aula 04 - Exercicio 01</h1>
    <?php include_once 'menu.php'; ?>
    <h3>
    Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77. Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de estatura “Baixa”, “Média” ou “Alta”
    </h3>
    <form action="ex1.php" method="POST">
        <p>
            <label>Informe seu nome: </label><br>
            <input class="inputs" type="text" name="nome" maxLength="50" required placeholder="Ex: João da Silva">
        </p>
        <p>
            <label>Informe sua Altura (em cm): </label><br>
            <input  class="inputs" type="number" name="altura" min="1" max="220" required placeholder="Ex: 177">
        </p>
        <p>
            <button type="submit" name="enviar">Enviar</button>
        </p>
    </form>

    <?php 
    // verificar se o botao 'enviar' foi submetido (ou seja, o formulario foi enviado.)
    if(isset($_POST['enviar']))
    {
        //armarzenar od dados do form nos respectivas variaveis
        $nome = $_POST['nome'];
        $altura = $_POST['altura'];
    
        /* OPERADORES LÓGICOS NO PHP
        E   -   &&
        ou  -   ||
                
        */

        if ($altura >= 1 && $altura <= 159)
        {
            $estatura = "Baixa";
        }
        else if ($altura >= 160 && $altura <= 172){
            $estatura ="média";
        }
        else{
            $estatura = "alta";
        }
        echo "<p>$nome, Você tem $altura cm de altura, logo, sua estatura é $estatura </p>"; 

    }
        

    ?>


</body>
</html>