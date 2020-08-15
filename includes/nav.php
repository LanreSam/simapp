


    <ul class="navbar-nav mr-auto">

        <?php 

            foreach ($navItems as $items) {
                echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"$items[slug]\">$items[title] <span class=\"sr-only\">(current)</span></a></li>";
            }
        ?>

    </ul>

    