<?php 

include_once("conexao.php");

$id = intval($_GET['usuario']);

$sql = "DELETE FROM ta_local WHERE id = '$id'";
$salvar = mysqli_query($conexao, $sql);

if ($salvar) {
	echo "<script> location.href='tabela.php' </script>";
}else{
	echo "<script> alert('Não foi possivel deletar o cupom'); location.href='tabela.php' </script>";
}

?>