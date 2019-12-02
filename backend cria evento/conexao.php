<?php
$dsn = 'mysql:host:localhost;dbname=bd_pageup';
$user = "root";
$password = "";

try {
	$conexao = new PDO($dsn, $user, $password);

} catch (Exception $e) {
	echo 'Erro: ' -$e->getcode()-'Mensagem: '-$e->getMessage();
}




?>