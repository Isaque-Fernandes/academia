<?php
require_once("./instrutor_crud.php");


if (
    $_POST['cpf_txt'] == NULL ||
    $_POST['nomeInstrutor_txt'] == NULL ||
    $_POST['dataNascimento_txt'] == NULL ||
    $_POST['email_txt'] == NULL ||
    $_POST['telefone_txt'] == NULL ||
    $_POST['cidade_txt'] == NULL ||
    $_POST['siglaUf_txt'] == NULL  ||
    $_POST['bairro_txt'] == NULL ||
    $_POST['rua_txt'] == NULL ||
    $_POST['numero_txt'] == NULL ||
    $_POST['complemento_txt'] == NULL
) {
    header('location: erro.php?status=access-deny');
    die();
}

$instrutor = new stdClass();
$instrutor->cpf = $_POST['cpf_txt'];
$instrutor->nomeInstrutor = $_POST['nomeInstrutor_txt'];
$instrutor->dataNascimento = $_POST['dataNascimento_txt'];
$instrutor->email = $_POST['email_txt'];
$instrutor->telefone = $_POST['telefone_txt'];
$instrutor->cidade = $_POST['cidade_txt'];
$instrutor->siglaUf = $_POST['siglaUf_txt'];
$instrutor->bairro = $_POST['bairro_txt'];
$instrutor->rua = $_POST['rua_txt'];
$instrutor->numero = $_POST['numero_txt'];
$instrutor->complemento = $_POST['complemento_txt'];


if (instrutorCreate($instrutor)) {
    header("location: instrutor_redirecionador_listagem.php?status=success");

    exit;
} else {
    header("location: erro.php?status=fail");
    echo "Falha";
    exit;
}
