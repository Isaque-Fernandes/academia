<?php

require_once('./conexao.php');

session_start();

$con = getConnection();


if (isset($_POST['botao_txt']) && !empty($_POST['email_txt']) && !empty($_POST['senha_txt'])) {
    $email = $_POST['email_txt'];
    $senha = $_POST['senha_txt'];



    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $rs = $con->query($sql);


    if ($rs->rowCount() < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: cadastro_formulario.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: cadastro_sistema.php');
    }
} else {
}
