<div id='outer'>
    <div id="barra_filtro">
        <label for="categorias">Filtrar por categorias: </label>
        <select id="categoria_filter" >
            <option value='all' <?php if ($c === false) echo "selected"; ?>>Todas las categorias </option>
            <?php foreach ($categorias as $cat) {?>
                <option <?php echo "value='".$cat['categoria_id']."'"; ?> <?php if ($c == $cat['categoria_id']) echo "selected"; ?>><?php echo $cat["nom"] ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div id="cont">
            <?php foreach ($prods as $prod) {?>
                <div class="dBorder">
            <div class="prod">
                <a title=<?php echo $prod["producte_id"]; ?> class="goto_detall"><?php echo $prod["nom"]; ?></a>
                <img src=<?php echo "'/../images/im-" . $prod["producte_id"] . ".jpg'"; ?>>
            </div>
        </div>
        <?php } ?>
    </div>
    
</div>