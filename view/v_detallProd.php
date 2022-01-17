<body>
    <a id="return_list">Volver</a>
    <div id="detallProducte">
        <p class="pName"><?php echo $prod["nom"] ?></p>
        <img src=<?php echo "'/../images/im-" . $prod["producte_id"] . ".jpg'" ?>>
        <p id="desc"><?php echo $prod["descripcio"] ?></p>
        <h3 id="preu"><?php echo "Preu: " . $prod["price"] . "€" ?></h3>
        <br/>
        <input type="number" class="quant">
        <input type="number" class="id" value=<?php echo $prod["producte_id"]?> hidden disabled>
        <button class="addCarro">Añadir al carro</button>
    </div>
</body>