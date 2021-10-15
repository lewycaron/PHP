<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Folha de pagamento funcionarios!</h1>
    <?php 
        include 'menu.php';
        if(isset($_POST['enviar'])){
            $nome = $_POST['nome'];
            $horastrabalho = $_POST['horastrabalho'];
            $valorhora = $_POST['valorhora'];
           
            $salariobruto = $horastrabalho * $valorhora;

            // calcular o IR
            if($salariobruto <= 1372.81){
                $ir = 0;
            }
            else if ($salariobruto <= 2743.25){
                $ir = $salariobruto * 0.15;
            }
            else if ($salariobruto > 2743.25){
                $ir = $salariobruto * 0.275;
            }
                        
            //calcular INSS
            if($salariobruto <= 868.29){
                $inss = $salariobruto * 0.08;
            }
            else if($salariobruto <= 1447.14 ){

                $inss = $salariobruto * 0.09;
            }
            else if ($salariobruto <= 2894.28 ){
                $inss = $salariobruto * 0.11;
            }
            if($salariobruto >= 2894.28 ){
                $inss = 318.37;
            }
            $fgts = $salariobruto * 0.08;
            $salarioliquido = $salariobruto - $ir - $inss;


            
            echo "Nome: $nome <br>" ;
            echo "Valor Hora/trabalho: $valorhora<br>"; 
            echo "Horas trabalho: $horastrabalho <br>";

            echo "<br><h4>Salário bruto é de $salariobruto</h4>";  
            echo "<h4>O valor do IR é de $ir.</h4>";
            echo "<h4>O valor do Inss é de $inss.</h4>";
            echo "<h4>O valor do FGTS é de $fgts.</h4>";
            echo "<h4>O salario liqueido é de $salarioliquido.</h4><br>";

    }
    else{
        echo "<h4> Nenhum dado foi recebido... </h4>";
    }

    ?>
</body>
</html>