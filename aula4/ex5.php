<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercicio 5</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <h1>Aula 04 - Exercicio 5</h1>
    <?php  include_once "menu.php" ;?>

    <h3>Elabore um algoritmo que leia o nome de um funcionário, a quantidade de dependentes até 14 anos e o valor do salário base. Com nessas informações deve ser calculado o valor do INSS e o valor do salário família (conforme é apresentado nas tabelas). Escrever no final o valor do salário líquido, que seria nesse caso: salário base – valor inss + valor salário família.</h3>


    <form action="ex5.php" method ="post">
        <p>
           <label>Insira seu nome: </label> <br>
           <input type="text" name="nome" required>
        </p>
        <p>
            <label>Quantidade de dependentes até 14 anos: </label><br>
            <input type="text" name="dependentes" required>
        </p>
            <button type="submit" name="enviar">Enviar</button>

        </form>
        <?php 
            if(isset($_POST['enviar'])){
                

            }
        ?>
</body>
</html>