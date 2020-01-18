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
                    <a href="#" class="btn btn-dark">Login</a>
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

                        <a data-toggle="modal" data-target="#modalpagamento" data-whatever="@mdo" class="btn btn-primary" > Pagar </a>
                    </div>
                </div>


                <!-- Começo modal-->
<div class="modal fade" id="modalpagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="labelmodal">Dados para Boleto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nome Completo:</label>
              <input type="text" class="form-control" id="nome" placeholder="Informe seu nome">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">CPF ou CNPJ:</label>
              <input type="text" class="form-control" id="cpf" placeholder="Informe seu CPF ou CNPJ">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Cupom:</label>
                <input type="text" class="form-control" id="valor" placeholder="Informe o cupom de desconto">
                
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Gerar boleto</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM modal-->
                <!--Outros métodos de pagamento
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
                    -->
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