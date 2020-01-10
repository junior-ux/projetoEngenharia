<?php
	 $servidor = "localhost";
	 $login = "root";
	 $senha = "";
	 $bd	= "loginphp";

	$conn = mysqli_connect($servidor, $login, $senha, $bd);
	
	if($conn){
		
	}else{
		echo "Erro de conexão";
	}


?>