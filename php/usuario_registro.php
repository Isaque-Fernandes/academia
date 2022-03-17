<?php 
    require_once('./usuario_acao.php');

    if (
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
    $usuario-> nome = $_POST['txtNome'];
    $usuario-> cpf = $_POST['txtCpf'];
    $usuario-> email = $_POST['txtEmail'];
    $usuario-> telefone = $_POST['txtTelefone'];
    $usuario-> dataNascimento = $_POST['txtDataNascimento'];
    $usuario-> atestadoMedico = $_POST['txtAtestadoMedico'];
    $usuario-> comentario = $_POST['txtComentario'];
    $usuario-> dataInicio = $_POST['txtDataInicio'];
   
    
    if(addUsuario($usuario)){
        echo "Sucesso no cadastro";
        exit;
    }else{
        echo "Erro no cadastro";
        exit;
    }