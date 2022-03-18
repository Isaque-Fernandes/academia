<?php

    #define("CHAVE","VALOR");
    $server = "localhost";
    $usuario = "root";
    $password = "";
    $db = "login_e_senha";
    $port = "3388";


        /**
         * mysqli_connect() -> conecta a base de dados
         * com os valores de acesso informados.
         */
    
        $connect = mysqli_connect($server, $usuario, $password, $db, $port);
        mysqli_set_charset($connect, "utf8");
    