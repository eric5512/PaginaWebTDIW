<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_logIn.php"; 

    $conn = DBconnect();
    if (login($conn)) {
        $_SESSION['log'] = true;
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    include_once __DIR__."/../view/v_logIn.php"; 
?>