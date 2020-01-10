<?php 

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_atividade_test WHERE id_ati = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
	echo "<script> location.href='atividadeTabe.php' </script>";
}else{
	echo "<script> alert('Não foi possivel deletar essa atividade'); location.href='atividadeTabe.php' </script>";
}

?>