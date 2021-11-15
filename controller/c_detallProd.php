<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_getProduct.php"; 

    $id = $_GET['prod'] ?? false;

    if ($id === false) {
        return false;
    }

    $conn = DBconnect();
    $prod = getProd($conn, $id);

    if ($prod === false) {
        echo "Producto no disponible";
    } else {
        include_once __DIR__."/../view/v_detallProd.php";
    }
?>