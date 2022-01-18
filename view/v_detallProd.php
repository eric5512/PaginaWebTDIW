<a id="return_list">Volver</a>
<div id="detallProducte">
    <p class="pName"><?php echo htmlentities($prod["nom"], ENT_QUOTES | ENT_HTML5, "utf-8") ?></p>
    <img src=<?php echo "'/../images/im-" . htmlentities($prod["producte_id"], ENT_QUOTES | ENT_HTML5, "utf-8") . ".jpg'" ?>>
    <p id="desc"><?php echo htmlentities($prod["descripcio"], ENT_QUOTES | ENT_HTML5, "utf-8") ?></p>
    <h3 id="preu" data-price=<?php echo htmlentities($prod["price"], ENT_QUOTES | ENT_HTML5, "utf-8") ?>><?php echo "Preu: " . htmlentities($prod["price"], ENT_QUOTES | ENT_HTML5, "utf-8") . "€" ?></h3>
    <br/>
    <input type="number" class="quant">
    <input type="number" class="id" value=<?php echo htmlentities($prod["producte_id"], ENT_QUOTES | ENT_HTML5, "utf-8") ?> hidden disabled>
    <button class="addCarro">Añadir al carro</button>
</div>