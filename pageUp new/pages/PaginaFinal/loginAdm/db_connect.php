<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "loginbanco";


$connect = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;
?>