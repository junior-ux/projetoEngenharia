<?php

session_start();

include_once("conexao.php");

$titulo = $_POST['nome'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$vagas = $_POST['vagas'];
$data = $_POST['data'];
$horaini = $_POST['horainicial'];
$horafim = $_POST['horafinal'];
$carga = $_POST['cargahora'];
$local = $_POST['local'];
$convidado = $_POST['convidado'];
$descricao = $_POST['mensagem'];

$hini = date ("H:i:s", strtotime ($horaini));
$hfim = date ("H:i:s", strtotime ($horafim));

$compararcao = false;

$sql_data = "SELECT * FROM ta_atividade_test";
$salvar_data = mysqli_query($conexao, $sql_data); 

while($vregdata = mysqli_fetch_assoc($salvar_data)){
    $id_lugar = $vregdata['id_lugar'];
    $sql_con = "SELECT * FROM ta_local WHERE id = $id_lugar";
    $salvar_con = mysqli_query($conexao, $sql_con);

    $sql_hora = "SELECT * FROM ta_atividade_test";
    $salvar_hora = mysqli_query($conexao, $sql_hora);

    $vdata = $vregdata['dia'];
    
    while($vreg = mysqli_fetch_assoc($salvar_con)){
    
        $vid = $vreg['id'];
        $vnome = $vreg['nome'];
        
        if ($vdata == $data and $vid == $local) {
            $compararcao = true;
            //echo $vnome. "<br>";
            while($vreghora = mysqli_fetch_assoc($salvar_hora)){
                $vhoraini = $vreghora['horaini'];
                $vhorafim = $vreghora['horafim'];
                if (($vhoraini == $hini or $vhorafim == $hfim)) {
                    $compararcao = true;
                    //echo $vhoraini . "<br>" . $vhorafim;
                }else {
                    $compararcao = false;
                }
            }
        }else {
            $compararcao = false;
        }
        
    }  
}

if ($compararcao) {
    $_SESSION['msg'] = "<div class='alert alert-success'>Impossivel cadastrar essa atividade. Houve conflito de data, local e horario!</div>";
    header("Location: Atividades.php");
}else {
    $sql = "insert into ta_atividade_test (nome, tipo, valor, vagas, dia, horaini, horafim, carga, id_lugar, id_palestrante, descricao) values ('$titulo', '$tipo', '$valor', '$vagas', '$data', '$horaini', '$horafim', '$carga', '$local', '$convidado', '$descricao')";
    $salvar = mysqli_query($conexao, $sql);
    
    $linhas = mysqli_affected_rows($conexao);
    
    mysqli_close($conexao);
    
    if($linhas == 1){
        $_SESSION['msg'] = "<div class='alert alert-success'>Atividade cadastrada com sucesso!</div>";
        header("Location: Atividades.php");
    }else{
        $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar atividade!</div>";
        header("Location: Atividades.php");
    }
}

?>