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
<html>
<head>
    <title>Copia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="estilo/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
    <div class="ini">
        <div class="barra">
            <a href="loginAdm/loginmenu.html" class="login">Login</a>
            <a href="#" class="evento">Criar Evento</a>
            <a href="#" class="">Sobre nós</a>
            <a href="#" class="">Duvidas</a>
            <a href="#" class="">Informações</a>
            <a href="MenuPrincipal.html" class="logo" style="float: left"><img src="imagens/PGE (1).png" width="90" height="35" alt=""></a>
        </div>
    </div>
    
    
     <header>
        <h1 class="">Plataforma de Gerenciamento de Eventos</h1>
        <h2 class="">Uma forma fácil e simples de gerenciar eventos</h2>
    </header>
    <div>
    <h4>Bem vindo(a), <?=$nome?>.</h4>
    <a href="sair.php"><button>Sair</button></a>
    </div>

    <!-- <div class="linha">
        <div class="card">
            <h2>Objetivo</h2>
            <div class="fakeimg" style="height:100px;">A plataforma está sendo desenvolvida com o objetivo de satisfazer os requisitos de um trabalho universitário</div>
        </div>
        <h2>Contribuidores</h2>
        <div class="row">
            
            <div class="column">
                <a href="https://github.com/AndreLuis6" target="_blank">André Luís</a>
            </div>

            <div class="column">
                <a href="https://github.com/edileysonsilva" target="_blank">Edileyson Silva</a>
            </div>

            <div class="column">
                <a href="https://github.com/igoraalves" target="_blank">Igor Alves</a>
            </div>

            <div class="column">
                    <a href="https://github.com/marcelobgs" target="_blank">Marcelo Barros</a>
            </div>

            <div class="column">
                    <a href="https://github.com/junior-ux" target="_blank">Narciso Júnior</a>
            </div>
        </div>
    </div>

    </div>

    <div class="midias">
        Mídias sociais no futuro
    </div>

    <footer>
        Todos os direitos reservados ©
    </footer> -->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>