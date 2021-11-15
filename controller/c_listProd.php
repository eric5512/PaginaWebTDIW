<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_getProducts.php"; 
    include_once __DIR__."/../model/m_getCategorias.php"; 

    $c = $_GET['cat'] ?? 'all';

    if ($c === "all") $c = false;

    $conn = DBconnect();
    $prods = getProds($conn, $c);
    $categorias = getCategorias($conn);

    include_once __DIR__."/../view/v_listProd.php";
?>