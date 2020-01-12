<?php 

session_start();

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_convidado WHERE id = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Convidado excluído com sucesso!</div>";
    header("Location: convidado.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao excluír Convidado!</div>";
    header("Location: convidado.php");}

?>