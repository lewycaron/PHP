<?php  
include_once 'conn.php';


function salvar_jogos($nome, $produtora, $ano)
{
	$conn = conectar();

	$sql = "INSERT INTO jogos_tb (nome, produtora, ano) 
	VALUES ('$nome', '$produtora', '$ano')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}


function buscar_jogos()
{
	$conn = conectar();

	$sql = "SELECT * FROM jogos_tb";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}


function exibir_jogos()
{
	$result = buscar_jogos();


	if ($result == null)
	{
		$retorno = '<h3>Não há jogos cadastrados</h3>';
	}
	else 
	{

		$retorno = '<div">';
		$retorno .= '<table>';
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; 
		$retorno .= '<th>Nome</th>';
		$retorno .= '<th>Produtora</th>';
		$retorno .= '<th>Ano</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($jogo = mysqli_fetch_assoc($result))
		{
			$retorno .= '<tr>';
			$retorno .= "<td>" . $jogo['id_jogos'] 				. "</td>";
			$retorno .= "<td>" . $jogo['nome']   				. "</td>";
			$retorno .= "<td>" . $jogo['produtora']    			. "</td>";
			$retorno .= "<td>" . $jogo['ano']  					. "</td>";
			$retorno .= "<td>" . link_deletar($jogo['id_jogos']) . "</td>";
			$retorno .= "<td>" . link_editar($jogo['id_jogos'])  . "</td>";
			$retorno .= '</tr>'; 
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}

	return $retorno;
}


function link_deletar($id_jogos)
{
	$link = '<a href="deletar.php?id_jogos='.$id_jogos.'"onclick="return confirm(\'Tem certeza que deseja excluir este jogo?\')" class="botao_del">Deletar</a>';

	return $link;
}


function link_editar($id_jogos)
{
	$link = '<a href="editar.php?id_jogos='.$id_jogos.'" class="botao_editar">Editar</a>';
	return $link;
}


function deletar_jogos($id_jogos)
{
	$conn = conectar();

	$sql = "DELETE FROM jogos_tb WHERE id_jogos = $id_jogos";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}


function buscar_jogo($id_jogos)
{
	$conn = conectar();

	$sql = "SELECT * FROM jogos_tb WHERE id_jogos = $id_jogos";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para editar (atualizar) dados do livro
function editar_jogos($id_jogos, $nome, $produtora, $ano)
{
	$conn = conectar();

	$sql = "UPDATE jogos_tb SET nome = '$nome', produtora = '$produtora', ano = '$ano' 
	WHERE id_jogos = $id_jogos";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

?>