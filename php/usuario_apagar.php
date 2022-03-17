 <?php

require_once('./usuario_acao.php');

if ($_GET['idUsuario'] == NULL) {
    header('location: erro.php?status=access-deny');
    exit;
}

$result = deletarUsuario($_GET['idUsuario']);

if ($result) {
    header("location: usuario_lista.php?status=success");
    die();
}

header("location: usuario_lista.php?status=fail");
die();