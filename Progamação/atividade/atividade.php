<?php 

include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagina de Programação </title>
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
                <a class="nav-link"
                    href="">Configurações</a>
            </li>

        </ul>
        <br>
                
    </div>

                <form nome="programacao" action="processa.php" method="post">

                    <p>Titulo</p>
                    <p class="titulo">
                        <input type="text" name="nome" id="name" maxlength="50" placeholder="Titulo da atividade" required="required">
                    </p><br>

                    <p>Tipo</p>
                    <p class="tipo">
                        <input type="text" name="tipo" id="name" maxlength="50" placeholder="Seminario,Mesa Redonda..." required="required">
                    </p><br>

                        <div>
                            <input type="radio" id="gratis" name="contact" value="">
                            <label for="contactChoice1">Grátis</label>

                            <input type="radio" id="paga" name="contact" value="phone">
                            <label for="contactChoice2">Paga</label>
                        </div><br>

                        <div class="campo" id="valor" style="display: none;">
                            <label for="text">Valor</label></br>
                            <input type="number" name="valor" style="width: 20em">
                        </div>
                        <br>

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


                    <p>Limite de Vagas</p>
                    <p class="limite">
                        <input type="number" name="vagas" id="name" placeholder="Quantidade de vagas" required="required">
                    </p><br>

                    <p>Data</p>
                    <p class="data">
                        <input type="date" name="data" id="name" placeholder="Quando vai acontecer" required="required">
                    </p><br>

                    <p>Hora de inicio da atividade</p>
                    <p class="hora">
                        <input type="time" name="horainicial" id="name" placeholder="Começa" required="required">
                    </p><br>
                        
                    <p>Hora que termina a atividade</p>
                    <p class="hora">
                        <input type="time" name="horafinal" id="name" placeholder="Termina" required="required">
                    </p><br>

                    <p>Carga horaria</p>
                    <p class="carga">
                        <input type="number" name="cargahora" id="name" placeholder="Total de horas" required="required">
                    </p><br>

                    
                    <label for="mensagem">Local</label><br>
                    <select name="local">
                        <option value="">Selecione</option>
                        <?php 
                            $sql = "SELECT * FROM ta_local order by nome";
                            $salvar = mysqli_query($conexao, $sql); 
                            ?>
                            <?php while($vreg = mysqli_fetch_assoc($salvar)){ ?>

                            <?php $vid = $vreg['id']?>;
                            <?php $vnome = $vreg['nome']?>;
                                    
                            <option value='<?php echo $vid ?>'><?php echo $vnome; ?></option>                                    
                            <?php } ?>
                    </select>
                    <br>

                    <label for="mensagem">Convidado</label><br>
                    <select name="convidado">
                        <option value="">Selecione</option>
                        <?php 
                            $sql = "SELECT * FROM ta_convidado order by nome";
                            $salvar = mysqli_query($conexao, $sql);
                            ?>
                            <?php while($vreg = mysqli_fetch_assoc($salvar)){ ?>
                            <?php $vid = $vreg['id']?>;
                            <?php $vnome = $vreg['nome']?>;
                            <option value='<?php echo $vid ?>'><?php echo $vnome; ?></option>
                        <?php } ?>
                    </select>
                    <br>

                    <p>Descrição da Atividade</p>
                    <p class="mensagem">
                        <textarea name="mensagem" maxlength="200" placeholder="Descrição"></textarea>
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

<?php 

mysqli_close($conexao);

?>