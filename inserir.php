<?php include_once('src/config.php') ?>
<?php


// vendo se o usuario clicou no botão
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
if ($nome) {
    //  var_dump($btnCadUsuario); exit();
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);

    $resul_usuario = "INSERT INTO produtoscadastrados(*) VALUES (
                                 '" . $dados['nomeproduto'] . "',
                                 '" . $dados['categoria'] . "',
                                 '" . $dados['subcategoria'] . "',
                                 '" . $dados['descricao'] . "'
                                 '" . $dados['dataproduto'] . "'
                                 '" . $dados['nome'] . "'
                                   );";
    $resultado_usuario = mysqli_query($mysql, $resul_usuario);
    if (mysqli_insert_id($mysql)) {
        $_SESSION['msgcad'] = "Cadastrado com Sucesso!";
        header('Location: produtos.php');
    } else {
        $_SESSION['msg'] = "Erro ao cadastrar novo Administrador!";
    }
}


?>