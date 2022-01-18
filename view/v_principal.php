<body>
    <h3>Random text</h3>
    <div id="containers">
        <div id="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> 
                Nam sit amet finibus turpis, et lobortis sem. Mauris viverra lorem urna, at lobortis diam mollis a.<br>
                Suspendisse nec dolor erat. Vestibulum ultrices leo eget lectus hendrerit, in dictum felis ultricies.<br>
                Etiam sit amet leo et sapien malesuada vulputate ut id nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
                Fusce ut felis sem. Mauris dapibus orci non justo imperdiet lacinia vel nec felis.<br>
                Vivamus tincidunt quam dictum, commodo eros at, pharetra lectus. Duis quis laoreet magna.<br><br>

                Sed sagittis odio ac dui elementum pellentesque. Nullam blandit faucibus augue ut egestas.<br>
                Pellentesque in urna imperdiet, faucibus ligula auctor, pulvinar quam. Proin sit amet neque sed turpis volutpat varius.<br>
                Donec luctus magna quis lectus pharetra cursus. Nam in ante non ipsum viverra vehicula et sed ipsum. Duis vitae semper sem.<br>
                Ut non tortor vitae leo mattis tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br>
                Donec lacinia quam nisi, sit amet porta ipsum sagittis lobortis. Integer non odio id purus scelerisque bibendum.<br>
                Mauris suscipit purus vehicula augue volutpat pretium. Integer sit amet sollicitudin mi.<br>
                Sed ornare augue sodales metus dapibus, a aliquam quam imperdiet. Etiam ultrices volutpat mi, blandit rutrum orci efficitur venenatis.<br><br>
                
                Aenean facilisis odio non magna suscipit, sit amet volutpat arcu auctor. Ut cursus non est id placerat.<br>
                Ut eleifend, quam nec rhoncus faucibus, urna nulla porta erat, fermentum bibendum nisl magna quis ipsum.<br>
                Aliquam erat volutpat. Etiam ultricies mi ac turpis consequat vestibulum. Etiam tincidunt efficitur urna.<br>
                Suspendisse justo neque, dictum at pretium eu, tincidunt vitae turpis. Pellentesque sit amet metus leo. Maecenas egestas a ipsum eu molestie.<br>
                Nam interdum nisi nec sapien semper, vel mattis justo commodo.<br><br>

            </p>
        </div>

        <div id="categories">
            <ul>
                <li><a <?php echo "href='".$_SERVER['PHP_SELF']."?action=prod'"; ?> >Todos los productos</a></li>
                <?php foreach ($categorias as $cat) {
                    $nom = htmlentities($cat['nom'], ENT_QUOTES | ENT_HTML5, "utf-8");
                    $categoria_id = $cat['categoria_id'];
                    echo "<li><a echo " . "href='".$_SERVER['PHP_SELF']."?action=prod&&cat=$categoria_id'";
                    echo ">$nom</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>