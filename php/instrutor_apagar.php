<?php

require_once('./instrutor_acao.php');

if ($_GET['idInstrutor'] == NULL) {
    header('location: erro.php?status=access-deny');
    exit;
}

$result = apagar($_GET['idInstrutor']);

if ($result) {
    header("location: instrutor_listagem.php?status=success");
    die();
}

header("location: instrutor_listagem.php?status=fail");
die();
