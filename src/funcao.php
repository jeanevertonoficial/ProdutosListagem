<?php 

class Cliente 
{

    public function __construct(mysqli $mysql) {
        
        $this->mysql = $mysql;
    }
    public function adicionar(string $nomeproduto,string $descricao, string $dataproduto, string $nome): void  
    {
    $cadastro = $this->mysql->prepare('INSERT INTO  produtoscadastrados(nomeproduto, descricao, dataproduto, nome) VALUES(?,?,?,?);'); /* metodo para fazer a consulta no banco de dados */
    $cadastro->bind_param('ssss', $nomeproduto, $descricao, $dataproduto, $nome); /* inserindo no campo consultado */ 
    $cadastro->execute(); 
    }
    public function exibirTodos(): array
    {
        $result = $this->mysql->query('SELECT * FROM produtoscadastrados ORDER BY id ASC, dataproduto ASC, nomeproduto ASC;');
        $produtos = $result->fetch_all(MYSQLI_ASSOC); 
        return $produtos;

    }
    public function remover(string $id): void
    {
        $removerCliente = $this->mysql->prepare('DELETE FROM produtoscadastrados WHERE id = ?;');
        $removerCliente->bind_param('s', $id);
        $removerCliente->execute();
    }

}
?>