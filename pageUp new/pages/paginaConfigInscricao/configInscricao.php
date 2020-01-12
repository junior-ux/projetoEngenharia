<?php
session_start();

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:""; 

$sql = "select * from ta_entradas";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Configuração</title>
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
            <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#sitemodal">Adicionar Entrada</a>
            <div class="col-12 text-center my-5">
            <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Tipo de Inscrições</h2>
                        <?php while($exibirEntradas = mysqli_fetch_array($consulta)){ ?>
                            <div class="card my-5" style="width: center;">
                                <div class="card-body text-left">
                                    <p class="display-5">Tipo de inscrição: <?php echo $exibirEntradas["categoria"];?></p>
                                    <p class="display-5">Valor da inscrição: R$ <?php echo $exibirEntradas["valor"];?></p>
                                    <p class="display-5">Quantidade: <?php echo $exibirEntradas["quantidade"];?></p>
                                    <p class="display-5">Validade inicial: <?php echo date ("d/m/Y", strtotime ($exibirEntradas["validadeini"]));?></p>
                                    <p class="display-5">Validade final: <?php echo date ("d/m/Y", strtotime ($exibirEntradas["validadefim"]));?></p>
                                    <div class="pl-4">
                                        <a href="javascript: if(confirm('Tem certeza que deseja EXCLUIR a entrada <?php echo $exibirEntradas["categoria"];?>')) location.href='delete.php?usuario=<?php echo $exibirEntradas['id_entrada']; ?>';" class="btn btn-dark">Excluir Entrada</a>
                                    </div>                                  
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal-->
        <div class="modal fade" id="sitemodal" tabindex="1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Criando Entrada</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>

                    </div>

                    <div class="modal-body">
                        <form name="entradas" action="processa.php" method="POST">
                            <div class="form-group">
                                <label>Tipo de inscrição</label>
                                <input type="text" name="categoria" class="form-control" placeholder="Informe o tipo de inscrição" required="required">
                            </div>
                            <div class="form-group">
                                <label>Valor da inscrição</label>
                                <input type="number" name="valor" class="form-control" placeholder="Informe o preço da incrição" required="required">
                            </div>
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input type="number" name="quantidade" class="form-control" placeholder="Informe a quantidade de incrições" required="required">
                            </div>
                            <div class="form-group">
                                <label>Validade da inicial</label>
                                <input type="date" name="validadeini" class="form-control" placeholder="dd/mm/aaaa" required="required">
                            </div>
                            <div class="form-group">
                                <label>Validade da final</label>
                                <input type="date" name="validadefim" class="form-control" placeholder="dd/mm/aaaa" required="required">
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