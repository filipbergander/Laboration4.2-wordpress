    <footer>
        <p>Travel Meraviglia - Upptäck världen med oss</p>
        <nav class="footer-menu" aria-label="Sidfotsmeny">
         <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false
            )) ?>
        </nav>
        <p>&copy; 2026 Travel Meraviglia</p>
    </footer>
        <?php wp_footer(); ?>
        </body>
</html>