<?php

session_start();
ob_start();

// vendo se o usuario clicou no botão
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if ($btnCadUsuario) {
 include_once '../src/Conexao/config.php';
 //  var_dump($btnCadUsuario); exit();
 $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 //var_dump($dados);
 $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
 $resul_usuario = "INSERT INTO adm(nomesobrenome, email, usuario, senha) VALUES (
                                 '" . $dados['nomesobrenome'] . "',
                                 '" . $dados['email'] . "',
                                 '" . $dados['usuario'] . "',
                                 '" . $dados['senha'] . "'
                                   );";
 $resultado_usuario = mysqli_query($mysql, $resul_usuario);
 if (mysqli_insert_id($mysql)) {
   $_SESSION['msgcad'] = "Cadastrado com Sucesso!";
   header('Location: login.php');
 } else {
   $_SESSION['msg'] = "Erro ao cadastrar novo Administrador!";
 }
} 
   if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['id']) == true))
    {
     unset($_SESSION['id']); 
     unset($_SESSION['usuario']);
     unset($_SESSION['senha']);
     header('location: login.php');
     } 
?>