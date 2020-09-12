<?php
session_start();

print_r($_REQUEST);

if (
    !isset($_POST['serionaozoameusistema']) && 
    $_POST['serionaozoameusistema'] != "register-auth"
) {
    header("location:/cadastro.php?erro=1");
    return false;
}
echo '1';

include("conexao.php");
echo 1;

$sql = "SELECT usuario_id FROM usuario WHERE login = :email";
$result = $pdo->prepare($sql);

$result->bindParam(":email", $_POST['email'], PDO::PARAM_STR);

$result->execute();



var_dump($result->rowCount());

if ($result->rowCount()) {
    header("location:/cadastro.php?erro=2");
    die;
}

if ($_POST['password'] != $_POST['confirm_password']) {
    header("location:/cadastro.php?erro=3");
    die;
}

$sql = "INSERT INTO usuario VALUES (null,:nome,:login,:senha,0)";

$fullName = $_POST['first_name'] . " " . $_POST['last_name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

var_dump($fullName, $password);
try {
    $register = $pdo->prepare($sql);
    $register->bindParam(':nome', $fullName, PDO::PARAM_STR);
    $register->bindParam(':login', $_POST['email'], PDO::PARAM_STR);
    $register->bindParam(':senha', $password, PDO::PARAM_STR);
    var_dump($register);
    if ($register->execute()) {
        // header("location:/login.php");
        echo "foi";
    } 
    print_r($pdo->errorInfo());
    echo " n foi";

} catch(PDOException $e) {
    header("location:/cadastro.php?erro=deumerda");
}




