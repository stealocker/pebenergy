<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="primary">
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- start #page -->
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary" tabindex="0"><?php esc_html_e('Skip to content', 'pebenergy'); ?></a>
        <!-- start #site-header -->
        <header id="site-header" class="site-header">
            <div class="content-container">
            <div class="site-header__container grid">
                <!-- start .site-branding -->
                <div class="site-branding">
                    <?php 
                    if(has_custom_logo()){
                        the_custom_logo();
                    }
                    else{ ?>
                    <a href="<?php echo home_url(); ?>" tabindex="0">Startseite</a> 
                    <?php } ?>
                </div>
                <!-- end .site-branding -->
                <!-- start .site-navigation-wrapper -->
                <div class="site-navigation-wrapper mobile-toggle-wrapper">
                    <!-- start #menu-toggle -->
                    <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" tabindex="0">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/menu-open.svg" alt="icon menu toggle">
                    </button>
                    <!-- end #menu-toggle -->
                    <!-- start .navigation-overlay -->
                    <div class="navigation-overlay navigation-overlay--hidden">
                        <nav id="site-navigation" class="site-navigation content-container top-bottom-container">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-main',
                                'menu_id' => 'primary-menu',
                            ));
                            ?>
                        </nav>
                        <a class="skip-link screen-reader-text accessibility--menu-close" onkeydown="menuToggleKeyDown(event)" href="" tabindex="0"><?php echo __('Menü schließen', 'pebenergy'); ?></a>
                    </div>
                    <!-- end .navigation-overlay -->
                     <div class="navigation-desktop">
                        <nav id="site-navigation-desktop" class="site-navigation">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-main',
                                'menu_id' => 'primary-menu',
                            ));
                            ?>
                        </nav>
                        </div>
                </div>
                <!-- end .site-navigation-wrapper -->
            </div>
            </div>
        </header>
        <!-- end #site-header -->