<?php
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_compra.php";

    $conn = DBconnect();

    $carro = unserialize($_SESSION['carro']);

    $compra_id = addCompra($conn, $carro, $_SESSION['uid']);

    if ($compra_id === false) {
        echo "Algo ha salido mal durante el proceso de compra";
    } else {
        include_once __DIR__."/../view/v_compra.php";
        $_SESSION['carro'] = serialize(new Carro());
    }

?>