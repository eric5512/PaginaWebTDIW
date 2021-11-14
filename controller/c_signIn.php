<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_signIn.php";

    $conn = DBconnect();
    if (signIn($conn)) {
        header("Location: " . $_SERVER['PHP_SELF'] . "?logged=true");
    }

    include_once __DIR__."/../view/v_signIn.php";
?>