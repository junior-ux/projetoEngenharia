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
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/loginmenu.css">
    <!-- <link rel="stylesheet" href="css/Style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="ini">
        <div class="barra">
            <a href="loginmenu.php" class="login">Login</a>
            <a href="../cadastroadm/cadastroadm.php" class="evento">Criar Evento</a>
            <a href="#" class="">Sobre nós</a>
            <a href="#" class="">Duvidas</a>
            <a href="#" class="">Informações</a>
            <a href="../../../Index.html" class="logo" style="float: left"><h1>PageUp</h1></a>
        </div>
    </div>
    </div>

    <!-- <div class="container">  -->

            <!-- <div class="row"> -->
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
                                </div>
                            </form>
                            <p class="text-center small">Não tem uma conta! <a href="../cadastroadm/cadastroadm.php">Cadraste-se</a>.</p>
                            </div>

                    </div>
                <!-- </div> -->


        </div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>