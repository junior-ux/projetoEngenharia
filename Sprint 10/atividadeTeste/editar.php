<?php 
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'usuario', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['usuario'] = $id;
$sql = "SELECT * FROM ta_atividade WHERE id = '$id'";

$salvar = mysqli_query($conexao, $sql);

while ($registros = mysqli_fetch_assoc($salvar)) {
    $titulo = $registros['nome'];
    $tipo = $registros['tipo'];
    $valor = $registros['valor'];
    $vagas = $registros['vagas'];
    $data = $registros['dia'];
    $horaini = $registros['horaini'];
    $horafim = $registros['horafim'];
    $carga = $registros['carga'];
    $local = $registros['lugar'];
    $convidado = $registros['palestrante'];
    $descricao = $registros['descricao'];
}
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

    <div class="programacao">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active"
                    href="file:///home/igor/Documentos/Ciencia%20da%20computacao/Engenharia/pagProgramacao/atividades.html">Atividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="file:///home/igor/Documentos/Ciencia%20da%20computacao/Engenharia/pagProgramacao/convidado.html">Convidado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="file:///home/igor/Documentos/Ciencia%20da%20computacao/Engenharia/pagProgramacao/local.html">Local</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="file:///home/igor/Documentos/Ciencia%20da%20computacao/Engenharia/pagProgramacao/cupom.html">Cupons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="file:///home/igor/Documentos/Ciencia%20da%20computacao/Engenharia/pagProgramacao/configuracoes.html">Configurações</a>
            </li>

        </ul>
        <br>
        
        <h3>Editar atividade</h3>

        <table class="table table-hover">
            <tbody>
                <form nome="programacao" action="update.php" method="POST">
                    <fieldset>
                        <div class="campo">
                            <label for="text">Titulo</label></br>
                            <input type="text" id="name" name="nome" value="<?php echo($titulo) ?>" maxlength="50" style="width: 20em">
                        </div>

                        <br>
                        <div class="campo">
                            <label for="text">Tipo</label></br>
                            <input type="text" id="name" name="tipo" value="<?php echo($tipo) ?>" maxlength="50" style="width: 20em" placeholder="Seminario,Mesa Redonda...">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="text">Valor</label></br>
                            <input type="number" id="name" name="valor" value="<?php echo($valor) ?>" style="width: 20em" placeholder="R$">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="text">Limite de Vagas</label></br>
                            <input type="number" id="name" name="vagas" value="<?php echo($vagas) ?>" style="width: 20em">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="text">Data</label></br>
                            <input type="date" id="name" name="data" value="<?php echo($data) ?>" style="width: 20em">
                        </div>
                        <br>
                        
                        <div class="campo">
                            <label for="text">Hora de inicio da atividade</label><br>
                            <input type="time" id="name" name="horainicial" value="<?php echo($horaini) ?>" style="width: 20em" placeholder="Começa"><br>
                        </div>

                        <br>
                        <div class="campo">
                            <label for="text">Hora de termino da atividade</label><br>
                            <input type="time" id="name" name="horafinal" value="<?php echo($horafim) ?>" style="width: 20em" placeholder="Termina"> 
                        </div>

                        <br>

                        <div class="campo">
                            <label for="tempo">Carga horária</label><br>
                            <input type="number" id="Hora" name="cargahora" value="<?php echo($carga) ?>" style="width: 20em" placeholder="Total de horas">
                        </div>

                        <br>

                        <div class="campo">
                            <label for="tempo">Local</label><br>
                            <input type="text" id="Hora" name="local" value="<?php echo($local) ?>" style="width: 20em" placeholder="Local da atividade">
                        </div>
                        <br>

                        <div class="campo">
                            <label for="tempo">Palestrante</label><br>
                            <input type="text" id="Hora" name="convidado" value="<?php echo($convidado) ?>" style="width: 20em" placeholder="Palestrante">
                        </div>
                        <br>


                        <div class="campo">
                            <label for="mensagem">Descrição da Atividade</label><br>
                            <textarea rows="6" style="width: 20em" id="mensagem" value="<?php echo($descricao) ?>" maxlength="200" placeholder="Descrição" name="mensagem"></textarea>
                        </div>

                        <p class="enviar">
                        <input type="submit" name="enviar" value="Alterar">
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