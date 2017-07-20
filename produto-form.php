<?php
	require_once("cabecalho.php");
	require_once("banco-categoria.php");
	require_once("logica-usuario.php");

verificaUsuario();

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao);
?>

<h1> Formalário de produto</h1>
<form action="adiciona-produto.php" method="post">

	<table class="table">

		<?php include("formulario-produto.php"); ?>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="Cadastrar"></td>
		</tr>
	</table>

</form>
<?php include("rodape.php")?>
