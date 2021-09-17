<?php
session_start(); // start da sessão 
include_once("../src/config.php");
// recebe o click do botão do formulario login de acesso do administrador
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if ($btnLogin) {
	// recebendo os campo input do formulario de cadastro do adm
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	if ((!empty($usuario)) AND (!empty($senha))) {
			$usuario = mysqli_real_escape_string($mysql, $_POST['usuario']); //funcao protege mysql injection
			$senha = mysqli_real_escape_string($mysql, $_POST['senha']);
		
		// recebendo e passando para a vareavel resultados os dados do banco de dados
		$resultado = "SELECT * FROM  adm WHERE usuario='$usuario' LIMIT 3;";
		$result = mysqli_query($mysql, $resultado);
		//var_dump($result); exit();
		if (mysqli_num_rows($result)) {
			if ($row = mysqli_fetch_assoc($result)) {
				//var_dump($hash, $row);
				if (password_verify($senha, $row['senha'])) {
					$_SESSION['id'] = $row['id'];
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['usuario'] = $row['usuario'];
					$_SESSION['email'] = $row['email'];
					header('Location: produtos.php');
			
			} else {
				header('Location: ../produtos.php');
			}} else {
				$_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente!";
				header("Location: login.php");
				header("Refresh:0");
			}} else {
			$_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente!";
			header("Location: login.php");
			header("Refresh:0");
		}} else {
		$_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente!";
		header("Location: login.php");
		header("Refresh:0");
	}} else {
	$_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente!";
	header("Location: login.php");
	header("Refresh:0");
}
mysqli_close($mysql); 