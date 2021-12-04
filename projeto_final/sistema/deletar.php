<?php  include_once 'lock.php';

if (!isset($_GET['id_jogos']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_jogos = $_GET['id_jogos'];

	include_once '../database/jogos.dao.php';

	$result = deletar_jogos($id_jogos);

	if ($result)
	{
		header('location:index.php?msg=jogosdeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>