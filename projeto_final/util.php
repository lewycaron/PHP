<?php  
// função para validar uma mensagem e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h3 class="danger">Informe todos os dados para efetuar o login!</h3>';
			break;

		case 'invalido':
			$retorno = '<h3 class="danger">Atenção: Usuário ou senha inválidos</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3 class="danger">Preencha todos os dados do jogo para cadastrar!</h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3 class="danger">Preencha todos os dados do Jogo para editar!</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3 class="sucesso">Jogo cadastrado com sucesso!</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3 class="danger">Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde...</h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3 class="danger">Atenção: Jogo inválido. por favor, repita a operação</h3>';
			break;

		case 'jogosdeletado':
			$retorno = '<h3 class="sucesso">Jogo excluído com sucesso!</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3 class="danger">Atenção: erro ao excluir Jogo. Tente novamente mais tarde...</h3>';
			break;

		case 'editado':
			$retorno = '<h3 class="sucesso">Dado do jogo alterado com sucesso!</h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3 class="danger">Atenção: erro ao alterar dados do Jogo. Tente novamente mais tarde...</h3>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>