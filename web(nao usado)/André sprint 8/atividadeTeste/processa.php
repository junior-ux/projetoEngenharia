<?php

include_once("conexao.php");

$titulo = $_POST['nome'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$vagas = $_POST['vagas'];
$data = $_POST['data'];
$horaini = $_POST['horainicial'];
$horafim = $_POST['horafinal'];
$carga = $_POST['cargahora'];
$local = $_POST['local'];
$convidado = $_POST['convidado'];
$descricao = $_POST['mensagem'];

$sql = "insert into ta_atividade (nome, tipo, valor, vagas, dia, horaini, horafim, carga, lugar, palestrante, descricao) values ('$titulo', '$tipo', '$valor', '$vagas', '$data', '$horaini', '$horafim', '$carga', '$local', '$convidado', '$descricao')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pagina de Atividades</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Administrador</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Pessoas</a></li>
                <li><a href="#"><i class="fas fa-dollar-sign"></i>Vendas</a></li>
                <li><a href="#"><i class=" fas fa-ticket-alt"></i>Inscrições</a></li>
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
                                <a href="#">Área do participante</a> <a href="#">Área do Organizador</a> <a
                                    href="#">Área de Credenciamento</a>
                                <div class="nome">
                        <li>
                            <a href="#">(Nome do ADM)</a>
                        </li>
            </div>
        </div>
        </li>
        </ul>
        </nav>

    </div>

    </div>

    <body>

        <form name="Programacao" action="processa.php" method="POST">

            <br>
            <h1>Atividade</h1><br>

            <?php
                if($linhas == 1){
                    print "Atividade adicionado com sucesso!";
                }else{
                    print "Não foi possivel adicionar essa Atividade!";
                }
            ?>

            <a href="atividadesTabe.php" class="boton">Voltar</a>

        </form>

    </body>

</html>

</body>

</html>