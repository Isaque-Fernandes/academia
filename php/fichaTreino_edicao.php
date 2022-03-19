<?php

require_once('./fichaTreino_crud.php');

if (
    $_POST['idUsuarioTreino_txt'] == NULL ||
    $_POST['id_usuario_txt'] == NULL ||
    $_POST['id_instrutor_txt'] == NULL


) {
    header('location: erro.php?status=access-deny');
    die();
}

$fichaTreino = new stdClass();
$fichaTreino->idUsuarioTreino = $_POST['idUsuarioTreino_txt'];
$fichaTreino->id_usuario = $_POST['id_usuario_txt'];
$fichaTreino->id_instrutor = $_POST['id_instrutor_txt'];


if (update($fichaTreino)) {
    header("location: fichaTreino_redirecionador_listagem.php?status=success");
    exit;
} else {
    header("location: fichaTreino_edicao_formulario.php?status=fail");
    exit;
}
