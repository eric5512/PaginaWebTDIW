<?php
    include_once __DIR__."/base.html";
    $page = $_GET['action'] ?? null;
    $logged = (bool)($_GET['logged'] ?? false);
    switch ($page) {
        case '':
            include_once __DIR__."/resource_principal.php";
            break;

        case 'prod':
            include_once __DIR__."/resource_listProd.php";
            break;

        case 'sign_up':
            include_once __DIR__."/resource_signIn.php";
            break;

        case 'log_in':
            include_once __DIR__."/resource_logIn.php";
            break;

        default:
            break;
    }
?>