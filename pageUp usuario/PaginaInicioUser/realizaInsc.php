<?php
session_start();

include_once('servidor.php');

$id_usuario = $_SESSION['id'];
$id_ati = $_GET['usuario']; 

$sql_p = "SELECT * FROM `ta_atividade_test` WHERE 'id_ati' = $id_ati ORDER BY 'id_ati' ASC";
$consulta_p = mysqli_query($conn, $sql_p);

$sql = "INSERT INTO `inscricao_atividade` (`id_usuario`, `id_atividade`) VALUES ('$id_usuario', '$id_ati')";
$salvar = mysqli_query($conn, $sql);

    
$linhas = mysqli_affected_rows($conn);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Incrição realizada com sucesso!</div>";
    header("Location: pag1.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao se cadastrar na atividade!</div>";
    header("Location: pag1.php");
}
?>