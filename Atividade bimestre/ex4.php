<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 2 - Exercicio 4</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <?php include_once 'menu.php';?>
    <h1>Atividade Avaliativa 2 - Exercicio 4</h1>

    <form action="ex4.php" method="post">
        <p>
            <label>Informe o valor do produto:</label><br>
            <input type="number" value="valor" name="valor" step="0.01" min="1" required>
        </p>
        <p>
    
        <p><label>Informe condição de pagamento:</label>
        <select name="codigo">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <!-- </p>
        <input type="radio" value="1" name="codigo">1: À vista em dinheiro ou cheque, recebe 10% de desconto<br>
        <input type="radio" value="2" name="codigo">2: À vista no cartão de crédito, recebe 5% de desconto<br>
        <input type="radio" value="3" name="codigo">3: Em 2 vezes, preço da etiqueta sem juros<br>
        <input type="radio" value="4" name="codigo">4: Em 3 vezes, preço da etiqueta mais juros de 10%<br>
        </p> -->
        <p><input type="submit" value="enviar" name="enviar"></p>
    </form>

    <?php 
    
        if(isset($_POST['enviar'])){
            $valor = $_POST['valor'];
            $codigo = $_POST['codigo'];

            if($codigo == "1"){
                $valordesconto = $valor * 0.90;
                $valordesconto = number_format($valordesconto, 2);
                echo "<h4>O valor com 10% de desconto é de: R\$$valordesconto</h4>";
            }else if ($codigo == "2"){
                $valordesconto = $valor * 0.95;
                $valordesconto = number_format($valordesconto, 2);
                echo "<h4>O valor com 5% de desconto é de: 
                R\$$valordesconto</h4>";
            }else if ($codigo == "3"){
                $valordividido = $valor / 2;
                $valordividido = number_format($valordividido, 2);
                echo "<h4>O preço em 2x sem juros é de: R\$$valordividido</h4>";
            }else if ($codigo == "4"){
                $valorjuros = $valor * 1.1;
                $valordividido = $valorjuros / 3;
                $valorjuros = number_format($valorjuros, 2);
                $valordividido = number_format($valordividido, 2);
                echo "<h4>O valor com juros é de R\$$valorjuros em 3x de: R\$$valordividido</h4>";
            }

        }
    
    ?>
</body>
</html>