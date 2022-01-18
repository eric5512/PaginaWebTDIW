<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_signIn.php";

    $conn = DBconnect();
    $uid  = signIn($conn);
    if ($uid !== -1) {
        $_SESSION['log'] = true;
        $_SESSION['uid'] = $uid;
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    include_once __DIR__."/../view/v_signIn.php";
?>