<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagina de Convidado </title>
    <link rel="stylesheet" href="css/estilo.css" <script src="https://kit.fontawesome.com/b99e675b6e.js">
    </script>
    <link rel="stylesheet" href="paginas/convidado.html">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Administrador</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Pessoas</a></li>
                <li><a href="#"><i class="fas fa-dollar-sign"></i>Vendas</a></li>
                <li><a href="#"><i class="fas fa-ticket-alt"></i>Inscrições</a></li>
                <li><a href="#"><i class="fas fa-calendar"></i>Programação</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Certificado</a></li>
                <li><a href="#"><i class="fas fa-desktop"></i>Página do Evento</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i>Configurações</a>
                    <!-- Dropdown de Configurações
                <ul>
                    <li><a href=" # "></a>Evento</li>
                    <li><a href=" # "></a>Organizadores</li>
                    <li><a href=" # "></a>Financeiro</li>
                </ul>

            </li>
            -->
            </ul>

        </div>


        <div class="main_content">
            <div class="header">


                <nav class=" menu">
                    <ul>
                        <li id=>
                            <a href="#">Criar Evento </a>
                        </li>
                        <li>
                            <a href="#">Meus Eventos</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-btn" href="#">Área do organizador</a>
                            <div class="dropdown-menu">
                                <a href="#">Área do participante</a> <a href="#">Área do Organizador</a>
                                <a href="#">Área de Credenciamento</a>
                                <div class="nome">
                        <li>
                            <a href="#">(Nome do ADM)</a>
                        </li>
                        <li class="sair">

                            <a href="index.html">Sair</a>
                        </li>
            </div>
        </div>
        </li>
        </ul>
        </nav>

    </div>

    <div class="programacao">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link"
                    href="../atividade/atividadeTabe.php">Atividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"
                    href="../ConvidadoNovo/convidadoTabe.php">Convidado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="../SalaNovo/tabela.php">Local</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="../CupomNew/cupomTabe.php">Cupons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="">Configurações</a>
            </li>

        </ul>
        <br>

    </div>


    <form name="cupom" action="processa.php" method="POST">

            <br><h1>Adicionar convidado</h1><br>

            <p>Nome</p>
            <p class="codigo">
                <input type="text" name="nome" maxlength="60" placeholder="Nome e sobrenome" required="required">
            </p><br>

            <p>Email</p>
            <p class="email">
                <input type="email" name="email" maxlength="60" placeholder="email" required="required">
            </p><br>

            <p>Formação</p>
            <p class="formacao">
                <input type="text" name="formacao" maxlength="40" placeholder="Formação do convidado" required="required">
            </p><br>

            <p>Bibliográfia</p>
            <p class="mensagem">
                <textarea name="mensagem" maxlength="200" placeholder="Bibliográfia"></textarea>
            </p><br>

            <p class="enviar">
                <input type="submit" name="enviar" value="Adicionar">
            </p><br>

    </form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>