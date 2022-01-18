<?php
    session_start();

    include_once __DIR__."/../lib/carro.php";
    include_once __DIR__."/../model/m_DBconnect.php";
    include_once __DIR__."/../model/m_getProduct.php";

    $mode = $_GET['mode'] ?? "";

    $carro = new Carro();

    if ($mode == "add") {
        $id    = $_GET['id'] ?? NULL;
        $quant = $_GET['quant'] ?? NULL;

        $conn = DBconnect();
        $prod = getProd($conn, $id);

        $name = $prod['nom'];
        $pu   = $prod['price'];

        if ($id != NULL && $name != NULL && $quant != NULL && $pu != NULL) {
            $carro = unserialize($_SESSION['carro']);
            $carro->addItem($id, $name, $quant, $pu);
            $_SESSION['carro'] = serialize($carro);
        }
    } else if ($mode == "modify") {
        $id    = $_GET['id'] ?? NULL;
        $new_quant = $_GET['quant'] ?? NULL;

        if ($id != NULL && $new_quant != NULL) {
            $carro = unserialize($_SESSION['carro']);
            if ($carro->modifyQuant($id, $new_quant)) {
                $_SESSION['carro'] = serialize($carro);
            }
        }
    } else if ($mode == "rm-all") {
        $carro = new Carro();
        $_SESSION['carro'] = serialize($carro);
    } else if ($mode == "rm-id") {
        $id = $_GET['id'] ?? NULL;

        if ($id != NULL) {
            $carro = unserialize($_SESSION['carro']);
            $carro->removeItem($id);
            $_SESSION['carro'] = serialize($carro);
        }
    } else if ($mode == "") {
        echo "ERROR";
    }
    include_once __DIR__."/../view/v_carro.php";

?>