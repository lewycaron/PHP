<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Projeto Final - Home</title>
</head>
<body>

	

	<form action="validar.php" method="post">
	<fieldset class="container">
	<div class="box">
		<h1 id="titulo">Game Base v1.0</h1><br>
		<p>
			<label for="usuario">Usuário:</label><br>
			<input type="text" name="usuario" required id="usuario" value="#teamJason S2">
		</p>
		<p>
			<label for="senha">Senha:</label><br>
			<input type="password" name="senha" required id="senha">
		</p>
		<p>
			<br><input class="botao" type="submit" value="Entrar" name="entrar" >
		</p>
		<br>
		<?php  
		if (isset($_GET['msg'])){
			include_once 'util.php';
			echo validar_msg($_GET['msg']);
		}
		?>
	</div>
	</fieldset>
	</form>



</body>
</html>