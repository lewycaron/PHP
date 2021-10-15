<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Aparelhos Eletrônicos</title>
</head>
<body>

<h1>Aparelhos Eletrônicos</h1>

	<form action="cadastro.php" method="POST">
		<p></p>
		<p>
		<label>nome do aparelho</label><br>
		<input type="text" name="nome_do_aparelho">
		</p>

		<p>
		<label>consumo máximo em watts </label><br>
		<input type="number" name="consumo_maximo_watts">
		</p>

		<p>
		<label>número de horas que o aparelho é ligado por dia.<br></label>
		<input type="number" name="numero_dias_dia">
		</p>

		<p>
		<label>número de dias que o aparelho ficará ligado no mês</label><br>
		<input type="number" name="numero_dias_mes">
		</p>

		<p>
		<label>valor do kilowatt-hora</label><br>
		<input type="number" name="valor_kilowatt_hora">
		</p>

		<input type="submit" value="enviar" name="enviar">
		

	</form>
	
</body>
</html>