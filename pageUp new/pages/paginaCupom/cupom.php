<?php
session_start();

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:""; 

$sql = "select * from ta_cupom where nome like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cupom</title>
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
                        <a class="nav-link" href="./../paginaCertificado/certificado.php">
                            <h4>Certificados</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaFinanceiro/Financeiro.html">
                            <h4>Financeiro</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cupom.php">
                            <h4>Cupom</h4>
                        </a>
                    </li>

                </ul>

                <form class="form-inline">
                    <a href="./../paginaLogin/login.html" class="btn btn-dark" target="_top">Encerrar sessão</a>
                </form>

            </div>

        </div>

    </nav>

    <!-- BODY -->

    <div class="container">

        <div class="row my-5">
            <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#sitemodal">Criar Cupom</a>
            
            <div class="col-12 text-center my-5">
            <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Cupom(s) Criado(s)</h2>
                        <?php while($exibirCupons = mysqli_fetch_array($consulta)){ ?>
                            <div class="card my-5" style="width: center;">
                                <div class="card-body text-left">
                                    <p class="display-5">Código do cupom: <?php echo $exibirCupons["nome"];?></p>
                                    <p class="display-5">Valor do desconto: <?php echo $exibirCupons["desconto"];?> %</p>
                                    <p class="display-5">Quantidades: <?php echo $exibirCupons["quantidade"];?></p>
                                    <p class="display-5">Validade até: <?php echo date ("d/m/y", strtotime ($exibirCupons["validade"]));?></p>
                                    <div class="pl-4">
                                        <a href="javascript: if(confirm('Tem certeza que deseja EXCLUIR esse Cupom<?php echo $exibirCupons["nome"];?>')) location.href='delete.php?usuario=<?php echo $exibirCupons['id']; ?>';" class="btn btn-dark">Excluir Cupom</a>
                                    </div>                                  
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal-->
    <div class="modal fade" id="sitemodal" tabindex="1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Criando Cupom</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>

                </div>

                <div class="modal-body">
                    <form name="cupom" action="processa.php" method="POST">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" name="nome" maxlength="50" class="form-control" placeholder="Informe o código do seu Cupom">
                        </div>
                        <div class="form-group">
                            <label>Valor do desconto</label>
                            <input type="number" name="desconto" class="form-control" placeholder="%">
                        </div>
                        <div class="form-group">
                            <label>Quantidade</label>
                            <input type="number" name="quantidade" class="form-control" placeholder="Ilimitado">
                        </div>
                        <div class="form-group">
                            <label>Validade</label>
                            <input type="date" name="validade" class="form-control" placeholder="dd/mm/aaaa" required="required">
                        </div>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Sair</button>
                </div>

            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>