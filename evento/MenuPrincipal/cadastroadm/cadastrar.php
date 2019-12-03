<?php
session_start();
	include_once("servidor.php");

	if(isset($_GET['enviar'])){
		if(!empty($_GET['nome']) || !empty($_GET['login']) || !empty($_GET['senha'])){
			$nome=$_GET['nome'];
			$login=$_GET['login'];
			$senha=md5($_GET['senha']);


			$comando="INSERT INTO usuarios(nome, login, senha) VALUES ('$nome','$login', '$senha')";
			$enviar=mysqli_query($conn, $comando);
			// echo "Conectado";
			if($enviar){
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location: ../../../backendcriaevento/configuraevento.html");
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
	}else{
		header("location: ../logonAdm/loginmenu.php");
		exit;
	}


?>