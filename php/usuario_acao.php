<?php

require_once("./usuario_crud.php");




session_start();


if (isset($_GET['idUsuario']) && !empty($_GET['idUsuario']) && $_GET['idUsuario'] != NULL) {
    $_SESSION['usuarios'] = findById($_GET['idUsuario']);
} elseif (isset($_GET['usuario_txt']) && !empty($_GET['usuario_txt']) && $_GET['usuario_txt'] != NULL) {
    $_SESSION['usuarios'] = usuarioFind($_GET['usuario_txt']);
} else {
    $_SESSION['usuarios'] = listarUsuario();
}
