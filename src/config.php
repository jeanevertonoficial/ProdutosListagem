<?php 

$mysql = new mysqli('localhost', 'root','','cadastroprodutos') or die ("Erro ao Conectar ao banco de dados");

if($mysql == true) {
}else {
    echo "Erro ao conectar ao banco de dados, tente novamente!";
}
?>