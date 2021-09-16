<?php include_once("includes/header.php"); ?>
<?php require 'src/config.php' ?>
<?php require 'src/funcao.php' ?>
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
    <form action="" method="POST">
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
                        <optgroup name="setor" label="Administrativo">
                            <option name="setor" value="administrativo">Administração</option>
                            <option name="setor" value="Encarregado(a)">Encarregado(a)</option>
                            <option name="setor" value="Gerente">Gerente</option>
                            <option name="setor" value="Auxiliar">Auxiliar</option>
                            <option name="setor" value="Suporte">Suporte</option>
                        </optgroup>
                        <optgroup name="setor" label="Diretoria">
                            <option name="setor"value="diretoria">Diretoria</option>
                        </optgroup>
                        <optgroup name="setor" label="Produção">
                            <option name="setor" value="producao">Producao</option>
                        </optgroup>
                        <optgroup name="setor" label="Atendimento">
                            <option name="setor" value="atendimento">Atendimento</option>
                        </optgroup>
                        <optgroup name="setor" label="TI Informática">
                            <option name="setor" value="Desenvolvedor Web">Desenvolvedor Web</option>
                            <option name="setor" value="Front-end">Front-end</option>
                            <option name="setor" value="Brack-end">Brack-end</option>
                            <option name="setor" value="Tester">Tester</option>
                            <option name="setor" value="Gestão de projeto">Gestão de projeto</option>
                            <option name="setor" value="Gerente">Gerente</option>
                            <option name="setor" value="Encarregado">Encarregado</option>
                            <option name="setor" value="Suporte Tecnico">Suporte Tecnico</option>
                        </optgroup>
                        <optgroup name="setor" label="Zeladoria">
                            <option name="setor" value="zelador">Zelador(a)</option>
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