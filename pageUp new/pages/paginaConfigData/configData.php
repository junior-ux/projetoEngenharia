<?php 
session_start();
include_once("conexao.php");

$id = 1;

$sql = "SELECT * FROM ta_config WHERE id = '$id'";

$salvar = mysqli_query($conexao, $sql);

while ($registros = mysqli_fetch_assoc($salvar)) {
	$dataini = $registros['dataini'];
	$datafim = $registros['datafim'];
	$maxinsc = $registros['maxinsc'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento</title>
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
                        <a class="nav-link" href="./../paginaAtividades/Atividades.html">
                            <h4>Atividade</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaCertificado/certificado.html">
                            <h4>Certificados</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Financeiro.html">
                            <h4>Financeiro</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaCupom/cupom.html">
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

    <div class="container">

        <div class="row my-5">
            <div class="col-12 text-center my-5">
            <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Configuração da Data</h2>
                        <div class="card my-5" style="width: center;">
                            <div class="card-body text-left">
                                <p class="display-5">Ínicio das inscrições: <?php echo date("d/m/Y", strtotime($dataini));?></p>
                                <p class="display-5">Término das inscrições: <?php echo date("d/m/Y", strtotime($datafim));?></p>
                                <p class="display-5">Cada participante poderá participar de no máximo: <?php echo $maxinsc;?></p>
                                <div class="pl-4">
                                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#modalEvento">Configurar Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal-->
        <div class="modal fade" id="modalEvento" tabindex="1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Configurando evento</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>

                    </div>

                    <div class="modal-body">
                        <form nome="programacao" action="update.php" method="POST">
                            <div class="form-group">
                                <label>Início das Inscrições</label>
                                <input type="date" name="dataini" value="<?php echo($dataini) ?>" class="form-control" placeholder="Informe o início das inscrições em dd/mm/aaaa">
                            </div>
                            <div class="form-group">
                                <label>Término das Inscrições</label>
                                <input type="date" name="datafim" value="<?php echo($datafim) ?>" class="form-control" placeholder="Informe o término das inscrições em dd/mm/aaaa">
                            </div>
                            <div class="form-group">
                                <label>Cada participante pode ser inscrito em no máximo "X" atividades</label>
                                <input type="valor" name="maxinsc" value="<?php echo($maxinsc) ?>" class="form-control" placeholder="Informe o valor máximo de atividades que cada participante pode participar">
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

    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>