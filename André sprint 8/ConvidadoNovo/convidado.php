<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pagina de convidados</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Administrador</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Pessoas</a></li>
                <li><a href="#"><i class="fas fa-dollar-sign"></i>Vendas</a></li>
                <li><a href="#"><i class=" fas fa-ticket-alt"></i>Inscrições</a></li>
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
                                <a href="#">Área do participante</a> <a href="#">Área do Organizador</a> <a
                                    href="#">Área de Credenciamento</a>
                                <div class="nome">
                        <li>
                            <a href="#">(Nome do ADM)</a>
                        </li>
            </div>
        </div>
        </li>
        </ul>
        </nav>

    </div>

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

</html>

</body>

</html>