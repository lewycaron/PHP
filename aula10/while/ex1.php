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
		Mostrar o valor da variavel $x na tela enquanto ela for menor que 10.<br>
        Para tanto, ela deve inicar em -5, e a cada passsagem do laço <i>while</i>, ela deverá ser incrementado em 3 unidades
	</p>

	<h4>Resultado:</h4>
    <p class="code">
    <?php
	
    $x = -5;

    while ($x < 10)
    {
        echo "Valor atual de 'x': $x<br>";
        $x += 3;
    }
    
    ?>
    </p>
    
</body>
</html>