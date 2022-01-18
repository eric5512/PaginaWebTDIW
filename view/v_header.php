<div id="menu_header">
    <?php echo "<a href='".$_SERVER['PHP_SELF']."'>
        <img id='logo' src='https://toppng.com/uploads/preview/under-construction-png-11552942307mimddiktuq.png'></a>"
    ?>
    <P id="textH">Tienda de electronica generica</P>
    <ul id="menu_desp">
        <li><img id='session' src='https://e7.pngegg.com/pngimages/549/560/png-clipart-computer-icons-login-scalable-graphics-email-accountability-blue-logo.png'></li>
        <div id="desp">
            <?php if ($_SESSION['log'] == false) { ?>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=log_in'"; ?> >Login</a></li>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=sign_up'"; ?>>Sign up</a></li>
            <?php } else { ?>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=perfil'"; ?>>Perfil</a></li>
                <li><a id="open-modal">Carro</button></li>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=log_out'"; ?> >Log out</a></li>
            <?php }?>
        </div>
    </ul>
    <form id="buscador" method="post" action="/index.php?action=search">
        <input type="text", name="search">
        <input type="submit" value="Buscar">
    </form>
</div>

<div id="modal-carro" class="modal">
    <div class="modal-content">
        <span id="close-modal" class="close">&times;</span>
        <h1>Carro</h1>
        <div id="modal-data">
            <?php
                $total = 0;
                foreach ($carro->items as $id => list($name, $quant, $pu)) {
                    $total += $quant * $pu;
                    echo "<br/>\n<div>$name<br/>Precio unitario: $pu €<br/>Cantidad: <input type='number' id='quant-$id' value='$quant'></input>";
                    echo "<button class='modCarro' value='$id'>Modificar cantidad</button>";
                    echo "<button class='rmCarro' value='$id'>Eliminar del carro</button></div><br/>";
                }
                
                if (count($carro->items) != 0) {
                    echo "<p>Precio total: $total €</p>";
                    echo "<a href='" . $_SERVER['PHP_SELF'] . "?action=comprar'" . ">Comprar</a>";
                    echo "<button id='vaciarCarro'>Vaciar carro</button>";
                } else {
                    echo "<h2>Parece que aun no has añadido nada al carro</h2>";
                }
            ?>
        </div>
    </div>
</div>