<?php
session_start();
include_once("servidor.php");

    if (!empty($_SESSION['mensagem'])) {
        echo ['mensagem'];
        unset($_SESSION['mensagem']);
    }
    if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])){
        $id=$_SESSION['id'];
        $nome=$_SESSION['nome'];
    }else{
        $_SESSION['mensagem']="Voce nao esta logado!";
        header("location: ");
        exit;
    }

// $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
// $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
// $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$instituicao = filter_input(INPUT_POST, 'instituicao', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$bloco = filter_input(INPUT_POST, 'bloco', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $login <br>";
//echo "sobrenome: $sobrenome";

// $result_usuario = "UPDATE inscusuario SET nome='$nome', login='$login' WHERE id = '$id'";

$result_usuario = "INSERT INTO inscusuario (sobrenome, cpf, telefone, cep, estado, cidade, instituicao
, curso, matricula, bloco) VALUES ('$nome', '$sobrenome', '$login', '$cpf', '$telefone', '$cep', '$estado', '$cidade', '$instituicao', '$curso', '$matricula', '$bloco') WHERE id = 5";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com sucesso</p>";
	
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	
}

 // sobrenome='$sobrenome', login='$login', senha='$senha', cpf='$cpf', telefone='$telefone', cep='$cep', estado='$estado', cidade='$cidade', instituicao='$instituicao', curso='$curso', matricula='$matricula', bloco='$bloco', WHERE id= 5";