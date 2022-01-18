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
        echo "<a href='/index.php?action=comprar'" . ">Comprar</a>";
        echo "<button id='vaciarCarro'>Vaciar carro</button>";
    } else {
        echo "<h2>Parece que aun no has añadido nada al carro</h2>";
    }
?>