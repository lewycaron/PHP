<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/stylo.css">
</head>
<body>
    <h1>Aula 02 - Cadastro</h1>

    <?php include_once 'menu.php' ?>

    <h2>Cadastro Pessoal</h2>

    <form   action="resposta.php" method="post">

    <p>
        <label>Nome:</label><br>
        <input type="text" name="nome" maxlength="40" required>
    </p>
    <p>
        <label>Idade:</label><br>
        <input type="number" name="idade" min="18" max="120" required>
    </p>
    <p>
        <label>E-mail:<label><br>
        <input type="email" name="email" maxlength="40" required>
    </p>
    <p>
        <button type="submit">Enviar</button>
        <button type="reset">Resetar</button>
    </p>
    
    

    </form>
</body>
</html>