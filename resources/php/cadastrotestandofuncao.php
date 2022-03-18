<?php

session_start(); //serve pra poder trabalhar com sessão. deve sempre ser primeiro elemento
include_once("conexao.php");

        $email = filter_input(INPUT_POST, 'email');
        $senha = MD5($_POST['senha']);

        // $senha = filter_input(INPUT_POST, 'senha') ;



        $result = "SELECT email FROM instrutores WHERE email = '$email'";
        $resultado = mysqli_query($connect, $result);
        $array = mysqli_fetch_array($resultado);
        $logarray = $array['email'];


        //$query_select = "SELECT login FROM usuarios WHERE login = '$login'";

        //$select = mysql_query($query_select,$connect);
        
        //$array = mysql_fetch_array($select);
        
        //$logarray = $array['login'];
        
         
        
          if($email == "" || $email == null){
        
            echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.history.back();</script>";
        
            }else{
        
              if($logarray == $email){
        
                echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.history.back();</script>";
        
                die();
        
         
        
              }else{

                //$resultt = "INSERT INTO instrutores (email,senha) VALUES ('$email','$senha')";
                //$resultadot = mysqli_query($connect, $resultt);
        
        
                $query = "INSERT INTO instrutores (email,senha) VALUES ('$email','$senha')";

                $insert = mysql_query($query,$connect);

                //if(mysqli_insert_id($connect))

                if($insert){

                  //echo"<script language='javascript' type='text/javascript'>alert('Instrutor cadastrado com sucesso!');window.location: ../../index.html'</script>";
                  $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
                  header("Location: ../../index.html");

                }else{
        
                  //echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse Instrutor');window.history.back();</script>";
                  $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
                  header("Location: ../../cadastro.html");
                }
        
              }
        
            }
        
        ?>