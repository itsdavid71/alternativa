<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="http://localhost:8888/wp-content/uploads/2024/08/logo.svg" alt="">
            <a class="header-title" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
        <p>&copy; <?php echo date('Y'); ?> © ООО «Альтернатива Гейм» (ИНН 5906071031) 2010–2024. Все права защищены.</p>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
