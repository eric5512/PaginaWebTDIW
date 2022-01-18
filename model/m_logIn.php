<?php
    function login($conn)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email   = $_POST['correu'];
            $pass    = $_POST['password'];

            $query = $conn->prepare("SELECT password, usuari_id FROM usuari WHERE email=:email");
            $query->execute(array(":email"=>$email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);

            if (count($user) == 0) {
                echo "No hay ningun usuario con esta direccion de correo en la BD";
                return -1;
            }

            if (!password_verify($pass, $user[0]["password"])) {
                echo "Contraseña incorrecta";
                return -1;
            }

            return $user[0]['usuari_id'];
        }
        return -1;
    }
?>