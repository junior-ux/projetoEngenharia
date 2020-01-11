<?php

session_start();

include_once("servidor.php");

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";

$sql = "select * from ta_atividade_test where nome like '%$filtro%'";
$consulta = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($consulta);

$sql_con = "select * from ta_convidado";
$consulta_con = mysqli_query($conn, $sql_con);
$registros_con = mysqli_num_rows($consulta);

/*cpnsulta do local
$result_local = "SELECT a.*, l. 'nome' AS lugar FROM 'ta_atividade_test' AS l INNER JOIN 'ta_local' AS l ON a.'id_lugar' = l.'id'";
$resultado_local = mysqli_query($conexao, $result_local);
mysqli_close($conexao);
*/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <div class="container">
            <!-- <<<<<<< HEAD
======= -->

            <!-- <a href="pag1.html" class="logo" style="float: left"><img src="imgs/logoSite.svg" width="90" height="45"alt=""></a> -->

            <!--   <h4>PageUp</h4> -->

            <!-- >>>>>>> 8d3ca638ff5cea0cd2a8d0771e5a0c95eac93b0b -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <!-- <<<<<<< HEAD -->
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h1>PageUp</h1>
                        </a>
                    </li>

                </ul>
                <!-- =======
>>>>>>> 8d3ca638ff5cea0cd2a8d0771e5a0c95eac93b0b -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>

                    </li>

                </ul>

                <form class="form-inline">
                    <a href="../loginusuario/loginusuario.php" class="btn btn-dark" target="_top">Sair</a>
                </form>

            </div>

        </div>

    </nav>

    <img src="imgs/slide1.jpg" class="img-fluid" alt="Responsive image">

    <!-- menu login -->





    <div class="container">

        <div class="row">

            <div class="col-12 text-center my-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h1 class="display-3">Sobre o evento</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec vel enim id odio dapibus laoreet at vitae augue.
                            In sollicitudin quam placerat aliquam tristique.
                            Fusce venenatis dolor at mauris viverra egestas.
                            Donec interdum a magna at pharetra. Aliquam id enim venenatis, rhoncus nulla at, lobortis
                            est.
                            Donec ultrices enim at pulvinar congue. Praesent iaculis feugiat gravida.
                            Cras urna enim, varius in faucibus a, consectetur at sem.
                            Praesent eleifend ligula vitae enim ornare, eu elementum erat dapibus.</p>
                    </div>
                </div>


            </div>



            <div class="col-12 text-center my-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h1 class="display-3">Inscrições</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec vel enim id odio dapibus laoreet at vitae augue.
                            In sollicitudin quam placerat aliquam tristique.
                            Fusce venenatis dolor at mauris viverra egestas.
                            Donec interdum a magna at pharetra. Aliquam id enim venenatis, rhoncus nulla at, lobortis
                            est.
                            Donec ultrices enim at pulvinar congue. Praesent iaculis feugiat gravida.
                            Cras urna enim, varius in faucibus a, consectetur at sem.
                            Praesent eleifend ligula vitae enim ornare, eu elementum erat dapibus.</p>

                        <form class="button">
                            <a href="./../PaginaInscricaoEvento/pagInscri.php" class="btn btn-dark">Fazer inscrição</a>
                        </form>

                    </div>

                </div>

                <div class="row mb-5">



                </div>

                <h1 class="col-15 text-center my-5">Palestrantes</h1>

                <div class="row mb-5">
                    <?php while ($exibirConvidado = mysqli_fetch_array($consulta_con)) { ?>
                        <div class="col-sm-4">
                            <div class="card">

                                <img class="card-img-top" src="imgs/download (1).jpg">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $exibirConvidado["nome"]; ?></h4>
                                    <p class="card-text"><?php echo $exibirConvidado["cargo"]; ?></p>

                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal1<?php echo $exibirConvidado['id']; ?>">Mais
                                        Informações</a>
                                    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal1">Atividades</a>
                                </div>

                            </div>

                        </div>

                        <!-- Modal 1-->
                        <div class="modal fade" id="siteModal1<?php echo $exibirConvidado['id']; ?>" tabindex="1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title"><?php echo $exibirConvidado['nome']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body text-left">
                                        <p>Email: <?php echo $exibirConvidado['email']; ?></p>
                                    </div>

                                    <div class="modal-body">
                                        <p><?php echo $exibirConvidado['bibliografia']; ?></p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Done</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 11-->
                        <div class="modal fade" id="siteModal11" tabindex="1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Atividades que serão ministradas</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>

                                    </div>

                                    <div class="modal-body">
                                        <p>Conteudo Conteudo Conteudo Conteudo Conteudo Conteudo Conteudo Conteudo Conteudo </p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Done</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>



                </div>

                <!-- Atividades -->

                <h1 class="col-15 text-center my-5">Atividades</h1>

                <div class="card text-left my-5">
                    <h5 class="card-header">Todas as atividades</h5>
                    <?php while ($exibirAtividade = mysqli_fetch_array($consulta)) { ?>
                        <?php
                                                                                                                $id_lugar = $exibirAtividade['id_lugar'];
                                                                                                                $sql_lugar = "SELECT * FROM ta_local WHERE id = $id_lugar";
                                                                                                                $resultado = mysqli_query($conn, $sql_lugar);

                                                                                                                $id_convidado = $exibirAtividade['id_palestrante'];
                                                                                                                $sql_convidado = "SELECT * FROM ta_convidado WHERE id = $id_convidado";
                                                                                                                $resultado_con = mysqli_query($conn, $sql_convidado);
                        ?>
                        <a id="lul"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $exibirAtividade["nome"]; ?></h5>
                            <p class="card-text"><?php if ($exibirAtividade['valor'] == 0) {
                                                                                                                    echo "Grátis";
                                                                                                                } else {
                                                                                                                    echo "R$ " . $exibirAtividade["valor"];
                                                                                                                } ?></p>
                            <p>Data: <?php echo date("d/m/y", strtotime($exibirAtividade["dia"])); ?></p>
                            <a href="#" class="card-link" data-toggle="modal" data-target="#modalInfo11<?php echo $exibirAtividade['id_ati']; ?>">Mais Informações</a>
                        </div>
                        <!-- Modal Info11 -->
                        <div class="modal fade" id="modalInfo11<?php echo $exibirAtividade['id_ati']; ?>" tabindex="1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title"><?php echo $exibirAtividade['nome']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body text-left">
                                        <p>Das <?php echo $exibirAtividade['horaini']; ?> às <?php echo $exibirAtividade['horafim']; ?></p>
                                        <p>Carga horária: <?php echo $exibirAtividade["carga"]; ?> horas</p>
                                        <p>Local: <?php while ($rows_pale = mysqli_fetch_array($resultado)) {
                                                                                                                    echo $rows_pale['nome'];
                                                                                                                } ?></p>
                                        <p>Convidado: <?php while ($rows_pale = mysqli_fetch_array($resultado_con)) {
                                                                                                                    echo $rows_pale['nome'];
                                                                                                                } ?></p>
                                    </div>

                                    <div class="modal-body">
                                        <p><?php echo $exibirAtividade["descricao"]; ?></p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Done</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
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