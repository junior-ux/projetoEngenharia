<?php 

session_start();

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM `inscricao_atividade` WHERE `inscricao_atividade`.`id` = $id;";
$salvar = mysqli_query($conn, $sql);

if ($salvar) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Cancelamento de inscrição efetuado com sucesso!</div>";
    header("Location: paginaMAtiv.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao tentar cancelar sua incrição!</div>";
    header("Location: paginaMAtiv.php");}
?>