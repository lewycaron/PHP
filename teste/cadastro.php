<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Aparelhos Eletrônicos</title>
</head>
<body>

	<h1>Aparelhos Eletrônicos</h1>
	<?php 
	if(isset($_POST["enviar"]))
	{
		$nome_do_aparelho = $_POST['nome_do_aparelho'];
		$consumo_maximo_em_watts = $_POST['consumo_maximo_watts'];
		$numero_dias_dia = $_POST['numero_dias_dia'];	
		$numero_dias_mês = $_POST['numero_dias_mes'];
		$valor_do_kilowatt_hora = $_POST['valor_kilowatt_hora'];	

		$x = $consumo_maximo_em_watts/1000;
		$consumo_diario = $x * $numero_dias_dia;

		$consumo_mensal = $consumo_diario * $numero_dias_mês;

		$consumo_reais = $consumo_mensal * $valor_do_kilowatt_hora;

		echo "<h4>O consumo diario do aparelho é de: $consumo_diario</h4>";
		echo "<h4>O consumo mensal do aparelho é de: $consumo_mensal</h4>";
		echo "<h4>O consumo em reais do aparelho é de: $consumo_reais</h4>";
		
		if($consumo_reais <= 5)
		{
			echo "O consumo é: BAIXA!";	
		} 
		else if($consumo_reais >= 6 && $consumo_reais <= 10)
		{		
			echo "O consumo é: MODERADA!";
		}
		else
		{
			echo "O consumo é: ELEVADO:";
		}
	}
	
?>
</body>
</html>