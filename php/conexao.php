<?php

define("__HOST__", "localhost");
define("__USER__", "root");
define("__PASS__", "");
define("__DATABASE__", "academia");

function getConnection()
{

    try {
        $key = 'strval';
        $con = new PDO("mysql:host={$key(__HOST__)}; dbname={$key(__DATABASE__)}", __USER__, __PASS__)
            or die("Erro ao tentar conectar no banco de dados");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $erro) {
        echo "Erro ao conectar ao banco. Erro: {$erro->getMessage()}";
        exit;
    }
}
