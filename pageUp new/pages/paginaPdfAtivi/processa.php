<?php

session_start();

include_once("conexao.php");

$titulo = $_POST['nome'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$vagas = $_POST['vagas'];
$data = $_POST['data'];
$horaini = $_POST['horainicial'];
$horafim = $_POST['horafinal'];
$carga = $_POST['cargahora'];
$local = $_POST['local'];
$convidado = $_POST['convidado'];
$descricao = $_POST['mensagem'];

$sql = "insert into ta_atividade_test (nome, tipo, valor, vagas, dia, horaini, horafim, carga, id_lugar, id_palestrante, descricao) values ('$titulo', '$tipo', '$valor', '$vagas', '$data', '$horaini', '$horafim', '$carga', '$local', '$convidado', '$descricao')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Atividade cadastrada com sucesso!</div>";
    header("Location: Atividades.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar atividade!</div>";
    header("Location: Atividades.php");
}

?>