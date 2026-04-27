</main><!-- .site-main -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-white.svg'); ?>" alt="<?php bloginfo('name'); ?>">
                <?php endif; ?>
            </div>

            <div class="footer-contact">
                <h3><?php bloginfo('name'); ?></h3>
                <p>
                    <?php
                    $address = get_theme_mod('utk_footer_address', 'Knoxville, Tennessee 37996');
                    $phone = get_theme_mod('utk_footer_phone', '(865) 974-1000');
                    ?>
                    <?php echo esc_html($address); ?><br>
                    Phone: <?php echo esc_html($phone); ?>
                </p>

                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer-widgets">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <nav class="footer-navigation" aria-label="Footer Navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'footer-nav',
                'fallback_cb'    => function() {
                    echo '<ul class="footer-nav">';
                    echo '<li><a href="#">ADA</a></li>';
                    echo '<li><a href="#">Privacy</a></li>';
                    echo '<li><a href="#">Safety</a></li>';
                    echo '<li><a href="#">Title IX</a></li>';
                    echo '<li><a href="#">Employee Hub</a></li>';
                    echo '<li><a href="#">Employment</a></li>';
                    echo '</ul>';
                },
            ));
            ?>
        </nav>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
