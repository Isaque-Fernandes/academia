<?php

    require_once('./usuario_crud.php');

    
    if (
        $_POST['txtID'] == NULL ||
        $_POST['txtNome'] == NULL ||
        $_POST['txtCpf'] == NULL ||
        $_POST['txtEmail'] == NULL ||
        $_POST['txtTelefone'] == NULL ||
        $_POST['txtDataNascimento'] == NULL ||
        $_POST['txtAtestadoMedico'] == NULL ||
        $_POST['txtComentario'] == NULL ||
        $_POST['txtDataInicio'] == NULL 
        

    ){
        header('location: usuario_erro.php?status=access-deny');
        die();
    }

    $usuario = new stdClass();
    $usuario-> idUsuario = $_POST['txtID'];
    $usuario-> nome = $_POST['txtNome'];
    $usuario-> cpf = $_POST['txtCpf'];
    $usuario-> email = $_POST['txtEmail'];
    $usuario-> telefone = $_POST['txtTelefone'];
    $usuario-> dataNascimento = $_POST['txtDataNascimento'];
    $usuario-> atestadoMedico = $_POST['txtAtestadoMedico'];
    $usuario-> comentario = $_POST['txtComentario'];
    $usuario-> dataInicio = $_POST['txtDataInicio'];


    if (atualizarUsuario($usuario)) {
        header("location: usuario_lista.php?status=success");
        exit;
    } else {
        header("location: usuario_edicao_form.php?status=fail");
        exit;
    }