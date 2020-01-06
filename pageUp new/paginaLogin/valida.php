<?php
	session_start();
	include_once('servidor.php');

	if(isset($_POST['enviar'])){
		if(!empty($_POST['email']) || !empty($_POST['senha'])){
			$login = $_POST['email'];
			$senha = md5($_POST['senha']);

			$comando = "SELECT * FROM tab_log_user WHERE email = '$email' and senha = '$senha'";
			$enviar = mysqli_query($conn, $comando);
			$resultado = mysqli_fetch_assoc($enviar);
			if ($resultado) {
				$_SESSION['nome'] = $resultado['nome'];
				$_SESSION['id'] = $resultado['id'];
				// header("location: ../../../MenuCompleto/InicialADM.html");
				header("location: ../PaginaPagamento/paginaPag.php");
				exit;
			}else{
				$_SESSION['mensagem'] = "Login ou senha incorreta";
				header("location: login.php");
				exit;
			}
			
			}else{
				$_SESSION['mensagem'] = "Algum campo em branco";
				header("location: login.php");
				exit;

			}
			}else{
				header("location:  login.php");
				exit;
			}


?>