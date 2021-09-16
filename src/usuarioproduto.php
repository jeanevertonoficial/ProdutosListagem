<?php 

class Usuario
{
    private ?int $id;
    private $nomeproduto;
    private $senha;
    private $email;
    private $nome;
    private $categoria;
    private $subcategoria;

    
    public function __construct(string $id, string $nome,string $categoria, string $subcategoria,
     string $nomeproduto, string $senha, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->nomeproduto = $nomeproduto;
        $this->email = $email;
        $this->nome = $senha;
        $this->categoria = $categoria;
        $this->subcategoria = $subcategoria;

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
    public function getCategoria() {
        return $this->categoria;
    }
    public function getSubcategoria() {
        return $this->subcategoria;
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
    private function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }
    private function setSubcategoria(string $subcategoria): void
    {
        $this->subcategoria = $subcategoria;
    }
    
  //  VALIDAÇÃO DE EMAIL 
  public function validaEmail(string $email)  // recebe o parametro email
  {
      return filter_var($email, FILTER_VALIDATE_EMAIL); // retorna o email com o seu filtro de validação 
  }
}
?>