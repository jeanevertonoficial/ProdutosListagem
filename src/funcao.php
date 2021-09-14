<?php 

class Cliente 
{

    public function __construct(mysqli $mysql) {
        
        $this->mysql = $mysql;
    }


    public function adicionar(string $nome, string $email, string $usuario, string $senha): void
    {
        $CadastrarCliente = $this->mysql->prepare('INSERT INTO Cliente (nome, email, usuario, senha) VALUES (?,?,?,?);');
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

?>