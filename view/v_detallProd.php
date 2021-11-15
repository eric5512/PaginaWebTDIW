<body>
    <a id="return_list">Volver</a>
    <div id="detallProducte">
        <p id="pName"><?php echo $prod["nom"] ?></p>
        <img src=<?php echo "'/../images/im-" . $prod["producte_id"] . ".jpg'" ?>>
        <p id="desc"><?php echo $prod["descripcio"] ?></p>
        <h3 id="preu"><?php echo "Preu: " . $prod["price"] . "€" ?></h3>
    </div>
</body>