<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

$footer_text = get_theme_mod('footer_settings_text');

?>

<!-- start #site-footer -->
<footer id="site-footer" class="site-footer">
    <div class="footer-wrapper content-container grid">
        <!-- start .footer__site-branding -->
        <div class="footer__site-branding">
            <?php
            if (the_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url(); ?>"><?php echo __('Startseite', 'pebenergy'); ?></a>
            <?php } ?>
        </div>
        <!-- end .footer__site-branding -->
        <!-- start .footer__navigation -->
        <nav id="footer__navigation" class="footer-navigation content-container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-footer',
                'menu_id' => 'footer-menu',
            ));
            ?>
        </nav>
        <!-- end .footer__navigation -->
        <!-- start .footer__text -->
        <div class="footer__text">
            <p><?php echo $footer_text ?></p>
        </div>
        <!-- end .footer__text -->
    </div>
</footer>
<!-- end #site-footer -->
</div>
<!-- end #page -->

<?php wp_footer(); ?>

</body>

</html>