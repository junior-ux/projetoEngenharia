<?php
session_start();

include_once('servidor.php');


$codigo = $_POST['codcupom'];
$nomeusu = $_SESSION['nome'];
$id_usuario = $_SESSION['id'];
$id_ati = $_SESSION['id_atividade'];

$preco_final;

$sql_p = "SELECT * FROM `ta_atividade_test` WHERE `id_ati` = $id_ati ORDER BY `dia` ASC";
$consulta_p = mysqli_query($conn, $sql_p);

$sql_cupom = "SELECT * FROM `ta_cupom` WHERE `nome` LIKE '$codigo'";
$consulta_cupom = mysqli_query($conn, $sql_cupom);
$linhas=mysqli_num_rows($consulta_cupom);


while ($exibirCupom = mysqli_fetch_array($consulta_cupom)) {
    echo $exibirCupom['nome'];
    $desconto = $exibirCupom['desconto'];
}

while ($exibirAtivi = mysqli_fetch_array($consulta_p)) {
    $valor = $exibirAtivi['valor'];
}


$val_des = (($valor * $desconto) / 100);
$_SESSION['val_des'] = $val_des;
echo "<br>";
//echo $val_des. "<br>";

if ($linhas > 0) {
    //echo $codigo."<br>";
    //echo $valor;
    //echo "<br>";
    //echo $desconto;
    $preco_final = ($valor - $desconto);
    //echo $preco_final;
    $_SESSION['preco_final'] = $preco_final;
    $_SESSION['msg'] = "<div class='alert alert-success'>Cupom adicionado com sucesso!</div>";
    header("Location: PaginaPag1.php");
}else {
    $_SESSION['msg'] = "<div class='alert alert-success'>Cupom não encontrado!</div>";
    header("Location: PaginaPag1.php");
}


?>