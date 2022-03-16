<?php include_once __DIR__ . '/../src/script.php' ?>
<header>
    <nav>
        <?php 
        $pages = [
            ["name" => "Home", "file" => "/index.php"],
            ["name" => "About us", "file" => "/about-us.php"],
            ["name" => "Contact", "file" => "/contact.php"],
        ];
        if (function_exists('makeMenu')) {
            echo makeMenu($pages, $current);
        }
        ?>
    </nav>
</header>