<?php

session_start();

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$formacao = $_POST['formacao'];
$bibliografia = $_POST['mensagem'];

$sql = "insert into ta_convidado (nome, email, cargo, bibliografia) values ('$nome', '$email', '$formacao', '$bibliografia')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Convidado adicionado com sucesso!</div>";
    header("Location: convidado.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao adicionar o Convidado!</div>";
    header("Location: convidado.php");

}

mysqli_close($conexao);

?>