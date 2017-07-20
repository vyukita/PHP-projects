<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("banco-categoria.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
// verifica se o checkbox usado está marcado ou não
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
    <h1>Alterando produto</h1>
    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">

           <?php include("formulario-produto.php"); ?>

            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
