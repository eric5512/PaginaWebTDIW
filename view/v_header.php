<div id="menuP">
    <?php echo "<a href='".$_SERVER['PHP_SELF']."'>
        <img id='logo' src='https://toppng.com/uploads/preview/under-construction-png-11552942307mimddiktuq.png'></a>"
    ?>
    <P id="textH">ALGO MEDIANAMENTE LARGO DE PRUEBA</P>
    <ul>
        <li class="itemsH"><button onclick="changeVisibility('desp1')">Opcio 1</button></li>
        <div id="desp1" class="desplegable">
            <li class="auxList">elem1</li>
            <li class="auxList">elem2</li>
            <li class="auxList">elem3</li>
        </div>
        <li class="itemsH"><button onclick="changeVisibility('desp2')">Opcio 2</button></li>
        <div id="desp2" class="desplegable">
            <li class="auxList">elem1</li>
            <li class="auxList">elem2</li>
            <li class="auxList">elem3</li>
        </div>
        <li class="itemsH"><button onclick="changeVisibility('desp3')">Opcio 3</button></li>
        <div id="desp3" class="desplegable">
            <li class="auxList">elem1</li>
            <li class="auxList">elem2</li>
            <li class="auxList">elem3</li>
        </div>
    </ul>
    
    <ul>
        <li class="itemsH"><img id='session' src='https://e7.pngegg.com/pngimages/549/560/png-clipart-computer-icons-login-scalable-graphics-email-accountability-blue-logo.png'
            onclick='changeVisibility("desp4")'></li>
        <div id="desp4" class="desplegable">
            <li class="auxList"><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=log_in'"; ?> >Log in</a></li>
            <li class="auxList"><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=sign_in'"; ?>>Sign in</a></li>
        </div>
    </ul>
    
</div>