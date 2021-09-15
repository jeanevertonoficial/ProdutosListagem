<?php include_once("includes/header.php"); ?>
<?php require 'src/config.php'?>
<?php include_once 'src/funcao.php'?>
<?php include_once 'src/redireciona.php'?>
<?php include_once 'src/usuarioproduto.php'?>

<?php 
//var_dump($_POST); exit();
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
     $cadastro = new Cliente ($mysql);
     $cadastro->adicionar($_POST['nomeproduto'], $_POST['descricao'], $_POST['dataproduto'], $_POST['nome']);
     //var_dump($cadastro); exit();
     redireciona("produtos.php");
}
?>

<section class="cadastrar--main">
    <form action="Cadastrar.php" method="POST">
        <fieldset>
            <label for="nomeproduto">Nome</label>
            <input type="text" placeholder="Nome do produto" name="nomeproduto"  required>
        </fieldset>
        <fieldset>
            <label for="descricao">Descrição</label>
            <textarea type="text" placeholder="Digite a descrição" name="descricao"  cols="50" rows="10" required>Caixas de papelão 4x18, onduladas firmes...etc </textarea>
        </fieldset>
        <fieldset class="datacadastro">
            <input type="datetime-local" name="dataproduto"  placeholder="Dia/Mês/Ano"
                aria-placeholder="data" data-form-date>
            <legend>Data do cadastro</legend>

        </fieldset>
        <fieldset>
            <label for="nome">Usuario</label>
            <input type="text" placeholder="Digite seu nome..." name="nome"  required>
        </fieldset>
        <button >Cadastrar</button>
       
    </form>
</section>

<?php include_once("includes/footer.php"); ?>