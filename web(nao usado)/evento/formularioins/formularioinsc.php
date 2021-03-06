<?php
    session_start();
    require_once ("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo ['mensagem'];
        unset($_SESSION['mensagem']);
    }
    if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])){
        $id=$_SESSION['id'];
        $nome=$_SESSION['nome'];
    }else{
        $_SESSION['mensagem']="Voce nao esta logado!";
        header("location: loginAdm/loginmenu.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Pagina Inicial ADM </title>
	<link rel="stylesheet" href="css\formularioinsc.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="#">
	<link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<div class="wrapper">
		<div class="sidebar">
			<h2>Administrador</h2>
			<ul>
				<li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
				<li><a href="#"><i class="fas fa-user"></i>Pessoas</a></li>
				<li><a href="#"><i class="fas fa-dollar-sign"></i>Vendas</a></li>
				<li><a href="#"><i class="fas fa-ticket-alt"></i>Inscrições</a></li>
				<li><a href="#"><i class="fas fa-calendar"></i>Programação</a></li>
				<li><a href="#"><i class="fas fa-address-book"></i>Certificado</a></li>
				<li><a href="#"><i class="fas fa-desktop"></i>Página do Evento</a></li>
				<li><a href="#"><i class="fas fa-cogs"></i>Configurações</a>
					<!-- Dropdown de Configurações
            	<ul>
            		<li><a href=" # "></a>Evento</li>
            		<li><a href=" # "></a>Organizadores</li>
            		<li><a href=" # "></a>Financeiro</li>
            	</ul>

            </li>
        	-->
			</ul>

		</div>


		<div class="main_content">
			<div class="header">


				<nav class=" menu">
					<ul>
						<li id=>
							<a href="#">Criar Evento </a>
						</li>
						<li>
							<a href="#">Meus Eventos</a>
						</li>

						<li class="dropdown">
							<a class="dropdown-btn" href="#">Área do organizador</a>
							<div class="dropdown-menu">
								<a href="#">Área do participante</a> <a href="#">Área do Organizador</a>
								<a href="#">Área de Credenciamento</a>
								<div class="nome">
						<li>
							<a href="#">(Nome do ADM)</a>
						</li>
						<li class="sair">
						<a href="sair.php">Sair</a>
							<!-- <a href="index.html">Sair</a> -->
						</li>
			</div>
		</div>
		</li>
		</ul>
		</nav>

	</div>
	
	<div class="ins">
		<h2>Formulário de Inscrição</h2>
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link " href="menuAdm.html">Entradas e Valores</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="#">Formúlario de inscrição</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Cupons de desconto</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Configurações</a>
		</li>
		
	</ul>
	<div class="dh3">
	
		<form class="form-inline">
			<h3>Entradas e Valores</h3>
			<div class="form-group mx-sm-3 mb-2">
				<button class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">Pré-visualizar</button>
			</div>
			
	
			<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header text-center">
							<h4 class="modal-title w-100 font-weight-bold">Nova Pergunta</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					
						<div class="a">
							<button type="button" class="btn btn-outline-dark">
								<div class="md-form ">
									<i class="far fa-check-circle grey-text"> Multipla escolha</i>
								</div>
							</button>
							<button type="button" class="btn btn-outline-dark">
								<div class="md-form ">
									<i class="far fa-dot-circle grey-text"> Escolha Unica</i>
								</div>
							</button>
							<button type="button" class="btn btn-outline-dark">
								<div class="md-form ">
									<i class="fas fa-sort-down grey-text"> Lista Suspensa</i>
								</div>
							</button>
						
						</div>
						<div class="b">
								<button type="button" class="btn btn-outline-dark">
									<div class="md-form ">
										<i class="fas fa-sort-down grey-text"> Lista Suspensa</i>
									</div>
								</button>
							</div>
					
						</div>
				</div>
			</div>
	
			<div class="text-center">
				
				<a href="" class="btn btn-primary btn-rounded " data-toggle="modal" data-target="#modalRegisterForm">
					Adicionar Perguntas
				</a>
			</div>
		</form>
	</div>

	<div class="botao">
		<button type="button" class="botao1 btn btn-lg btn-outline-dark">
			<div class="md-form ">
				<i class="fas fa-user prefix grey-text"></i>
				<label data-error="wrong" data-success="right" for="orangeForm-name">Nome Completo</label>
				<small id="passwordHelpBlock" class="form-text text-muted">Obrigatorio</small>
			</div>
		</button>
		<button type="button" class="btn btn-lg btn-outline-dark">
			<div class="md-form ">
				<i class="fas fa-envelope prefix grey-text"></i>
				<label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
				<small id="passwordHelpBlock" class="form-text text-muted">Obrigatorio</small>
			</div>
		</button>
		<button type="button" class="btn btn-lg btn-outline-dark">
			<div class="md-form ">
				<i class="fas fa-user prefix grey-text"></i>
				<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
				<small id="passwordHelpBlock" class="form-text text-muted">Obrigatorio</small>
			</div>
		</button>
		<button type="button" class="btn btn-lg btn-outline-dark">
			<div class="md-form ">
				<i class="fas fa-graduation-cap prefix grey-text"></i>
				<label data-error="wrong" data-success="right" for="orangeForm-name">Formação</label>
				<small id="passwordHelpBlock" class="form-text text-muted">Obrigatorio</small>
			</div>
		</button>

		<button type="button" class="btn btn-lg btn-outline-dark">
			<div class="md-form ">
				<i class="fas fa-school prefix grey-text"></i>
				<label data-error="wrong" data-success="right" for="orangeForm-name">Instituição</label>
				<small id="passwordHelpBlock" class="form-text text-muted">Obrigatorio</small>
			</div>
		</button>

		<button type="button" class="btn btn-lg btn-outline-dark">
			<div class="md-form ">
				<i class="fas fa-mobile-alt prefix grey-text"></i>
				<label data-error="wrong" data-success="right" for="orangeForm-name">Telefone</label>
				<small id="passwordHelpBlock" class="form-text text-muted">Obrigatorio</small>
			</div>
		</button>

	</div>


</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>

</html>