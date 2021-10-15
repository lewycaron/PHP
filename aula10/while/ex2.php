<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Ex. While - Homw</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Exemplo While - Home</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Zézinho tem 1.45 m de autura, e seu amigo Luizinho tem 1.30m de autura. <br>
        Sabendo que Zezinho cresce 2cm por ano, e luizinho 3 cm por ano, daqui ha quantos anos Luizinho será mais alto que Zézinho?
	</p>

	<h4>Resultado:</h4>
    <p class="code">
    <?php
    
    $zezinho = 1.45;
    $luizinho = 1.30;
    $anos = 0;
    
    while ($zezinho >= $luizinho)
    {
        $zezinho = number_format($zezinho + 0.02, '2');
        $luizinho = number_format($luizinho + 0.03, '2');
        $anos++;
    }

    echo "Levaram $anos anos para Luizinho ultrapassar Zézinho<br>";
    echo "Altura atual de Zézinho: $zezinho<br>";
    echo "Altura atual de Luizinho: $luizinho"; 
     

    ?>
    </p>
    
</body>
</html>