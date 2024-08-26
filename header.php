<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
    <script>
        function init () {
            const menuButton = document.querySelector('.mobile-nav-button');
            console.log(menuButton);
            menuButton.addEventListener('click', (e) => {
                document.querySelector('.header-content').classList.toggle('active');
            });
        }
        window.onload = init;
    </script>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-content">
        <img src="http://localhost:8888/wp-content/uploads/2024/08/logo.svg" alt="">
        <a class="header-title" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
        <div class="mobile-nav-button"></div>
        <div class="mobile-nav">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </div>
    </div>
    <div class="green-shadow"></div>
</header>
