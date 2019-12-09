<?php
session_start();
	include_once("servidor.php");

	if(isset($_GET['enviar'])){
	


	 	if(!empty($_GET['nome']) || !empty($_GET['sobrenome']) || !empty($_GET['login']) || !empty($_GET['cpf']) || !empty($_GET['telefone']) || !empty($_GET['cep']) || !empty($_GET['estado']) || !empty($_GET['cidade']) || !empty($_GET['instituicao']) || !empty($_GET['curso']) || !empty($_GET['matricula']) || !empty($_GET['bloco']) || !empty($_GET['senha']))
			
		{


			$nome = $_GET["nome"];
			$sobrenome = $_GET ["sobrenome"];
			$login = $_GET["login"];
			$cpf = $_GET["cpf"];
			$telefone = $_GET["telefone"];
			$cep = $_GET["cep"];
			$estado = $_GET["estado"];
			$cidade = $_GET["cidade"];
			$instituicao = $_GET["instituicao"];
			$curso = $_GET["curso"];
			$matricula = $_GET["matricula"];
			$bloco = $_GET["bloco"];
			$senha = md5($_GET["senha"]);




			$comando="INSERT INTO inscusuario (nome, sobrenome, login, cpf, telefone, cep, estado, cidade, instituicao, curso, matricula, bloco, senha) VALUES ('$nome', '$sobrenome', '$login', '$cpf', '$telefone', '$cep', '$estado', '$cidade', '$instituicao', '$curso', '$matricula', '$bloco', '$senha')";
	
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
	}	
	else{
		header("location: ../logonAdm/loginmenu.php");
		exit;
	}


?>