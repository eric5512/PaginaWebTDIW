<div id='outer'>
    <div id="barra_filtro">
        <label for="categorias">Filtrar por categorias: </label>
        <select id="categoria_filter" >
            <option value='all' <?php if ($c === false) echo "selected"; ?>>Todas las categorias </option>
            <?php foreach ($categorias as $cat) {?>
                <option <?php echo "value='".htmlentities($cat['categoria_id'], ENT_QUOTES | ENT_HTML5, "utf-8")."'"; ?> <?php if ($c == $cat['categoria_id']) echo "selected"; ?>><?php echo $cat["nom"] ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div id="cont">
            <?php foreach ($prods as $prod) {?>
                <div class="dBorder">
            <div class="prod">
                <a title=<?php echo htmlentities($prod["producte_id"], ENT_QUOTES | ENT_HTML5, "utf-8"); ?> class="goto_detall"><?php echo htmlentities($prod["nom"], ENT_QUOTES | ENT_HTML5, "utf-8"); ?></a>
                <img src=<?php echo "'/../images/im-" . htmlentities($prod["producte_id"], ENT_QUOTES | ENT_HTML5, "utf-8") . ".jpg'"; ?>>
            </div>
        </div>
        <?php } ?>
    </div>
    
</div>