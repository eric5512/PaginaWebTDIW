<?php
    include_once __DIR__."/../db_settings.php";

    function DBconnect() {
        try {
            $conn = new PDO("mysql:host=" . DATABASE::HOST . ";dbname=" . DATABASE::NAME . ";charset=UTF8", DATABASE::USER, DATABASE::PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error al conectarse en la base de datos: " . $e;
        }
        return ($conn);
    }
?>