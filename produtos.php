<?php include_once("includes/header.php"); ?>
<?php require_once("src/config.php"); ?>
<?php require_once("src/funcao.php"); ?>
<link rel="stylesheet" href="src/assets/css/listaProduto.css">

<?php
$exibirProdutos = new Cliente($mysql);
$exibirProdutos = $exibirProdutos->exibirTodos();
?>

<main class="main">
    <table>
        <thead>
            <td>ID</td>
            <td>Nome do produto</td>
            <td>Descrição do produto</td>
            <td>Data de entrada</td>
            <td>Categorias e Subs</td>
            <td>Setor</td>
            <td>Nome</td>
            <td>Remover/Alterar?</td>
        </thead>
        <tbody>
            <?php foreach ($exibirProdutos as $exibirProdutos) :  ?>
                <tr>
                    <td>
                        <?php echo $exibirProdutos['id']; ?>
                    </td>
                    <td>
                        <?php echo $exibirProdutos['nomeproduto']; ?>
                    </td>
                    <td>
                        <?php echo $exibirProdutos['descricao']; ?>
                    </td>
                    <td>
                        <?php echo $exibirProdutos['dataproduto']; ?>
                    </td>
                    <td>
                        <?php echo $exibirProdutos['subcategoria'] . " / "; ?>
                        <?php echo $exibirProdutos['categoria']; ?>
                    </td>
                    <td>
                        <?php echo $exibirProdutos['setor']; ?>
                    </td>
                    <td>
                        <?php echo $exibirProdutos['nome']; ?>
                    </td>
                    <td>
                        <a href="removerProduto.php?id=<?php echo $exibirProdutos['id'] ?>">
                            <button class="botoes--editar--excluir" href="removerProduto.php? id=<?php echo $exibirProdutos['id']; ?>">Excluir</button>
                        </a>
                        <button class="botoes--editar--editar" href="editar.php? id=<?php echo $CadastraCliente['id']; ?>">Editar</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include_once("includes/footer.php"); ?>