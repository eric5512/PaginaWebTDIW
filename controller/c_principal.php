<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_getCategorias.php";

    $conn = DBconnect();
    $categorias = getCategorias($conn);

    include_once __DIR__."/../view/v_principal.php";
?>