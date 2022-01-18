<?php
    include_once __DIR__."/lib/carro.php";
    $page = $_GET['action'] ?? null;
    session_start();
    $_SESSION['log']   = $_SESSION['log'] ?? false;
    $_SESSION['carro'] = $_SESSION['carro'] ?? serialize(new Carro());
    switch ($page) {
        case '':
            include_once __DIR__."/resource_principal.php";
            break;

        case 'prod':
            include_once __DIR__."/resource_listProd.php";
            break;

        case 'detall_prod':
            include_once __DIR__."/resource_detallProd.php";
            break;

        case 'sign_up':
            include_once __DIR__."/resource_signIn.php";
            break;

        case 'log_in':
            include_once __DIR__."/resource_logIn.php";
            break;
        
        case 'log_out':
            include_once __DIR__."/controller/c_logOut.php";
            break;

        case 'perfil':
            include_once __DIR__."/resource_perfil.php";
            break;

        case 'comprar':
            include_once __DIR__."/resource_compra.php";
            break;

        case 'search':
            include_once __DIR__."/resource_busqueda.php";
            break;
        
        default:
            break;
    }
?>