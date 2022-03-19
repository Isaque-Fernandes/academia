<?php
require_once('./fichaTreino_crud.php');

if ($_GET['idUsuarioTreino'] == NULL) {
    header('location: erro.php?status=access-deny');
    exit;
}

$result = apagar($_GET['idUsuarioTreino']);

if ($result) {
    header("location: fichaTreino_redirecionador_listagem.php?status=success");
    die();
}

header("location: fichaTreino_redirecionador_listagem.php?status=fail");
die();
