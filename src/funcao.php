<?php 

class Cliente 
{

    public function __construct(mysqli $mysql) {
        
        $this->mysql = $mysql;
    }


    public function adicionar(string $nomeproduto, string $categoria, string $subcategoria, string $descricao, string $dataproduto,  string $setor,string $nome): void  
    {
    $cadastro = $this->mysql->prepare('INSERT INTO  produtoscadastrados (nomeproduto, categoria, subcategoria, descricao, dataproduto, setor, nome) VALUES(?,?,?,?,?,?,?);'); /* metodo para fazer a consulta no banco de dados */
    $cadastro->bind_param('sssssss', $nomeproduto, $categoria, $subcategoria, $descricao, $dataproduto, $setor, $nome); /* inserindo no campo consultado */ 
   // var_dump($cadastro);
    $cadastro->execute(); 

    }
    public function exibirTodos(): array
    {
        $result = $this->mysql->query('SELECT * FROM produtoscadastrados;');
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