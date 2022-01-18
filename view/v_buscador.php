<div id="cont">
    <?php foreach ($prods as $prod) {?>
        <div class="dBorder">
    <div class="prod">
        <a title=<?php echo htmlentities($prod["producte_id"], ENT_QUOTES | ENT_HTML5, "utf-8"); ?> href="/index.php?action=prod"><?php echo htmlentities($prod["nom"], ENT_QUOTES | ENT_HTML5, "utf-8"); ?></a>
        <img src=<?php echo "'/../images/im-" . htmlentities($prod["producte_id"], ENT_QUOTES | ENT_HTML5, "utf-8") . ".jpg'"; ?>>
    </div>
</div>
<?php } ?>