<?php
$hostname = 'localhost';
$user = "root";
$password = "";
$database = "loginphp";


	// $Host = "ec2-174-129-227-51.compute-1.amazonaws.com";
	// $Database = "d4klsve4cq5on7";
	// $User = "hlavpfovlwppmw";
	// $Port = "5432";
	// $Password = "8af4e22a912095a7d78f005a6543b4df32a097c0146acbc7078193af7fa4beec";
	// $URI = "postgres://hlavpfovlwppmw:8af4e22a912095a7d78f005a6543b4df32a097c0146acbc7078193af7fa4beec@ec2-174-129-227-51.compute-1.amazonaws.com:5432/d4klsve4cq5on7";

$conexao = mysqli_connect$hostname, $use, $password, $database);

if (!$conexao){
	print "falha na conexão com o banco de dados";
}
?>