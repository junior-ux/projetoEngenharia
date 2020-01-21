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
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">

    <link rel="stylesheet" type="text/css" href="loginAdm/css/loginmenu.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <div class="container">
<!-- <<<<<<< HEAD
======= -->

           <!-- <a href="pag1.html" class="logo" style="float: left"><img src="imgs/logoSite.svg" width="90" height="45"alt=""></a> -->

          <!--   <h4>PageUp</h4> -->


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">


                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="../PaginaFinal/pag1.html"><h1>PageUp</h1></a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
<div class="background">
    <div class="superior">

        <div class="container">
                    
                    <div class="home-content">

                        <div class="login-form">
                            <form action="valida.php" method="POST">
                                   
                                <h2 class="text-center">Login</h2>
                                <!-- verificar se esta vazio -->
                               
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fas-user"></i></span>
                                            <input type="text" name="login" class="form-control" placeholder="Username" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="senha" class="form-control" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="../../telaadm.html">
                                        <button type="submit" name="enviar" class="bt">Entrar </button></a>
                                        

                                    </a>
                                </div>
                                <div class="clearfix">
                                    <label class="pull-left checkbox-inline"><input type="checkbox"> Lembrar</label>
                                    <a href="#" class="pull-right">Esqueceu a senha?</a>
                                    <p>Não tem uma conta! <a href="../PaginaInscricaoEvento/pagInscri.php">Cadraste-se</a>.</p>
                                </div>
                            </form>
                            
                            </div>

                    </div>
                <!-- </div> -->


        </div>


    </div>
</div>




    

    
    

            <script src="node_modules/jquery/dist/jquery.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> PageUp.com</a>
    </div>

</footer>

</html>