<?php
session_start();

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:""; 

$sql = "select * from ta_local where nome like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Local</title>
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
                        <a class="nav-link" href="./../paginaCertificado/certificado.html">
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
            <div class="pl-4">
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#modalLocal">Adicionar Local</a>
            </div>
            <div class="col-12 text-center my-5">
                <?php
                if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Local(is) adicionado(s)</h2>
                        <?php while($exibirlocais = mysqli_fetch_array($consulta)){ ?>
                            <div class="card my-5" style="width: center;">
                                <div class="card-body text-left">
                                    <p class="display-5">Local: <?php echo $exibirlocais['nome'] ?></p>
                                    <div class="pl-4">
                                        <a href="javascript: if(confirm('Tem certeza que deseja EXCLUIR o Local <?php echo $exibirlocais["nome"];?>')) location.href='delete.php?usuario=<?php echo $exibirlocais['id']; ?>';" class="btn btn-dark">Excluir Local</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!--modal local-->
        <div class="modal fade" id="modalLocal" tabindex="1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Adicionando Local</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form name="cupom" action="processaLocal.php" method="POST">
                            <div class="form-group">
                                <div class="form-group my-3">
                                    <label>Nome do Local</label>
                                    <input type="codigo" name="nome" maxlength="50" class="form-control" placeholder="Informe o nome do local">
                                </div>
                                <button type="submit" class="btn btn-dark">Adicionar</button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Sair</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Modal Atividade-->


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>