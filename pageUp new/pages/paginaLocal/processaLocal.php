<?php

session_start();

include_once("conexao.php");

$nome = $_POST['nome'];


$sql = "insert into ta_local (nome) values ('$nome')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Local cadastrado com sucesso!</div>";
    header("Location: local.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar Local!</div>";
    header("Location: local.php");
}

?>


            