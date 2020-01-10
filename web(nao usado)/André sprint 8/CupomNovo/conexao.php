<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "projetoengenharia";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
    print "Falha na conexão com o Banco de Dados!";
}
?>