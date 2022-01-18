<?php 
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_getProducts.php";

    $conn  = DBconnect();
    $prods = getProds($conn, false);
    $prods = array_filter($prods, function($x) {
        return str_contains($x['nom'], $_POST['search'] ?? "");
    });

    include_once __DIR__."/../view/v_buscador.php";
?>