<?php

session_start();

include_once("conexao.php");

$nomeusu = $_SESSION['nome'];
$id_user = $_SESSION['id'];

$sql = "SELECT * FROM inscricao_atividade WHERE id_usuario = '$id_user'";
$consulta = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Minhas inscrições</title>
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

                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaInicioUser/pag1.php">
                            <h1>PageUp</h1>
                        </a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link" href="./../paginaM_Atv/paginaMAtiv.php">
                            <h4>Minhas Atividades</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h4>Meus Certificados</h4>
                        </a>
                    </li>

                </ul>
                <form class="form-inline">
                    <a href="../loginusuario/loginusuario.php" class="btn btn-dark" target="_top"><?php echo $nomeusu ?></a>
                </form>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row my-5">
            <div class="col-12 text-center my-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Atividade(s) cadastrada(s)</h2>
                        <?php while ($exibirAtividade = mysqli_fetch_array($consulta)) { ?>
                            <?php

                            $id_atividade = $exibirAtividade['id_atividade'];
                            $sql_atividade = "SELECT * FROM ta_atividade_test WHERE id_ati = '$id_atividade' ORDER BY `ta_atividade_test`.`dia` ASC";
                            $resul_ati = mysqli_query($conn, $sql_atividade);
                            ?>
                            <?php while ($rows_pale = mysqli_fetch_array($resul_ati)) {
                                $v_nome = $rows_pale['nome'];
                                $v_data = $rows_pale['dia'];
                                $v_horaini = $rows_pale['horaini'];
                                $v_horafim = $rows_pale['horafim'];
                                $v_carga = $rows_pale['carga'];
                            } ?>
                            <div class="card my-5" style="width: center;">
                                <div class="card-body text-left">
                                    <h5 class="card-title"><?php echo $v_nome;?></h5>
                                    <p class="display-5">Data: <?php echo date("d/m/Y", strtotime($v_data)); ?></p>
                                    <p class="display-5">Horário: <?php echo $v_horaini;?> às <?php echo $v_horafim;?></p>
                                    <p class="display-5">Carga horária: <?php echo $v_carga;?></p>
                                </div>
                                <div class="modal-footer">
                                        <a href="#" class="btn btn-dark">Cancelar inscrição</a>
                                </div>
                            </div>
                        <?php } ?>
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

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> PageUp.com</a>
    </div>

</footer>

</html>