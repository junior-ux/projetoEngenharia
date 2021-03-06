<?php
    session_start();
    require_once ("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <title>Login</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">

            <!-- <<<<<<< HEAD -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../../Index.php">
                        <h1>PageUp</h1>
                    </a>
                </li>

            </ul>

            <form class="form-inline">
                <a href="./../paginaCadastro/cadastro.php" class="btn btn-dark" target="_top">Cadastre-se</a>
            </form>

        </div>

    </div>

</nav>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-center h-100 mt-5">
            <div class="mt-5">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Entrar</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="valida.php" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="e-mail">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="senha" class="form-control" placeholder="senha">
                            </div>
                            <div class="form-group">
                                <!-- <input type="submit" name="enviar" value="Entrar" class="btn float-right login_btn btn-dark"> -->
                                <button type="submit" name="enviar" class="bt">Entrar </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <a href="#">Esqueceu sua senha?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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