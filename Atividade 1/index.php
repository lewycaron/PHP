<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Home</title>
    <link rel="stylesheet" href="css/estilo.css">
    </head>
<body>
    <h1>Aula 05 - Home</h1>
    <?php include_once 'menu.php' ?>
    <form action="pagamento.php" method="post">
    <p>
        <label>Nome: </label> <br>
        <input type="text" name="nome" maxlenght=40 requided>
    </p>
    <p>
    <label>Numero de horas trabalhadas:</label><br>
    <input type="number" name="horastrabalho" required>
    <p>
        <label>valor da hora trabalho: </label><br>
        <input type="number" name="valorhora">
    </p>
    </p>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>