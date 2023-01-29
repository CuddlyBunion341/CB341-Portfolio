<nav>
    <ul>
        <li class="logo">
            <a href="index.php">
                CuddlyBunion341
            </a>
        </li>
        <?php
        $nav = array(["CB341", "index.php"], ["About", "about.php"], ["Projects", "projects.php"]);

        foreach ($nav as $item) {
            $active = '';
            if (basename($_SERVER['PHP_SELF']) == $item[1]) {
                $active = ' class="active"';
            }
            echo '<li><a href="' . $item[1] . '"' . $active . '>' . $item[0] . '</a></li>';
        }

        ?>
    </ul>
</nav>