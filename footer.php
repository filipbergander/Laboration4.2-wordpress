   <?php
/*
 * Sidfoten för webbplatsen
*/
 ?>
   <footer>
        <nav class="footer-menu" aria-label="Sidfotsmeny">
         <?php 
         // Visar navigeringsmenyn i sidfoten
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false
            )) ?>
        </nav>
        <?php 
        // Visar widgeten i sidfoten om den är aktiverad på wp-admin
        if (is_active_sidebar('footer-widget')) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-widget'); ?>
            </div>
        <?php endif; ?>    
    </footer>
        <?php wp_footer(); ?>
        </body>
</html>