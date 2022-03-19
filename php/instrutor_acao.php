<?php

require_once('./instrutor_crud.php');

session_start();


if (isset($_GET['idInstrutores']) && !empty($_GET['idInstrutores']) && $_GET['idInstrutores'] != NULL) {
    $_SESSION['instrutores'] = findById($_GET['idInstrutores']);
} elseif (isset($_GET['instrutor_txt']) && !empty($_GET['instrutor_txt']) && $_GET['instrutor_txt'] != NULL) {
    $_SESSION['instrutores'] = instrutorFind($_GET['instrutor_txt']);
    
} else {
    $_SESSION['instrutores'] = instrutorGET();
}
