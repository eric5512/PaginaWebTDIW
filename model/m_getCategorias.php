<?php
    function getCategorias($conn) {
        $query = $conn->prepare("SELECT nom, categoria_id FROM categoria");
        $query->execute();

        return ($query->fetchAll(PDO::FETCH_ASSOC));
    }
?>