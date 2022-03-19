<?php
require_once("./fichaTreino_crud.php");

// cpf, nomeInstrutor, dataNascimento, email, telefone, cidade, siglaUf, bairro, rua, numero, complemento
if (
    $_POST['id_usuario_txt'] == NULL ||
    $_POST['id_instrutor_txt'] == NULL 

) {
    header('location: erro.php?status=access-deny');
    die();
}

$fichaTreino = new stdClass();
$fichaTreino->id_usuario = $_POST['id_usuario_txt'];
$fichaTreino->id_instrutor = $_POST['id_instrutor_txt'];


if (fichaTreinoCreate($fichaTreino)) {
    header("location: fichaTreino_redirecionador_listagem.php?status=success");

    exit;
} else {
    header("location: erro.php?status=fail");
    exit;
}
