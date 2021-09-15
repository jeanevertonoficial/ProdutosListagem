<?php 

class Cliente 
{

    public function __construct(mysqli $mysql) {
        
        $this->mysql = $mysql;
    }


    public function adicionar(string $nome, string $email, string $usuario, string $senha): void
    {
        $CadastrarCliente = $this->mysql->prepare('INSERT INTO `cliente` (`nome`, `email`, `usuario`, `senha`) VALUES (?,?,?,?);');
       var_dump($CadastrarCliente); exit();
        $CadastrarCliente->bind_param('ssss', $nome, $email, $usuario, $senha);
        $CadastrarCliente->execute(); 
        
    }
    public function exibirTodos(): array
    {
        $result = $this->mysql->query('SELECT * FROM Cliente ORDER BY nome ASC, id DESC;');
        $produtos = $result->fetch_all(MYSQLI_ASSOC); 
        return $produtos;

    }
}

// vendo se o usuario clicou no botão
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if ($btnCadUsuario) {
 include_once 'src/config.php';
 //  var_dump($btnCadUsuario); exit();
 $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 //var_dump($dados);
 $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
 $resul_usuario = "INSERT INTO cliente(nome, email, usuario, senha) VALUES (
                                 '" . $dados['nome'] . "',
                                 '" . $dados['email'] . "',
                                 '" . $dados['usuario'] . "',
                                 '" . $dados['senha'] . "'
                                   );";
 $resultado_usuario = mysqli_query($mysql, $resul_usuario);
 if (mysqli_insert_id($mysql)) {
   $_SESSION['msgcad'] = "Cadastrado com Sucesso!";
   header('Location: cadastrar.php');
 } else {
   $_SESSION['msg'] = "Erro ao cadastrar novo Administrador!";
 }
} /*
   if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['id']) == true))
    {
     unset($_SESSION['id']); 
     unset($_SESSION['usuario']);
     unset($_SESSION['senha']);
     header('location: cadastrar.php');
     } 
*/

?>