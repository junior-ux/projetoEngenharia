<?php 

include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagina de Atividades </title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js">
    </script>
    <link rel="stylesheet" href="#">
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

    <div class="ins">
        <h3>Adicionar Atividade</h3>

        <table class="table table-hover">
            <tbody>
                <form nome="programacao" action="processa.php" method="post">
                    <fieldset>
                        <div class="campo">
                            <label for="text">Titulo</label></br>
                            <input type="text" id="name" name="nome" maxlength="50" style="width: 20em">
                        </div>

                        <br>
                        <div class="campo">
                            <label for="text">Tipo</label></br>
                            <input type="text" id="name" name="tipo" maxlength="50" style="width: 20em" placeholder="Seminario,Mesa Redonda...">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="text">Valor</label></br>
                            <input type="number" id="name" name="valor" style="width: 20em" placeholder="R$">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="text">Limite de Vagas</label></br>
                            <input type="number" id="name" name="vagas" style="width: 20em">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="text">Data</label></br>
                            <input type="date" id="name" name="data" style="width: 20em">
                        </div>
                        <br>
                        
                        <div class="campo">
                            <label for="text">Hora de inicio da atividade</label><br>
                            <input type="time" id="name" name="horainicial" style="width: 20em" placeholder="Começa"><br>
                        </div>

                        <br>
                        <div class="campo">
                            <label for="text">Hora de termino da atividade</label><br>
                            <input type="time" id="name" name="horafinal" style="width: 20em" placeholder="Termina"> 
                        </div>

                        <br>

                        <div class="campo">
                            <label for="tempo">Carga horária</label><br>
                            <input type="number" id="Hora" name="cargahora" style="width: 20em" placeholder="Total de horas">
                        </div>

                        <br>

                        <div class="campo">
                            <label for="tempo">Local</label><br>
                            <input type="text" id="Hora" name="local" style="width: 20em" placeholder="Local da atividade">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="tempo">Palestrante</label><br>
                            <input type="text" id="Hora" name="convidado" style="width: 20em" placeholder="Palestrante">
                        </div>
                        <br>


                        <div class="campo">
                            <label for="mensagem">Descrição da Atividade</label><br>
                            <textarea rows="6" style="width: 20em" id="mensagem" maxlength="200" placeholder="Descrição" name="mensagem"></textarea>
                        </div>

                        <p class="enviar">
                        <input type="submit" name="enviar" value="Adicionar">
                        </p><br>

                </form>

            </tbody>

        </table>
    </div>

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

<?php 

mysqli_close($conexao);

?>