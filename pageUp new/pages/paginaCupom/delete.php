<?php 

session_start();

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_cupom WHERE id = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Cupom excluído com sucesso!</div>";
    header("Location: cupom.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao excluír Cupom!</div>";
    header("Location: cupom.php");}

?>