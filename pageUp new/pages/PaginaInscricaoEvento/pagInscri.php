<?php
    session_start();
    include_once("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }

    // if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])){
    //     $id=$_SESSION['id'];
    //     $nome=$_SESSION['nome'];
    // }else{
    //     $_SESSION['mensagem']="Voce nao esta logado!";
    //     header("location: ../loginusuario/loginusuario.php");
    //     exit;
    // }    
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página Site</title>
    <meta charset="UTF-8">
    <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <div class="container">

            <a href="./../PaginaFinal/pag1.html" class="logo" style="float: left"><img src="./../PaginaFinal/imgs/logoSite.svg" width="90"
                    height="45" alt=""></a>

            <h4>PageUp</h4>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>

                    </li>

                </ul>

                <form class="form-inline">
                    <a href="../loginusuario/loginusuario.php" class="btn btn-dark">Login</a>
                </form>

            </div>

        </div>

    </nav>

    <!--Botão voltar-->
    <!--<input type="button" class= "btn btn-success my-5 pr-2" value="Voltar" onClick="history.go(-1)">-->

    <div class="container">

        <div class="row">
            <div class="col-12 text-left my-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h1 class="display-5">"Nome do evento"<br></h1>
                        <p><b>Tipo de Inscrição:</b> </p>
                        <p><b>Valor da Inscrição:</b> R$ </p>

                    </div>
                </div>

            </div>

        </div>


        <form method="get" action="cadastrar.php">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="name" class="form-control" name="nome" required="" placeholder="Seu nome">
            </div>

            <div class="form-group">
                <label>Endereço de email</label>
                <input type="email" class="form-control" required="" name="login" aria-describedby="emailHelp" placeholder="Seu email">
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" required="" name="senha" class="form-control" placeholder="Senha">
            </div>

            <div class="form-group">
                <label>CPF completo</label>
                <input type="text" name="cpf" required="required" placeholder="000.000.000-00" maxlength="11" class="form-control" onblur="return verificarCPF(this.value)"/>
              <!--   <input ui-mask="999.999.999-99" name="cpf" maxlength="11" type="text" required="" class="form-control" placeholder="___.___.___-__"> -->
            </div>

            <div class="form-group form-check">
                <input required="" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Concordo com os <a href="#">Termos</a> e 
                    <a href="#">Condições</a> de uso</label>
            </div>
            <input type="submit" name="enviar" class="bt" value="Cadastrar"> </input>
            <!-- <a href="./../PaginaPagamento/paginaPag.html" class="btn btn-dark">Enviar</a> -->
        </form>

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

<footer class="page-footer font-small teal pt-4">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> PageUp.com</a>
    </div>

</footer>

</html>