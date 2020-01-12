<?php

session_start();

include_once("conexao.php");

$categoria = $_POST['categoria'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$validadeini = $_POST['validadeini'];
$validadefim = $_POST['validadefim'];

$sql = "insert into ta_entradas (categoria, valor, quantidade, validadeini, validadefim) values ('$categoria', '$valor', '$quantidade', '$validadeini', '$validadefim')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Entrada cadrastrado com sucesso!</div>";
    header("Location: configInscricao.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar o Entrada!</div>";
    header("Location: configInscricao.php");

}

?>