    <footer>
        <nav class="footer-menu" aria-label="Sidfotsmeny">
         <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false
            )) ?>
        </nav>
        <?php if (is_active_sidebar('footer-widget')) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-widget'); ?>
            </div>
        <?php endif; ?>    
    </footer>
        <?php wp_footer(); ?>
        </body>
</html>