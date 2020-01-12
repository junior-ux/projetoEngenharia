<?php 
session_start();
include_once("conexao.php");

$id = 1;

$sql = "SELECT * FROM ta_config WHERE id = '$id'";

$salvar = mysqli_query($conexao, $sql);

while ($registros = mysqli_fetch_assoc($salvar)) {
	$dataini = $registros['dataini'];
	$datafim = $registros['datafim'];
	$maxinsc = $registros['maxinsc'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagina de Programação </title>
    <link rel="stylesheet" href="css/estilo.css"> <script src="https://kit.fontawesome.com/b99e675b6e.js">
    </script>
    <link rel="stylesheet" href="#">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h3>Administrador</h3>
            <ul>
                <li><a href="../../MenuCompleto/inicialADM.html"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a href="../../paginaPessoa/pessoa.html"><i class="fas fa-user"></i>Pessoas</a></li>
                <li><a href="../../pagVendas/index.html"><i class="fas fa-dollar-sign"></i>Vendas</a></li>
                <li><a href="#"><i class="fas fa-ticket-alt"></i>Inscrições</a></li>
                <li><a href="../atividade/atividadeTabe.php"><i class="fas fa-calendar"></i>Programação</a></li>
                <li><a href="../../evento/certificadoimpre/certificado.html"><i class="fas fa-address-book"></i>Certificado</a></li>
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
                <a class="nav-link"
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
                <a class="nav-link active"
                    href="../configuracao/editar.php">Configurações</a>
            </li>

        </ul>
        <br>

    </div>

                    <form nome="programacao" action="update.php" method="POST">
                        <fieldset>
                            <div class="campo">
                                <label for="email">Inicio das Inscrições</label></br>
                                <input type="date" id="name" name="dataini" value="<?php echo($dataini) ?>" style="width: 20em" value="">
                            </div>
                            <br>
                            <div class="campo">
                                <label for="email">Termino das Inscrições</label></br>
                                <input type="date" id="name" name="datafim" value="<?php echo($datafim) ?>" style="width: 20em" value="">
                            </div>
                            <br>

                            <div class="campo">
                                <label for="email">Cada participante pode ser inscrito em no máximo</label><br>
                                <input type="number" id="name" name="maxinsc" value="<?php echo($maxinsc) ?>" style="width: 20em" value="">
                            </div>
                        </fieldset>

                        <br>
                        <fieldset class="grupo">
                            <div class="campo">
                                <br>
                                <button class="bt bt-vd" >Salvar
                                    informações
                                </button>
                        </fieldset>
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