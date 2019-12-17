<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "loginbanco";


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}	

$pesquisar = $_POST['pesquisar']; 
$result_cursos = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado_cursos = mysqli_query($conn, $result_cursos);
while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
  // echo "Nome: ".$rows_cursos['nome']."<br>";
}

include ('certificado.html');
?>