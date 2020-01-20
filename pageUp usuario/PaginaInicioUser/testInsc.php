<?php
session_start();

include_once('servidor.php');

$id_usuario = $_SESSION['id'];
$id_ati = $_GET['usuario'];
$choque_hora = false; 

//$_SESSION['id_atividade'] = $id_ati;

$sql_p = "SELECT * FROM `ta_atividade_test` WHERE `id_ati` = $id_ati ORDER BY `dia` ASC";
$consulta_p = mysqli_query($conn, $sql_p);

$sql_choque = "SELECT * FROM `inscricao_atividade` WHERE `id_usuario` = $id_usuario ORDER BY `id` ASC";
$consulta_choque = mysqli_query($conn, $sql_choque);

while ($exibirAtividade = mysqli_fetch_array($consulta_p)) {
    $_SESSION['id_atividade'] = $exibirAtividade['id_ati'];
    $data_ati = $exibirAtividade['dia'];
    $hora_ini = $exibirAtividade['horaini'];
    $hora_fim = $exibirAtividade['horafim'];
    $valor_ins = $exibirAtividade['valor'];
}  

while ($busca_atividaddes = mysqli_fetch_array($consulta_choque)) {
    $id_atividade = $busca_atividaddes['id_atividade'];
    $sql_ati = "SELECT * FROM ta_atividade_test where id_ati = $id_atividade";
    $consulta_ati = mysqli_query($conn, $sql_ati);

    while ($teste_ati = mysqli_fetch_array($consulta_ati)) {
        //$_SESSION['valor_ati'] = $teste_ati['valor'];
        if ($teste_ati['id_ati'] == $id_ati) {
            $choque_hora = true;
            $_SESSION['msg'] = "<div class='alert alert-success'>Você já está cadastrado nessa atividade!</div>";
            header("Location: pag1.php");
        }elseif ($teste_ati['dia'] == $data_ati && ($teste_ati['horaini'] == $hora_ini || $teste_ati['horafim'] == $hora_fim)) {
            $choque_hora = true;
            $_SESSION['msg'] = "<div class='alert alert-success'>Você já está cadastrado em uma atividade nesse horário!</div>";
            header("Location: pag1.php");
        }else {
            $choque_hora = false;
        }
    }
}
if (!$choque_hora) {
    if ($valor_ins == 0) {
        $sql = "INSERT INTO `inscricao_atividade` (`id_usuario`, `id_atividade`) VALUES ('$id_usuario', '$id_ati')";
        $salvar = mysqli_query($conn, $sql);
        $_SESSION['msg'] = "<div class='alert alert-success'>Incrição realizada com sucesso!</div>";
        header("Location: pag1.php");
    } else {
        header("Location: ./../paginaPagamento/addCupom.php");
    }
}

?>