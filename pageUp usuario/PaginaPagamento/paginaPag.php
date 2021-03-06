
<?php
    session_start();
    include_once("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }

     if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])){
         $id=$_SESSION['id'];
         $nome=$_SESSION['nome'];
     }else{
         $_SESSION['mensagem']="Voce nao esta logado!";
         header("location: ../loginusuario/loginusuario.php");
         exit;
    }    
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Pagamento</title>
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <div class="container">

            <a href="./../PaginaFinal/pag1.html" class="logo" style="float: left"><img
                    src="./../PaginaFinal/imgs/logoSite.svg" width="90" height="45" alt=""></a>

            <h4>PageUp</h4>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

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
                    <a href="#" class="btn btn-dark">Sair</a>
                </form>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row">
            <div class="col-12 text-left my-5">

                <!--RESUMO DO PEDIDO-->
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h3 class="display-5">Resumo do Pedido<br></h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Inscrição</th>
                                    <th scope="col">Qtd</th>
                                    <th scope="col">Valor Unitário</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Nome</td>
                                    <td>1</td>
                                    <td>R$ *valor*</td>
                                    <td>R$ "valor Unitário * Qtd"</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Forma de pagamento-->
                <div class="row">
                    <div class="col-12 text-left my-5">
                        <form>
                            <label for="tipo de usuario">Tipo de pagamento :<br></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="opcao1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Boleto
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="opcao2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Cartão de crédito
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                    value="opcao3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Cartão de débito
                                </label>
                            </div>
                    </div>
                    </form>


                </div>
                <div class="card" style="width: center;">
                    <div class="card-body my-5">
                        <h3 class="display-5">Forma de Pagamento: Boleto<br></h3>
                        <ul>
                            <li>Valor à vista R$ *valor da inscrição*. Não pode ser parcelado</li>
                            <li>Após o pagamento, sua inscrição pode levar até 3 dias úteis para confirmar</li>
                            <li>Você poderá pagar o boleto até *ultimo dia para inscrição do evento*</li>
                        </ul>

                        <a href="#" class="btn btn-dark">Gerar boleto</a>
                    </div>
                </div>

                <div class="card my-5" style="width: center;">
                    <div class="card-body">
                        <h3 class="display-5">Forma de Pagamento: Cartão de crédito</h3>
                        <form>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="name" class="form-control" placeholder="Seu nome">
                            </div>

                            <div class="form-group">
                                <label>Sobrenome completo</label>
                                <input type="sobrenome" class="form-control" placeholder="Seu sobrenome completo">
                            </div>

                            <div class="form-group">
                                <label>Número do Cartão</label>
                                <input type="number" class="form-control" placeholder="Numero de cartão">
                            </div>

                            <div class="form-group">
                                <label>Número de vencimento</label>
                                <input type="number" class="form-control" placeholder="Numero de vencimento">
                            </div>

                            <form class="form-inline">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de cartão</label>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option selected>Escolher...</option>
                                        <option value="1">Visa</option>
                                        <option value="2">MasterCard</option>
                                        <option value="3">Hipercard</option>
                                    </select>
                                </form>
                                <a href="#" class="btn btn-dark my-2">pagar</a>
                        </form>
                    </div>
                </div>

                <div class="card my-5" style="width: center;">
                        <div class="card-body">
                            <h3 class="display-5">Forma de Pagamento: Cartão de débito</h3>
                            <form>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="name" class="form-control" placeholder="Seu nome">
                                </div>
    
                                <div class="form-group">
                                    <label>Sobrenome completo</label>
                                    <input type="sobrenome" class="form-control" placeholder="Seu sobrenome completo">
                                </div>
    
                                <div class="form-group">
                                    <label>Número do Cartão</label>
                                    <input type="number" class="form-control" placeholder="Numero de cartão">
                                </div>
    
                                <div class="form-group">
                                    <label>Número de vencimento</label>
                                    <input type="number" class="form-control" placeholder="Numero de vencimento">
                                </div>
    
                                <form class="form-inline">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de cartão</label>
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Escolher...</option>
                                            <option value="1">Visa</option>
                                            <option value="2">MasterCard</option>
                                            <option value="3">Hipercard</option>
                                        </select>
                                    </form>
                                    <a href="#" class="btn btn-dark my-2">pagar</a>
                            </form>
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