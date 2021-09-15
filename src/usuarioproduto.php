<?php 

class Usuario
{
    private ?int $id;
    private $nome;
    private $nomeproduto;
    private $senha;
    private $email;

    
    public function __construct(string $id, string $nome, string $nomeproduto, string $senha, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->nomeproduto = $nomeproduto;
        $this->email = $email;
        $this->nome = $senha;

        if ($nome[0] === "") {
            $this->nome = "Nome inválido"; // nome vazio 
        } else {
            $this->nome = $nome; // se viver aceita e atribui
        }

        if ($this->validaEmail($email) !== false) {  // validação de email
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido.");
        }
    }

    public function getSenha() {
        return $this->senha;
    }
    public function getId() {
        return $this->id;
    }
    public function getNome(): string // get para a atribuição e chamadas da função
    {
        return $this->nome;
    }
    public function getNomeProduto(): string // get para a atribuição e chamadas da função
    {
        return $this->nomeproduto;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }
  
  //  VALIDAÇÃO DE EMAIL 
  public function validaEmail(string $email)  // recebe o parametro email
  {
      return filter_var($email, FILTER_VALIDATE_EMAIL); // retorna o email com o seu filtro de validação 
  }
}
?>