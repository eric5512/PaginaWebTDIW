<?php
    function get_udata($conn, $uid) {
        $query = $conn->prepare("SELECT nom, cognoms, password, email, cp, carrer FROM usuari WHERE usuari_id=:id");
        $query->bindValue(':id', $uid, PDO::PARAM_INT);
        $query->execute();
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $user[0];
    }

    function modify($conn, $uid) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && strlen($_POST['password']) >= 4) {
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

            $query = $conn->prepare("UPDATE usuari SET nom = :nom, cognoms = :cognoms, password = :password, email = :email, cp = :cp, carrer = :carrer WHERE usuari_id = :id");

            if (!$query->execute(array(":nom"=> $nom, ":cognoms"=> $cognoms, ":password"=> $pass, ":email"=> $email, ":cp"=> $cp, ":carrer"=> $carrer, ":id"=> $uid))) {
                echo "Error ejecutando la consulta";
                return false;
            }

            return true;
        }
        return false;
    }
?>