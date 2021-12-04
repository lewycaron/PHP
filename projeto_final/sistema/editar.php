<?php include_once 'lock.php';
include_once '../database/jogos.dao.php'; 

if (!isset($_GET['id_jogos']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$result = buscar_jogo($_GET['id_jogos']);

	if($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{

		$jogo = mysqli_fetch_assoc($result);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilo.css">
	<title>Projeto Final - Editar jogos</title>
</head>
<body>
	<div class="container">
		<div class="box2"> 
		<h1>Game Base</h1><br>
		<h2>Editar Dados do jogo:</h2><br>
		<form action="editado.php" method="post">
			<p>
				<label>Título</label><br>
				<input type="text" name="nome" required value="<?= $jogo['nome']?>">
			</p>
			<p>
				<label>Produtora</label><br>
				<input type="text" name="produtora" required value="<?= $jogo['produtora'] ?>" >
			</p>
			<p>
				<label>Ano</label><br>
				<input type="text" name="ano" required value="<?= $jogo['ano'] ?>">
			</p>
			<p>
				<br>
				<button type="submit" name="salvar" class="botao">Salvar Alterações</button>
			</p>
			<input type="hidden" name="id_jogos" value="<?= $jogo['id_jogos'] ?>">
		</form>
		<br>
		<a href="index.php"> <input type="submit" value="voltar" class="botao"> </a>

		<br><br>
		

		</div>
	</div>

</body>
</html>