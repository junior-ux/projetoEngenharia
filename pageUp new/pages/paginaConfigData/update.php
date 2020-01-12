 <?php
session_start();
include_once("conexao.php");

$id = 1;

$dataini = $_POST['dataini'];
$datafim = $_POST['datafim'];
$maxinsc = $_POST['maxinsc'];

$sql = "UPDATE ta_config SET dataini = '$dataini', datafim = '$datafim', maxinsc = '$maxinsc' WHERE id = '$id'";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

if($linhas == 1){
    $_SESSION['msg'] = "<div class='alert alert-success'>Configurações alteradas com sucesso!</div>";
    header("Location: configData.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao alterar as configurações!</div>";
    header("Location: configData.php");

}

?>