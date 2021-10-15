<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 2 - Exercicio 1</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    
    <?php include_once ('menu.php')?>
    <h1 id="titulo">Atividade Avaliativa 2 - Exercicio 1</h1>
    <form action="ex1.php" class="form">
            <p>
                <label for="label"><strong>Qual seu genero?:</strong></label><br>
                <select name="genero">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </p>
            <p>
                <label for="label"><strong>Digite a sua altura em metros: </strong></label><br>
                <input type="number" name="altura" step="0.01" min="1" required>
            </p>
                <input class="botao" type="submit" value="Enviar" name="enviar">
    </form>

<p>
    <?php
        if(isset($_POST['enviar']))
        {
            $genero = $_POST['genero'];
            $altura = $_POST['altura'];

            if ($genero == "M") {
                $pesoideal = (72.7 * $altura) - 58;
            } else {
                $pesoideal = (62.1 * $altura) - 44.7;
            }
            
            $pesoideal = number_format ($pesoideal, 2);
            echo "<h4>Seu peso ideal é de: $pesoideal kilos</h4>";        
        }
    ?>
</p>

</body>
</html>