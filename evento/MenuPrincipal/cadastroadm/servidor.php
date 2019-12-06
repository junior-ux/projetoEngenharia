<?php
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$bd	= "loginphp";
	// $bd	= "bdpageup.sql";

	$conn = mysqli_connect($servidor, $login, $senha, $bd);
	if($conn){
		
	}else{
		echo "Erro de conexão";
	}


?>