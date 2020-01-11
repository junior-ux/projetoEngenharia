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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <title>Cadastro</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <!-- HEAD -->
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="../../Index.php">
                            <h1>PageUp</h1>
                        </a>
                    </li>

                </ul>

                <form class="form-inline">
                    <a href="../paginaLogin/login.php" class="btn btn-dark" target="_top">Login</a>
                </form>

            </div>

        </div>

    </nav>

    <!-- FORM -->
    <form method="GET" action="cadastrar.php">
    <h1 class="display-4 text-center mt-5 text-white">Cadastre-se<br></h1>
    <div class="container">

        <div class="row">
            <div class="col-12 text-left mt-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Nome completo</label>
                                <input type="name" name="nome" class="form-control" placeholder="Seu nome">
                            </div>

                            <div class="form-group">
                                <label>Endereço de email</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                                    placeholder="Seu email">
                            </div>

                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="senha"  placeholder="Senha">
                            </div>

                            <div class="form-group">
                                <label>CPF completo</label>
                                <input ui-mask="999.999.999-99" name="cpf" type="number" class="form-control"
                                    placeholder="___.___.___-__">
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Concordo com os <a
                                        href="#">Termos</a> e
                                    <a href="#">Condições</a> de uso</label>
                            </div>
                            <input type="submit" name="enviar" class="bt" value="Cadastrar"> </input>
                            <!-- <a href="./../PaginaPagamento/paginaPag.html" class="btn btn-dark">Cadastrar</a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

<footer class="page-footer font-small teal pt-4">
    <div class="container mt-5">
        <div class="d-flex justify-content-center h-100 mt-5">
            <div class="mt-5">
                <div>
                    <div class="footer-copyright text-center py-3 text-white">© 2019 Copyright:
                        <a href="#"> PageUp.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>