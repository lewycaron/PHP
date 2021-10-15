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
    <?php include_once 'menu.php'?>

    <?php 

        if(isset($_POST['enviar']))
        {
            $nome = $_POST['nome'];
            $watts = $_POST['watts'];
            $ligadodia = $_POST['ligadodia'];
            $killowatthora = $_POST['kilowatthora'];
            $ligadomes = $_POST['ligadomes'];

            //consumo diario do aparelho
            $x = $watts/1000;
            $consumodiario = $x * $ligadodia;
            
            //consumo mensal do aparelho
            $consumomensal = $consumodiario * $ligadomes;

            //consumo do aparelho em R$
            $valor = $consumomensal * $killowatthora;


            echo "<h4>O nome do aparelho: $nome</h4>";     
            echo "<h4>O consumo diário do aparelho é de: $consumodiario!</h4>";
            echo "<h4>O consumo Mensal do aparelho é de: $consumomensal!</h4>";
            echo "<h4>O consumo do aparelho em Reais é de: R\$ $valor!</h4>";
            

            if($valor <= 5)
                {
                echo "<h4>A categoria de consumo do aparelho é <strong> BAIXA</strong></h4>";
                }
                else if ($valor <= 10 && $valor > 5)
                {
                echo "<h4>A categoria de consumo do aparelho é <strong> MODERADA</strong></h4>";
                }
                else 
                {
                echo "<h4>A categoria de consumo do aparelho é <strong> ELEVADA</strong></h4>";
                }
               
        }
   
    ?>
    <p>
        <a href="index.php"><input type="button" value="voltar" name="voltar"></a>
    </p>

</body>
</html>