<?php
    session_start();

    include_once __DIR__."/../lib/carro.php";

    $mode = $_GET['mode'] ?? "";

    if ($mode == "add") {
        $id    = $_GET['id'] ?? NULL;
        $name  = $_GET['name'] ?? NULL;
        $quant = $_GET['quant'] ?? NULL;

        if ($id != NULL && $name != NULL && $quant != NULL) {
            $carro = unserialize($_SESSION['carro']);
            $carro->addItem($id, $name, $quant);
            $_SESSION['carro'] = serialize($carro);
            echo "Producto añadido al carrito correctamente";
        }
    } else if ($mode == "modify") {
        $id    = $_GET['id'] ?? NULL;
        $new_quant = $_GET['quant'] ?? NULL;

        if ($id != NULL && $new_quant != NULL) {
            $carro = unserialize($_SESSION['carro']);
            $carro->modifyQuant($id, $new_quant);
            $_SESSION['carro'] = serialize($carro);
            echo "Cantidad modificada correctamente";
        }
    } else if ($mode == "rm-all") {
        $_SESSION['carro'] = serialize(new Carro());
        echo "Producto/s eliminado con exito";
    } else if ($mode == "rm-id") {
        $id = $_GET['id'] ?? NULL;

        if ($id != NULL) {
            $carro = unserialize($_SESSION['carro']);
            $carro->removeItem($id);
            $_SESSION['carro'] = serialize($carro);
            echo "Producto eliminado con exito";
        }
    } else if ($mode == "") {
        echo "ERROR";
    }
?>