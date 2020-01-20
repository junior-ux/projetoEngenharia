<?php

session_start();

include_once("conexao.php");

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";

$sql = "select * from ta_atividade_test where nome like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

/*cpnsulta do local
$result_local = "SELECT a.*, l. 'nome' AS lugar FROM 'ta_atividade_test' AS l INNER JOIN 'ta_local' AS l ON a.'id_lugar' = l.'id'";
$resultado_local = mysqli_query($conexao, $result_local);
mysqli_close($conexao);
*/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Atividades</title>
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
                        <a class="nav-link" href="./../paginaCupom/cupom.php">
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
            <div class = "pr-3">
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#modalAtividade">Criar Atividade</a>
            </div>
            <a href="../paginaPdfAtivi/Atividades.php" class="btn btn-dark">Baixar atividade</a>
            <div class="col-12 text-center my-5">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Atividade(s) criada(s)</h2>
                        <?php while ($exibirAtividade = mysqli_fetch_array($consulta)) { ?>
                            <div class="card my-5" style="width: center;">
                                <?php
                                $id_lugar = $exibirAtividade['id_lugar'];
                                $sql_lugar = "SELECT * FROM ta_local WHERE id = $id_lugar";
                                $resultado = mysqli_query($conexao, $sql_lugar);

                                $id_convidado = $exibirAtividade['id_palestrante'];
                                $sql_convidado = "SELECT * FROM ta_convidado WHERE id = $id_convidado";
                                $resultado_con = mysqli_query($conexao, $sql_convidado);
                                ?>


                                <div class="card-body text-left">
                                    <h3> <?php echo $exibirAtividade["nome"]; ?></h3>
                                    <p class="display-5">Local: <?php while ($rows_pale = mysqli_fetch_array($resultado)) {
                                                                    echo $rows_pale['nome'];
                                                                } ?></p>
                                    <p class="display-5">Data: <?php echo date("d/m/Y", strtotime($exibirAtividade["dia"])); ?></p>
                                    <p class="display-5">Horário: <?php echo $exibirAtividade["horaini"]; ?> às <?php echo $exibirAtividade["horafim"]; ?></p>
                                    <p class="display-5">Carga horária: <?php echo $exibirAtividade["carga"]; ?></p>
                                    <p class="display-5">Quantidade de vagas: <?php echo $exibirAtividade["vagas"]; ?></p>
                                    <p class="display-5">Valor: <?php if ($exibirAtividade['valor'] == 0) {
                                                                    echo "Grátis";
                                                                } else {
                                                                    echo "R$ " . $exibirAtividade["valor"];
                                                                } ?></p>
                                    <div class="pl-4">
                                        <a href="javascript: if(confirm('Tem certeza que deseja EXCLUIR a atividade <?php echo $exibirAtividade["nome"]; ?>')) location.href='delete.php?usuario=<?php echo $exibirAtividade['id_ati']; ?>';" class="btn btn-dark">Excluir Atividade</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Atividade-->
        <div class="modal fade" id="modalAtividade" tabindex="1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Criando Atividade</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>

                    </div>

                    <div class="modal-body">
                        <form nome="programacao" action="processatest.php" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Informe o nome da atividade" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <input type="text" name="tipo" class="form-control" placeholder="Informe o tipo da atividade" required="required">
                                </div>
                                <div class="form-group my-3">
                                    <label>Local da Atividade</label><br>
                                    <select name="local" class="form-control" id="">
                                        <option value="Selecione"> Selecione </option>
                                        <?php
                                        $sql = "SELECT * FROM ta_local order by nome";
                                        $salvar = mysqli_query($conexao, $sql);
                                        ?>
                                        <?php while ($vreg = mysqli_fetch_assoc($salvar)) { ?>

                                            <?php $vid = $vreg['id'] ?>;
                                            <?php $vnome = $vreg['nome'] ?>;

                                            <option value='<?php echo $vid ?>'><?php echo $vnome; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Convidado</label>
                                    <select name="convidado" class="form-control" id="">
                                        <option value="Selecione"> Selecione </option>
                                        <?php
                                        $sql = "SELECT * FROM ta_convidado order by nome";
                                        $salvar = mysqli_query($conexao, $sql);
                                        ?>
                                        <?php while ($vreg = mysqli_fetch_assoc($salvar)) { ?>
                                            <?php $vid = $vreg['id'] ?>;
                                            <?php $vnome = $vreg['nome'] ?>;
                                            <option value='<?php echo $vid ?>'><?php echo $vnome; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Limites de vagas</label>
                                    <input type="number" name="vagas" class="form-control" placeholder="Informe o numero de vagas" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Data</label>
                                    <input type="date" name="data" class="form-control" placeholder="dd/mm/aaaa" required="required">
                                </div>
                                <div class="form-group my-3">
                                    <label>Horário de início</label>
                                    <input type="time" name="horainicial" class="form-control" placeholder="Informe o horário de início">
                                </div>
                                <div class="form-group my-3">
                                    <label>Horário de término</label>
                                    <input type="time" name="horafinal" class="form-control" placeholder="Informe o horário de término">
                                </div>
                                <div class="form-group my-3">
                                    <label>Carga Horária</label>
                                    <input type="number" name="cargahora" class="form-control" placeholder="Informe a carga horária desejada em horas">
                                </div>
                                <div class="form-group my-3">
                                    <label for="contactChoice1">Grátis</label>
                                    <input class="form-control" type="radio" id="gratis" name="contact" value="">

                                    <label for="contactChoice2">Paga</label>
                                    <input class="form-control" type="radio" id="paga" name="contact" value="">
                                </div>
                                <div class="form-group my-3" id="valor" style="display: none;">
                                    <label>Valor</label>
                                    <input type="number" name="valor" class="form-control" placeholder="Informe o valor desejado">
                                </div>

                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        $("#gratis").click(function() {
                                            $("#valor").hide();
                                        })

                                        $("#paga").click(function() {
                                            $("#valor").show();
                                        })
                                    })
                                </script>

                                <div class="form-group my-3">
                                    <label>Descrição</label>
                                    <textarea name="mensagem" maxlength="200" class="form-control" placeholder="Descrição da atividade"></textarea>
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