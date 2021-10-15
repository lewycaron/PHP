<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>


<body>
    
<h1>Atividade Avaliativa</h1>
    
    <?php include("menu.php"); ?>

    <form action="cadastro.php" method="POST">
    <p>
        <label>Nome do aparelho: </label> <br>
        <input type="text" name="nome" required>
    </p>
    <p>
        <label>Consumo Máximo do aparelho em Watts:</label><br>
        <input type="number" name="watts" min="1" required>
    </p>
    <P>
        <label>Numero de horas de aparelho ligado no dia: </label><br>
        <input type="number" name="ligadodia" min="1" max="24" required>
    </P>
    <p>
        <label>Numero de horas aparelho ligado no mes: </label><br>
        <input type="number" name="ligadomes" required>
    </p>
    <p>
        <label>valor do Kilhowatt/Hora: </label><br>
        <input type="number" name="kilowatthora" required>
    </p>

        <input type="submit" value="Enviar" name="enviar">
    </form>


</body>
</html>