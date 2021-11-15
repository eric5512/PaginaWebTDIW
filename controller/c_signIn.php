<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_signIn.php";

    $conn = DBconnect();
    if (signIn($conn)) {
        $_SESSION['log'] = true;
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    include_once __DIR__."/../view/v_signIn.php";
?>