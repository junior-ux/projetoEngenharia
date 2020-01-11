<?php
session_start();
	include_once("servidor.php");

	if(isset($_GET['enviar'])){
	


	 	if(!empty($_GET['nome']) || !empty($_GET['login']) || !empty($_GET['senha']) || !empty($_GET['cpf']))
			
		{


			$nome = $_GET["nome"];
			
			$login = $_GET["login"];
			$senha = md5($_GET["senha"]);
			$cpf = $_GET["cpf"];
			
			




			$comando="INSERT INTO  login_page (nome, login, senha, cpf) VALUES ('$nome', '$login', '$senha', '$cpf')";
	
			$enviar=mysqli_query($conn, $comando);
			// echo "Conectado";
			if($enviar){
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location: ../loginusuario/loginusuario.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar";
				header("location: cadastroadm.php");
				exit;
			}
		}else{
			$_SESSION['mensagem']="Alguns campos em brancos";
			header("location: cadastroadm.php");
			exit;
		}
	}	
	else{
		header("location: ../logonAdm/loginmenu.php");
		exit;
	}


?>