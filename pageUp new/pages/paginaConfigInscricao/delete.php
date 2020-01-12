<?php 

session_start();

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_entradas WHERE id_entrada = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Entrada excluída com sucesso!</div>";
    header("Location: configInscricao.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao excluír Entrada!</div>";
    header("Location: configInscricao.php");}

?>