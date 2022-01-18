<form id="formulario" method="post">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" value=<?php echo '"' .  htmlentities($user['nom'], ENT_QUOTES | ENT_HTML5, "utf-8") . '"' ?> required><br>
    <label for="cognoms">Cognoms: </label><br>
    <input type="text" id="cognoms" name="cognoms" value=<?php echo '"' . htmlentities($user['cognoms'], ENT_QUOTES | ENT_HTML5, "utf-8") . '"' ?> required><br>
    <label for="email">Correu Electronic: </label><br>
    <input type="email" id="correu" name="correu" value=<?php echo htmlentities($user['email'], ENT_QUOTES | ENT_HTML5, "utf-8") ?> pattern="\w+@\w+\.\w+" required><br>
    <label for="password">Contrasenya: </label><br>
    <input type="password" id="password" name="password" pattern=".{4,}" required><br>
    <label for="adresa">Adreça: </label><br>
    <input type="text" id="adresa" name="adresa" value=<?php echo '"' . htmlentities($user['carrer'], ENT_QUOTES | ENT_HTML5, "utf-8") . '"'; ?> required><br>
    <label for="CP">Codi Postal: </label><br>
    <input type="number" id="number" name="number" value=<?php echo htmlentities($user['cp'], ENT_QUOTES | ENT_HTML5, "utf-8") ?> pattern="[0-9]{5}" required><br><br>
    <input type="submit" value="Modificar dades">
</form>