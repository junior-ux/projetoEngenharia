<?php
session_start();

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:""; 

$sql = "select * from ta_convidado where nome like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Convidado</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <!-- <<<<<<< HEAD -->
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item  pr-5">
                        <a class="nav-link" href="./../paginaInicialAdm/inicialAdm.html">
                            <h1>PageUp</h1>
                        </a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link" href="./../paginaAtividades/Atividades.php">
                            <h4>Atividades</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h4>Certificados</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaFinanceiro/Financeiro.html">
                            <h4>Financeiro</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaCupom/cupom.php">
                            <h4>Cupom</h4>
                        </a>
                    </li>

                </ul>

                <form class="form-inline">
                    <a href="./../../login.html" class="btn btn-dark" target="_top">Encerrar sessão</a>
                </form>

            </div>

        </div>

    </nav>

    <!-- BODY -->

    <div class="container">

        <div class="row my-5">
            <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#modalConvidado">Adicionar Convidado</a>
            <div class="col-12 text-center my-5">
                <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Convidado(s) adicionado(s)</h2>
                        <?php while($exibirConvidados = mysqli_fetch_array($consulta)){ ?>
                            <div class="card my-5" style="width: center;">
                                <div class="card-body text-left">
                                    <p class="display-5">Nome: <?php echo $exibirConvidados["nome"];?></p>
                                    <p class="display-5">e-mail: <?php echo $exibirConvidados["email"];?></p>
                                    <p class="display-5">formação: <?php echo $exibirConvidados["cargo"];?></p>
                                    <p class="display-5">Mais informações: <?php echo $exibirConvidados["bibliografia"];?><a></p>
                                    <div class="pl-4">
                                        <a href="javascript: if(confirm('Tem certeza que deseja EXCLUIR o Convidado<?php echo $exibirConvidados["nome"];?>')) location.href='delete.php?usuario=<?php echo $exibirConvidados['id']; ?>';" class="btn btn-dark">Excluir Convidado</a>
                                    </div>                                  
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Atividade-->
        <div class="modal fade" id="modalConvidado" tabindex="1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Adicionando Convidado</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form name="convidado" action="processa.php" method="POST">
                            <div class="form-group">
                                <div class="form-group my-3">
                                    <label>Nome do Convidado</label>
                                    <input type="text" class="form-control" name="nome" maxlength="60" placeholder="Informe o nome do convidado" required="required">
                                </div>
                                <div class="form-group my-3">
                                    <label>Formação do convidado</label>
                                    <input type="text" class="form-control" name="formacao" maxlength="40" placeholder="Informe a formação do convidado" required="required">                                    
                                </div>
                                <div class="form-group my-3">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email" maxlength="60" placeholder="Informe o e-mail do convidado" required="required">
                                </div>
                                <div class="form-group my-3">
                                    <label>Mais informações</label>
                                    <textarea name="mensagem" class="form-control" maxlength="200" placeholder="Informe mais informações"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark">Adicionar</button>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Sair</button>
                    </div>

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

</html>