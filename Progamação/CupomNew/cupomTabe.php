<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:""; 

$sql = "select * from ta_cupom where nome like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Pagina de Cupons</title>
	<link rel="stylesheet" href="css/estilo.css" <script src="https://kit.fontawesome.com/b99e675b6e.js">
	</script>
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

							<a href="index.html">Sair</a>
						</li>
			</div>
		</div>
		</li>
		</ul>
		</nav>

	</div>

	<div class="programacao">


    <div class="programacao">


        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link"
                    href="../atividade/atividadeTabe.php">Atividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="../ConvidadoNovo/convidadoTabe.php">Convidado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="../SalaNovo/tabela.php">Local</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"
                    href="../CupomNew/cupomTabe.php">Cupons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="">Configurações</a>
            </li>

        </ul>
        <br>
		
		<form method="get" action="">
			Pesquise seu cupom pelo código: <input type="text" name="filtro" class="campo" required autofocus>
			<input type="submit" value="pesquisar" class="btn">
		</form>
		<br>

		<div class="btn-group">

			<a class="button" href="cupom.php">Adicionar Cupons</a><br>
			<a class="button" href="cupomTabe.php">Todos os cupons</a>

		</div>
		</br>
		<table id="customers">
			<tr>
				<th>ID</th>
				<th>Codigo</th>
				<th>Desconto</th>
				<th>Quantidade</th>
				<th>Validade</th>
				<th>Ação</th>
			</tr>

			<?php while($exibirCupons = mysqli_fetch_array($consulta)){ ?>
                    <tr>
                        <td><?php echo $exibirCupons["id"];?></td>
                        <td><?php echo $exibirCupons["nome"];?></td>
                        <td><?php echo $exibirCupons["desconto"];?> %</td>
                        <td><?php echo $exibirCupons["quantidade"];?></td>
                        <td><?php echo date ("d/m/y", strtotime ($exibirCupons["validade"]));?></td>
                        <td><a href="javascript: if(confirm('Tem certeza que deseja deletar o cupom <?php echo $exibirCupons["nome"];?>')) location.href='delete.php?usuario=<?php echo $exibirCupons['id']; ?>';">Excluir</a> <a href="javascript: if(confirm('Tem certeza que deseja deletar o cupom <?php echo $exibirCupons["nome"];?>')) location.href='editar.php?usuario=<?php echo $exibirCupons['id']; ?>';">Editar</a>
                        </td>
                    </tr>
            <?php } ?>

		</table>

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