<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_modify.php";

    $conn = DBconnect();
    if (modify($conn, $_SESSION['uid'])) {
        header("Location: " . $_SERVER['PHP_SELF']);
    } else {
        $user = get_udata($conn, $_SESSION['uid']);
    }

    include_once __DIR__."/../view/v_perfil.php";
?>