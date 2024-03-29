<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Exemplo 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 03 - Exemplo 1 - POST</h1>
    <?php include_once 'menu.php'; ?>

    <h2>Exemplo de formulário com envio via POST</h2>

    <form action="exp1.php" method="post">
        <p>
            <label>Nome:</label><br>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label>Fone:</label><br>
            <input type="phone" name="fone" required> 
        </p>
        <p>
           <label>E-mail:</label><br>
           <input type="email" name="email" required>
        </p>
        <p>
            <button type="submit" name="enviar">Enviar</button>
        </p>

    </form>

    <?php  

        //verificar se o formulário foi enviado:
        // SE o botão 'enviar' foi enviado via POST
        if (isset($_POST['enviar']))
        {//inicio do bloco if
           
        $nome = $_POST['nome'];
        $fone = $_POST['fone'];
        $email = $_POST['email'];
    
        echo "<h4> Dados de Contato:</h4>";
        echo "Nome: $nome <br>";
        echo "Fone: $fone <br>";
        echo "E-mail: $email";

        }//Fim do bloco if

    ?>

</body>
</html>