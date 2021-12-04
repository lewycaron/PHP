<?php include_once 'lock.php';
include_once '../database/jogos.dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilo.css">
	<title>Projeto Final - Area Restrita</title>
</head>
<body class="container-fluid">

	
	<fieldset class="container">
	<div class="box2">
		<h1>Game Base</h1><br>
		<h2>Cadastrar Jogo:</h2><br>
		<form action="cadastrar.php" method="post" class="formulario">

			<p><label for="nome">Nome:</label><br>
				<input type="text" name="nome" required ></p>

			<p><label class="form-label">Produtora:</label><br>
				<input type="text" name="produtora" required ></p>

			<p><label class="form-label">Ano:</label><br>
				<input type="text" name="ano" required></p>

			<p><br><button type="submit" name="salvar" class="botao">Salvar</button> 
		</form>
		<br>
		<a href="logout.php" class="btn btn-primary btn-sm"><input type="submit" value="Sair do sistema" class="botao"></a></p>

	</div>
		
	</fieldset>
	<p><br><br>
	<div class= "container">
	<div class="box3">
		<p>
		<h2>Jogos Cadastrados</h2><br>
		<?php  
		if (isset($_GET['msg'])){
			include_once '../util.php';
			echo validar_msg($_GET['msg']);
		}
		?>
		<div class="center"><?php echo exibir_jogos(); ?></div>
		</p><br>
		
	</div>
	</div>



</body>
</html>