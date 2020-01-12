<?php

session_start();

include_once("conexao.php");

$nome = $_POST['nome'];
$desconto = $_POST['desconto'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

$sql = "insert into ta_cupom (nome, desconto, quantidade, validade) values ('$nome', '$desconto', '$quantidade', '$validade')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Cupom cadrastrado com sucesso!</div>";
    header("Location: cupom.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar o cupom!</div>";
    header("Location: cupom.php");

}

?>