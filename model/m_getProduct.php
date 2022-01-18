<?php
    function getProd($conn, $id) {
        $query = $conn->prepare("SELECT nom, descripcio, price, producte_id FROM producte WHERE producte_id = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $prod = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($prod) != 1) {
            return false;
        }

        return $prod[0];
    }
?>