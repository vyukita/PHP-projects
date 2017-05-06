<?php

// função lista produtos do banco
function listaProdutos($conexao){
		$produtos = array();		
		$resultado = mysqli_query($conexao, "select p.*, c.nome as nome_categoria from produtos p join categoria c on c.id = p.categoria_id");
		while($produto = mysqli_fetch_assoc($resultado)){
			array_push($produtos,$produto);
	}
		return $produtos;
}

// função para inserir no banco:
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', 
    {$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
        categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

//faz a busca dos produtos para alteração
function buscaProduto($conexao, $id){
	$query = "select * from produtos where id={$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

//função para deletar do banco
function removeProduto($conexao, $id){
	$query = "delete from produtos where id={$id}";
	return mysqli_query($conexao, $query);
}
?>