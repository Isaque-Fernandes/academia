<?php

require_once './usuario_crud.php';

session_start();

$_SESSION['usuarios'] = listarUsuario();