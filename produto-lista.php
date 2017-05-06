<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); ?>

<?php
	// mostra mensagem de sucesso apenas quando remover um produto
	if(array_key_exists('removido', $_GET) && $_GET['removido']=="true"){
?>
	<p class="alert-success">Produto removido com sucesso</p>
<?php
	}
?>
	
<table class="table table-striped table-bordered">
	<?php
	// chama função listaProdutos
	$produtos = listaProdutos($conexao);
	foreach($produtos as $produto) :
	?>
			<tr>
				<td> <?= $produto['nome'] ?> </td>
				<td> <?= $produto['preco'] ?></td>
				<td> <?= substr($produto['descricao'], 0, 15) ?></td>
				<td> <?= $produto['nome_categoria'] ?></td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<a class="btn btn-primary" href="altera-form-produto.php?id=<?=$produto['id']?>">Alterar</a>
						<button class="btn btn-danger">Remover</button>
					</form>
				</td>

			</tr>
		<?php
	endforeach
?>
</table>
<?php include("rodape.php"); ?>