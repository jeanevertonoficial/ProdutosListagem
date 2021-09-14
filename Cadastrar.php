<?php include_once("includes/header.php"); ?>
<?php require 'src/config.php'?>
<?php require 'src/funcao.php'?>

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $CadastraCliente = new Cliente($mysql);
    $CadastraCliente->adicionar($_POST['nome'],$_POST['email'],$_POST['usuario'], $_POST['senha']);
}
?>

<section class="cadastrar--main">
    <form action="Cadastrar.php" method="POST">
        <div>
            <label for="nomeSobrenome">Nome</label>
            <input type="text" placeholder="Digite seu nome..." name="nome"  required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" placeholder="Digite seu email..." name="email"  required>
        </div>
        <div>
            <label for="usuario">usuario</label>
            <input type="text" placeholder="Digite seu usuario..." name="usuario"  required>
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" placeholder="Digite sua senha..." name="senha"  required>
        </div>
        <button>Cadastrar</button>
    </form>
</section>

<?php include_once("includes/footer.php"); ?>