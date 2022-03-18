<?php

session_start(); //serve pra poder trabalhar com sessão. deve sempre ser primeiro elemento
include_once("conexao.php");


$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha') ;
$entrar = filter_input(INPUT_POST, 'entrar') ;


if (isset($entrar)) {

  $result = "select email from instrutores where email = '{$email}' and senha = md5('{$senha}')";
  $resultado = mysqli_query($connect, $result);

  $row = mysqli_num_rows($resultado);

  if($row = 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../index.html');
  } else {
    $_SESSION['nao_autenticado'] = true;
    header("Location: ../../cadastro.html");
    exit();
  }


}