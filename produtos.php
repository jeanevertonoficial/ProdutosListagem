<?php include_once("includes/header.php"); ?>
<?php require_once("src/config.php"); ?>
<?php require_once("src/funcao.php"); ?>
<link rel="stylesheet" href="src/assets/css/listaProduto.css">

<?php

$exibirProdutos = new Cliente($mysql);
$exibirProdutos = $exibirProdutos->exibirTodos();

?>

<main class="main">
    <section class="section--produto">
        <?php foreach ($exibirProdutos as $exibirProdutos) :  ?>
            <div class="listaProduto">
                <nav class="navProdutos">
                    <div>
                        <label for="Nome">
                            <h5>Nome do produto</h5>
                            <hr>
                            <?php echo "ID : " . $exibirProdutos['id']; ?>
                            <?php echo $exibirProdutos['nomeproduto']; ?>
                        </label>

                    </div>
                    <div>
                        <label for="descricao">
                            <h5>Descrição do produto</h5>
                            <hr>
                            <?php echo $exibirProdutos['descricao']; ?>
                        </label>
                    </div>
                    <div>
                        <label for="Nome">
                            <h5>Data de entrada</h5>
                            <hr>
                            <?php echo $exibirProdutos['dataproduto']; ?>
                        </label>
                    </div>
                    <div>
                        <label for="">
                            <h5>Remover/Alterar?</h5>
                            <a href="removerProduto.php?id=<?php echo $exibirProdutos['id'] ?>">
                                <button class="botoes--editar--excluir" href="removerProduto.php? id=<?php echo $CadastraCliente['id']; ?>">Excluir</button>
                            </a>
                            <button class="botoes--editar--editar" href="editar.php? id=<?php echo $CadastraCliente['id']; ?>">Editar</button>
                        </label>
                    </div>
                </nav>
                <hr>
            </div>

        <?php endforeach ?>
    </section>
</main>

<?php include_once("includes/footer.php"); ?>