<?php
require_once('./fichaTreino_crud.php');

if ($_GET['IdUsuarioTreino'] == NULL) {
    header('location: erro.php?status=access-deny');
    exit;
}

$result = apagar($_GET['IdUsuarioTreino']);

if ($result) {
    header("location: instrutor_redirecionador_listagem.php?status=success");
    die();
}

header("location: instrutor_redirecionador_listagem.php?status=fail");
die();
