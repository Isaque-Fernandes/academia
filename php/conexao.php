<?php
define("__SERVER__", "localhost");
define("__USER__", "root");
define("__PASS__", "");
define("__DB__", "academia");
define("__PORT__", 3306);

function getConnection()
{
    $link = mysqli_connect(__SERVER__, __USER__, __PASS__, __DB__, __PORT__);
    mysqli_set_charset($link, "utf8");
    return $link;
}
