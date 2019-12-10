<?php

include_once("conexao.php");

$titulo  = $_POST ["titulo"];
$link    = $_POST ["link"];
$inicio  = $_POST ["dataI"];
$horaI   = $_POST ["horaI"];
$termino = $_POST ["dataT"];
$horaT   = $_POST ["horaT"];
$cep     = $_POST ["cep"];
$rua     = $_POST ["local"];
$estado  = $_POST ["estado"];
$cidade  = $_POST ["cidade"];
$responsavel = $_POST ["responsavel"];
$email   = $_POST ["email"];
$telefone = $_POST ["telefone"];
$descricao = $_POST ["descricao"];
$cargaHora = $_POST ["cargaHoraria"];
$totalPart = $_POST ["totalParticipante"];
$tipoEvento = $_POST ["tipoEvento"];

$sql = "insert into inscricao (titulo,link,inicio,horaI,termino,horaT,cep,
rua,estado,cidade,responsavel,email,
telefone,descricao,cargaHora,totalPart,tipoEvento) VALUES ('$titulo','$link','$inicio','$horaI',
'$termino','$horaT','$cep','$rua','$estado','$cidade','$responsavel','$email','$telefone','$descricao',
'$cargaHora','$totalPart','$tipoEvento')";

$salvar = mysqli_query($conexao,$sql);

header("location: ");

mysqli_close($conexao);

?>
