<?php 

session_start();

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_atividade_test WHERE id_ati = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Atividade excluída com sucesso!</div>";
    header("Location: Atividades.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao excluír atividade!</div>";
    header("Location: Atividades.php");}

?>