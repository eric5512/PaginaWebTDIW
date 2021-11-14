<html>
    <body>
        <h1>Formulario de registro</h1>
        <form id="formulario" method="post">
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" required><br>
            <label for="cognoms">Cognoms: </label><br>
            <input type="text" id="cognoms" name="cognoms" required><br>
            <label for="email">Correu Electronic: </label><br>
            <input type="email" id="correu" name="correu" pattern="\w+@\w+\.\w+" required><br>
            <label for="password">Contrasenya: </label><br>
            <input type="password" id="password" name="password" required><br>
            <label for="adresa">Adresa: </label><br>
            <input type="text" id="adresa" name="adresa" required><br>
            <label for="CP">Codi Postal: </label><br>
            <input type="number" id="number" name="number" pattern="[0-9]{5}" required><br><br>
            <input type="submit" value="Enviar!">
        </form>
    </body>
</html>