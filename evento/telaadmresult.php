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
        header("location: ");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagina Inicial ADM </title>
    <link rel="stylesheet" href="css/telaadm.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h3>Administrador</h3>
            <ul>
                <li><a href="telaadm.html"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Pessoas</a></li>
                <li><a href="#"><i class="fas fa-dollar-sign"></i>Vendas</a></li>
                <li><a href="menuAdm.html"><i class=" fas fa-ticket-alt active"></i>Inscrições</a></li>
                <li><a href="#"><i class="fas fa-calendar"></i>Programação</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Certificado</a></li>
                <li><a href="#"><i class="fas fa-desktop"></i>Página do Evento</a></li>
                <div class="dropdown">
                      
                <li><a href="configuraevento.html"><i class="fas fa-cogs" data-toggle="dropdown" ></i>Configurações</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="configuraevento.html">Evento</a>
                        <a class="dropdown-item" href="#">Organização</a>
                        <a class="dropdown-item" href="#">Financeiro</a>
                    </div>                        
            	<!-- <ul>
            		<li><a href=" # "></a>Evento</li>
            		<li><a href=" # "></a>Organizadores</li>
            		<li><a href=" # "></a>Financeiro</li>
            	</ul> -->

            </li>
                </div>
            </ul>

        </div>
        <div class="main_content">
            <div class="header">


                <nav class=" menu">
                    <ul>
                        <li id=>
                            <a href="criaevento.html">Criar Evento </a>
                        </li>
                        <li>
                            <a href="#">Meus Eventos</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-btn" href="#">Área do organizador</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Área do participante</a> 
                                <a class="dropdown-item" href="#">Área do Organizador</a> 
                                <a class="dropdown-item" href="#">Área de Credenciamento</a>
                            </div>
                                <div class="nome">
                                    <li>
                                        <a href="#">(Nome do ADM)</a>
                                    </li>
                                    <li class="sair">
							
                                        <a href="index.html">Sair</a>
                                    </li>
                                </div>
                            
                        </li>
                    </ul>
                </nav>
                

                  


                      <!--   $result_usuario = "SELECT nome, email, cpf, telefone, cep, estado, cidade, instituicao, curso, matricula, bloco FROM inscusuario";
                        $resultado_usuario = mysqli_query($conn, $result_usuario);

                        $row_usuario = mysqli_fetch_assoc($resultado_usuario)

                        if(!empty($row_usuario)){
                            $_SESSION["nome"] = $row_usuario["nome"];
                            $_SESSION["email"] = $row_usuario["email"];


                    } -->



                    
                    <h4>Bem vindo <?=$nome?></h4>

                    <a href="telaadm.php"> <input type="submit" name="editar" value="Editar Perfil"></a>
               
                
            </div>

        </div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>