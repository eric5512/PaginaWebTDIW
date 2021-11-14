<?php
    function signIn($conn) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom     = $_POST['nom'];
            $cognoms = $_POST['cognoms'];
            $pass    = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email   = $_POST['correu'];
            $cp      = $_POST['number'];
            $carrer  = $_POST['adresa'];

            $query = $conn->prepare("INSERT INTO usuari (nom, cognoms, password, email, cp, carrer) VALUES (:nom, :cognoms, :password, :email, :cp, :carrer)");

            if (!$query->execute(array(":nom"=> $nom, ":cognoms"=> $cognoms, ":password"=> $pass, ":email"=> $email, ":cp"=> $cp, ":carrer"=> $carrer))) {
                echo "Error ejecutando la consulta";
            }
        }

    }
?>