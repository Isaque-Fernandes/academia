<?php 
    require_once ("./usuario_crud.php");

    if (
        $_POST['nomeUsuario_txt'] == NULL ||
        $_POST['cpf_txt'] == NULL ||
        $_POST['email_txt'] == NULL ||
        $_POST['telefone_txt'] == NULL ||
        $_POST['dataNascimento_txt'] == NULL ||
        $_POST['atestadoMedico_txt'] == NULL ||
        $_POST['comentario_txt'] == NULL ||
        $_POST['dataInicio_txt'] == NULL 
        

    ){
        header('location: usuario_erro.php?status=access-deny');
        die();
    }

    $usuario = new stdClass();
    $usuario-> nomeUsuario = $_POST['nomeUsuario_txt'];
    $usuario-> cpf = $_POST['cpf_txt'];
    $usuario-> email = $_POST['email_txt'];
    $usuario-> telefone = $_POST['telefone_txt'];
    $usuario-> dataNascimento = $_POST['dataNascimento_txt'];
    $usuario-> atestadoMedico = $_POST['atestadoMedico_txt'];
    $usuario-> comentario = $_POST['comentario_txt'];
    $usuario-> dataInicio = $_POST['dataInicio_txt'];
   
    
    if(addUsuario($usuario)){
        echo "Sucesso no cadastro";
        exit;
    }else{
        echo "Erro no cadastro";
        exit;
    }