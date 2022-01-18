<?php
    function getProds($conn, $categoria) {
        if ($categoria === false) {
            $query = $conn->prepare("SELECT nom, descripcio, price, producte_id FROM producte");
            $query->execute();
            return ($query->fetchAll(PDO::FETCH_ASSOC));
        } else {
            $query = $conn->prepare("SELECT nom, descripcio, price, producte_id FROM producte, producte_categoria WHERE producte_id = producte_producte_id AND categoria_categoria_id = :id");
            $query->bindValue(':id', $categoria, PDO::PARAM_INT);
            $query->execute();
            return ($query->fetchAll(PDO::FETCH_ASSOC));
        }
    }
?>