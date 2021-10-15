<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 03</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 03 - home</h1>    
    <?php include_once 'menu.php'; ?>

    <p>
        Esta é a pagina principal. <br>
        Utilize o menu acima para navegar entre as páginas.
    </p>

    <?php
    // verificar se essa pagina recebeu parametro 'origem'
    if (isset($_GET['origem'])){
    $origem = $_GET['origem'];
    
    echo "<h4> Você chegou nesta pagina através da $origem </h4>";

    }

    ?>

</body>
</html>