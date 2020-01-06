<?php
session_start();
	include_once("servidor.php");

	if(isset($_GET['enviar'])){
	


	 	if(!empty($_GET['nome']) || !empty($_GET['email']) || !empty($_GET['senha']) || !empty($_GET['cpf']))
			
		{


			$nome = $_GET["nome"];
			
			$email = $_GET["email"];
			$senha = md5($_GET["senha"]);
			$cpf = $_GET["cpf"];
			
			




			$comando="INSERT INTO  tab_log_user (nome, email, senha, cpf) VALUES ('$nome', '$email', '$senha', '$cpf')";
	
			$enviar=mysqli_query($conn, $comando);
			// echo "Conectado";
			if($enviar){
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location: ../paginaLogin/login.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar";
				header("location: cadastro.php");
				exit;
			}
		}else{
			$_SESSION['mensagem']="Alguns campos em brancos";
			header("location: cadastro.php");
			exit;
		}
	}	
	else{
		header("location: ../paginaLogin/login.php");
		exit;
	}


?>