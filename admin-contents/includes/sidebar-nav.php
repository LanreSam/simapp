<ul class="navbar-nav flex-column mt-4">
        <?php 

            foreach ($sidebar_items as $side_items) {
                echo "<li class=\"nav-item\"><a href=\"$side_items[slug]\" class=\"nav-link text-white p-3 mb-2\" id=\"current\"><img src=\"$side_items[src]\" width=\"30\" class=\"mr-3\"> $side_items[title]</a></li>";
            }
        ?>
    </ul>