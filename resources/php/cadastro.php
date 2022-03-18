<?php

session_start(); //serve pra poder trabalhar com sessão. deve sempre ser primeiro elemento
include_once("conexao.php");

        $login = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha') ;

        

        $result = "Insert into instrutores (email,senha) VALUES ('$email', '$senha')";
        $resultado = mysqli_query($connect, $result);

    
        if(mysqli_insert_id($connect)) {
            $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
            header("Location: ../../index.html");
        } else {
            $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
            header("Location: ../../cadastro.html");
        }
// ta certo assim antes do erro