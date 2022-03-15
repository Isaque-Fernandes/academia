<?php
require_once('./instrutor_crud.php');


if (
    $_POST['nomeCidade_txt'] == NULL ||
    $_POST['siglaUf_txt'] == NULL ||
    $_POST['bairro_txt'] == NULL ||
    $_POST['rua_txt'] == NULL ||
    $_POST['numero_txt'] == NULL ||
    $_POST['complemento_txt'] == NULL
) {
    header('location: error.php?status=access-deny');
    die();
}

$instrutor = new stdClass();
$instrutor->nomeCidade = $_POST['nomeCidade_txt'];
$instrutor->siglaUf = $_POST['siglaUf_txt'];
$instrutor->siglaUf = $_POST['bairro_txt'];
$instrutor->siglaUf = $_POST['rua_txt'];
$instrutor->siglaUf = $_POST['numero_txt'];
$instrutor->siglaUf = $_POST['complemento_txt'];

if (create($instrutor)) {
    // header("location: conexao.php?status=success");
    echo "Sucesso";
    exit;
} else {
    // header("location: error.php?status=fail");
    echo "Falha";
    exit;
}
