<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Exemplo 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 03 - Exemplo 2 - GET</h1>

    <?php include_once 'menu.php' ?>

    <h2>Exemplo de formulario com envio via GET</h2>
    <h3>Preencha os dados do seu curso:</h3>

    <form action="exp2.php" method="get">
        <p>
            <label>Curso:</label><br>
            <input type="text" name="curso">
        </p>
        <p>
            <label>Turno:</label><br>
            <input type="text" name="turno">
        </p>
        <p>
            <label>Unidade:</label><br>
            <select name="unidade" id="">
                <option value="osório">Osório</option>
                <option value="Ecoville" selected>Ecoville</option>
                <option value="Santos Andrade">Sts. Andrade</option>
            </select>
        </p>
        <p>
            <button type="submit" name="enviar">Enviar</button>
        </p>

    </form>

    <?php

    if(isset($_GET['enviar'])){

        $curso = $_GET['curso'];
        $turno = $_GET['turno'];
        $unidade = $_GET['unidade'];

        echo "<h4> Dados do seu curso:<h4>";
        echo "Curso: $curso <br>";
        echo "Turno: $turno <br>";
        echo "Unidade: $unidade";
    }


    ?>

        <p>
            <a href="index.php?origem=exp2.php">Mandar Parametro para home</a>
        </p>

</body>
</html>