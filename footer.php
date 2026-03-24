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
    <div class="content-container">
    <div class="footer-wrapper grid">
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
        <nav id="footer__navigation" class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu-left',
                'menu_id' => 'footer-menu-left',
            ));
            ?>
        </nav>
        <!-- end .footer__navigation -->
        <!-- start .footer__navigation__two -->
        <nav id="footer__navigation__two" class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu-right',
                'menu_id' => 'footer-menu-right',
            ));
            ?>
        </nav>
        <!-- end .footer__text -->
    </div>
        </div>
</footer>
<!-- end #site-footer -->
</div>
<!-- end #page -->

<?php wp_footer(); ?>

</body>

</html>