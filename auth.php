<?php

echo "eae men suave";
print_r($_REQUEST);

if (
    isset($_POST['serionaozoameusistema']) && 
    $_POST['serionaozoameusistema'] != "login-auth"
) {
    header("location:/login.php?erro=1");
    return false;
}


$login = $_POST['login'];
$senha = md5($_POST['senha']);
include_once('conexao.php');
$sql = "SELECT usuario_id, nome, nivel FROM usuario WHERE login = ? AND senha = ? ";
$result = $mysqli->prepare($sql);
$result->bind_param($login, $senha);
$result->execute();
$register = $result->affected_rows;

if ($_GET['acao'] == 'V') // Verificação do envio do formulário
{
    
    if ($register == 1) {
    //     $dados = $result->fetch_array();
    //     $id_usuario = $dados['usuario_id'];
    //     $us_name = $dados['nome'];
    //     $us_nivel = $dados['nivel'];

    //     $_SESSION['us_sessao'] = session_id();
    //     $_SESSION['us_id'] = $id_usuario;
    //     $_SESSION['us_name'] = $us_name;
    //     $_SESSION['us_nivel'] = $us_nivel;
    //     header('location: index.php');
    // } else {
    //     unset($_SESSION['us_sessao']);
    //     unset($_SESSION['us_id']);
    //     unset($_SESSION['us_name']);
    //     unset($_SESSION['us_nivel']);
    //     $msg = 'erro_login';
    // }
}