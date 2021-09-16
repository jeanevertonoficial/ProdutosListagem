<?php include_once("includes/header.php"); ?>
<?php require 'src/config.php' ?>
<?php include_once 'src/funcao.php' ?>
<?php include_once 'src/redireciona.php' ?>
<?php include_once 'src/usuarioproduto.php' ?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadastro = new Cliente($mysql);
    $cadastro->adicionar(
        $_POST['nomeproduto'],
        $_POST['categoria'],
        $_POST['subcategoria'],
        $_POST['descricao'],
        $_POST['dataproduto'],
        $_POST['setor'],
        $_POST['nome']
    );

    //var_dump($cadastro); exit();
    redireciona("produtos.php");
}
?>

<section class="cadastrar--main">
    <form action=" " method="POST">
        </fieldset>
        <fieldset>
            <legend>Nome do Produto</legend>
            <input type="text" placeholder="Nome do produto" name="nomeproduto" required>
        </fieldset>
        <fieldset>
            <legend>Categorias e SubCategorias</legend>
            <select name="subcategoria">
                <option value="sala">Sala</option>
                <option value="quarto">quarto</option>
                <option value="cozinha">Cozinha</option>
                <option value="banheiro">Banheiro</option>
                <option value="outros">Outros</option>
            </select>
            <select name="categoria">
                <option value="acessorios">Acessorios</option>
                <option value="tvs">Tvs</option>
                <option value="sofas">Sofas</option>
                <option value="camas">Camas</option>
                <option value="outros">Outros</option>
            </select>
            <fieldset>
                <legend>Descrição</legend>
                <textarea type="text" placeholder="Digite a descrição" name="descricao" cols="50" rows="10" required>Caixas de papelão 4x18, onduladas firmes...etc </textarea>
            </fieldset>
            <fieldset class="datacadastro">
                <input type="datetime-local" name="dataproduto" placeholder="Dia/Mês/Ano" aria-placeholder="data" data-form-date>
                <legend>Data do cadastro</legend>

            </fieldset>
            <fieldset>
                <p>SETOR
                    <select name="setor" id="">
                        <optgroup label="Administrativo">
                            <option value="administrativo">Administração</option>
                            <option value="Encarregado(a)">Encarregado(a)</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Auxiliar">Auxiliar</option>
                            <option value="Suporte">Suporte</option>
                        </optgroup>
                        <optgroup label="Diretoria">
                            <option value="diretoria">Diretoria</option>
                        </optgroup>
                        <optgroup label="Produção">
                            <option value="producao">Producao</option>
                        </optgroup>
                        <optgroup label="Atendimento">
                            <option value="atendimento">Atendimento</option>
                        </optgroup>
                        <optgroup label="TI Informática">
                            <option value="Desenvolvedor Web">Desenvolvedor Web</option>
                            <option value="Front-end">Front-end</option>
                            <option value="Brack-end">Brack-end</option>
                            <option value="Tester">Tester</option>
                            <option value="Gestão de projeto">Gestão de projeto</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Encarregado">Encarregado</option>
                            <option value="Suporte Tecnico">Suporte Tecnico</option>
                        </optgroup>
                        <optgroup label="Zeladoria">
                            <option value="zelador">Zelador(a)</option>
                        </optgroup>
                    </select>
                </p>
                <legend>Usuario</legend>
                <input type="text" placeholder="Digite seu nome..." name="nome" required>
            </fieldset>
            <button>Cadastrar</button>

    </form>
</section>

<?php include_once("includes/footer.php"); ?>