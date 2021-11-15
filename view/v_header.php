<div id="menu_header">
    <?php echo "<a href='".$_SERVER['PHP_SELF']."'>
        <img id='logo' src='https://toppng.com/uploads/preview/under-construction-png-11552942307mimddiktuq.png'></a>"
    ?>
    <P id="textH">ALGO MEDIANAMENTE LARGO DE PRUEBA</P>
    <ul id="menu_desp">
        <li><img id='session' src='https://e7.pngegg.com/pngimages/549/560/png-clipart-computer-icons-login-scalable-graphics-email-accountability-blue-logo.png'></li>
        <div id="desp">
            <?php if ($_SESSION['log'] == false) { ?>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=log_in'"; ?> >Login</a></li>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=sign_up'"; ?>>Sign up</a></li>
            <?php } else { ?>
                <li><a href='#'>Perfil</a></li>
                <li><a href='#'>Carro</a></li>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=log_out'"; ?> >Log out</a></li>
            <?php }?>
        </div>
    </ul>
</div>