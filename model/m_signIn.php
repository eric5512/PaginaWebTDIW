<?php
    function signIn($conn) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom     = $_POST['nom'];
            $cognoms = $_POST['cognoms'];
            $pass    = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email   = $_POST['correu'];
            $cp      = $_POST['number'];
            $carrer  = $_POST['adresa'];

            $query = $conn->prepare("SELECT email FROM usuari WHERE email=:email");

            if (!$query->execute(array(":email" => $email))) {
                echo "Error ejecutando la consulta";
                return false;
            }
            
            if ($query->rowCount() > 0) {
                echo "El correo electronico ya esta en la base de datos";
                return false;
            }

            $query = $conn->prepare("INSERT INTO usuari (nom, cognoms, password, email, cp, carrer) VALUES (:nom, :cognoms, :password, :email, :cp, :carrer)");

            if (!$query->execute(array(":nom"=> $nom, ":cognoms"=> $cognoms, ":password"=> $pass, ":email"=> $email, ":cp"=> $cp, ":carrer"=> $carrer))) {
                echo "Error ejecutando la consulta";
                return false;
            }

            return true;
        }
        return false;
    }
?>