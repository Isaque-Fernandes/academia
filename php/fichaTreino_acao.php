<?php

require_once('./fichaTreino_crud.php');

session_start();



if (isset($_GET['IdUsuarioTreino']) && !empty($_GET['IdUsuarioTreino']) && $_GET['IdUsuarioTreino'] != NULL) {
    $_SESSION['fichaTreino'] = findById($_GET['IdUsuarioTreino']);
} elseif (isset($_GET['fichaTreino_txt']) && !empty($_GET['fichaTreino_txt']) && $_GET['fichaTreino_txt'] != NULL) {
    $_SESSION['fichaTreino'] = fichaTreinoFind($_GET['fichaTreino_txt']);
} else {
    $_SESSION['fichaTreino'] = fichaTreinoGET();
}
