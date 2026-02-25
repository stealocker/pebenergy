<?php

/**
 * The Template for displaying the 404 page
 */

get_header();
?>

<!-- start #primary -->
<main id="primary" class="site-main">
    <!-- start .page-main-content-container -->
    <div id="page-main-content-container" class="content-container top-bottom-container template--404">
        <div class="grid grid--50-50">
        <div class="404-wrapper__inner">
            <h1>
            404
        </h1>
        <h3><?php echo __('Hier gibt es nichts zu sehen, gehen Sie bitte weiter.', 'lescustom'); ?></h3>
        <a href="<?php echo home_url(); ?>"><?php echo __('Zurück zur Startseite', 'lescustom'); ?></a>
        </div>
        <div class="404-wrapper__inner">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/404.gif">
</div>
    </div>
</div>
    <!-- end .page-main-content-container -->
</main>
<!-- end #primary -->

<?php
get_footer();
