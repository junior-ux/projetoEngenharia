<?php
session_start();

include_once('servidor.php');

$nomeusu = $_SESSION['nome'];
$id_usuario = $_SESSION['id'];
$id_ati = $_SESSION['id_atividade'];
$choque_hora = false; 



$sql_p = "SELECT * FROM `ta_atividade_test` WHERE `id_ati` = $id_ati ORDER BY `dia` ASC";
$consulta_p = mysqli_query($conn, $sql_p);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pagamento de atividades</title>
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

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">



                    </li>

                </ul>

                <form class="form-inline">
                    <a href="#" class="btn btn-dark"><?php echo $nomeusu?></a>
                </form>

            </div>

        </div>

    </nav>

    <?php if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }?>

    <div class="container">

        <div class="row">
            <div class="col-12 text-left my-5">

                <!--RESUMO DO PEDIDO-->
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h3 class="display-5">Resumo do Pedido<br></h3>
                        <?php while ($exibirAti = mysqli_fetch_array($consulta_p)) { ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Atividade</th>
                                        <th scope="col">Qtd</th>
                                        <th scope="col">Valor Unitário</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $exibirAti["id_ati"]; ?></th>
                                        <td><?php echo $exibirAti["nome"]; ?></td>
                                        <td>1</td>
                                        <td>R$ <?php echo $exibirAti["valor"]; ?></td>
                                        <td>R$ <?php echo $exibirAti["valor"]; ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-left my-5">
                        <div class="card" style="width: center;">
                            <div class="card-body my-5">
                                <h3 class="display-5">Cupom de desconto<br></h3>
                                <p>Se você tem um cupom de desconto essa é a hora de usar</p>
                                <form action="processaCupom.PHP" method="POST" name="addCupom">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Código do cupom:</label>
                                        <input type="text" class="form-control" name="codcupom" placeholder="Informe aqui o código">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" >Não tenho Cupom</button>
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
                                    </div>
                                </form>
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

<footer class="page-footer font-small teal pt-4">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> PageUp.com</a>
    </div>

</footer>

</html>