<?php

include_once("conexao.php");

$titulo = $_POST['titulo'];
$link   = $_POST['link'];
$dataI  = $_POST['dataI'];
$horaI  = $_POST['horaI'];
$dataT  = $_POST['dataT'];
$horaT  = $_POST['horaT'];
$local  = $_POST['local '];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$responsavel = $_POST['responsavel'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];
$cargaHoraria = $_POST['cargaHoraria'];

$sql = "insert into inscricaoevento (titulo,link,inicio,horaI, termino, horaT, local, estado, cidade, responsavel, email, telefone, descricao, cargaHoraria) values ('$titulo', '$link', '$dataI', '$horaI', '$dataT', '$horaT', '$local', '$estado', '$cidade', '$responsavel', '$email', '$telefone','$descricao' , '$cargaHoraria')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pagina de Eventos</title>
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

        <form name="evento" action="processamento.php" method="POST" action="">

            <br>
            <h1>Eventos</h1><br>

            <?php
                if($linhas == 1){
                    print "Evento inserido com sucesso!";
                }else{
                    print "Evento NÃO inserido. <br> Já existe um Evento com esse nome!";
                }
            ?>

            <a href="inscricaoEvento.php" class="boton">Voltar</a>

        </form>

    </body>

</html>

</body>

</html>