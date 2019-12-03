<?php
	session_start();
	include_once('servidor.php');

	if(isset($_POST['enviar'])){
		if(!empty($_POST['login']) || !empty($_POST['senha'])){
			$login = $_POST['login'];
			$senha = md5($_POST['senha']);

			$comando = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
			$enviar = mysqli_query($conn, $comando);
			$resultado = mysqli_fetch_assoc($enviar);
			if ($resultado) {
				$_SESSION['nome'] = $resultado['nome'];
				$_SESSION['id'] = $resultado['id'];
				header("location: logado/");
				exit;
			}else{
				$_SESSION['mensagem'] = "Login ou senha incorreta";
				header("location:index.php");
				exit;
			}
			
			}else{
				$_SESSION['mensagem'] = "Algum campo em branco";
				header("location: index.php");
				exit;

			}
			}else{
				header("location: index.php");
				exit;
			}


?>