<?php 

session_start();

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_local WHERE id = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Local excluído com sucesso!</div>";
    header("Location: local.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao excluír Local!</div>";
    header("Location: local.php");}

?>