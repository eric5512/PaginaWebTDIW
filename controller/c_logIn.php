<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_logIn.php"; 

    $conn = DBconnect();
    $uid  = login($conn);
    if ($uid !== -1) {
        $_SESSION['log'] = true;
        $_SESSION['uid'] = intval($uid);
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    include_once __DIR__."/../view/v_logIn.php"; 
?>