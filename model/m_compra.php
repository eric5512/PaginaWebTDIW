<?php
    function addCompra($conn, $carro, $uid) {
        $total = $carro->totalPrice();
        $data = date("Y-m-d H:i:s");

        $query = $conn->prepare("INSERT INTO comanda (preu, usuari_comanda_id, fecha) VALUES (:preu, :usuari, :fecha)");
        if (!$query->execute(array(':preu'   => $total,
                                   ':usuari' => $uid,
                                   ':fecha'  => $data))) {
            return false;
        }

        $query = $conn->prepare("SELECT comanda_id FROM comanda WHERE usuari_comanda_id = :usuari AND fecha = :fecha");
        if (!$query->execute(array(':usuari' => $uid,
                                   ':fecha'  => $data))) {
            return false;
        }

        $compra_id = $query->fetchAll(PDO::FETCH_ASSOC)[0]['comanda_id'];

        foreach ($carro->items as $pid => list($_, $quant, $price)) {
            $query = $conn->prepare("INSERT INTO producte_comanda (comanda_comanda_id, producte_producte_id, quantitat) VALUES (:comanda, :producte, :quant)");
            if (!$query->execute(array(':comanda'  => $compra_id,
                                       ':producte' => $pid,
                                       ':quant'     => $quant))) {
                return false;
            }
        }

        return $compra_id;
    }
?>