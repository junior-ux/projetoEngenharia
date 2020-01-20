<?php
include_once("servidor.php");
include_once("conexao.php");

$result_transacoes = "SELECT * FROM login_page";
$resultado_trasacoes = mysqli_query($conexao, $result_transacoes);


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificados</title>
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
                        <a class="nav-link" href="certificado.html">
                            <h4>Certificados</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./../paginaFinanceiro/Financeiro.html">
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
            <a href="#" class="btn btn-dark">Criar Certificado</a>
            <div class="pl-4">
                <a href="#" class="btn btn-dark">Enviar Certificado</a>
            </div>
            <div class="col-12 text-center my-5">
                <div class="card" style="width: center;">
                    <h3 class="text-left pl-5 mt-3">Certificados cadastrados</h3>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Inscrito</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Emi.Certificado</th>
                                </tr>
                            </thead>




                            <tbody>
                            
                                <tr>
                                    <?php while ($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){ ?>
                                    <td><?php echo $row_transacoes['nome']; ?></td>
                                    <td>
                                        <select class="selectpicker">
                                            <option data-content="<span class='badge badge-success'>Relish</span>">Presente
                                            </option>
                                            <option data-content="<span class='badge badge-success'>Relish</span>">Não-Presente
                                            </option>
                                        </select>

                                    </td>
                                    <td><button type="button" class="btn btn-secondary btn-sm">Confirmar</button></td>
                                </tr>
                                    <?php }?>
                            </tbody>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>