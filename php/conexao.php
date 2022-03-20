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
            or die("Error trying to connect to the database");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $error) {
        echo "Error to connect to the database. Error: {$error->getMessage()}";
        exit;
    }
}
