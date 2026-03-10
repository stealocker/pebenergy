<?php

/**
 * The Template for displaying the search page
 */

get_header();
?>

<!-- start #primary -->
<main id="primary" class="site-main">
    <!-- start .page-main-content-container -->
    <div id="page-main-content-container" class="content-container top-bottom-container template--search">
        <h1>
            <?php echo __('Suche', 'pebenergy'); ?>
        </h1>
        <!-- start .search-form-wrapper -->
        <div class="search-form-wrapper">
            <h2><?php echo __('Wonach möchtest du suchen?', 'pebenergy'); ?></h2>
            <?php get_search_form(); ?>
        </div>
        <!-- end .search-form-wrapper -->
        <!-- start .search-results-wrapper -->
        <div class="search-results-wrapper">
            <?php
            $s = get_search_query();
            $args = array(
                's' => $s
            );
            // The Query
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                _e("<h2>Deine Ergebnisse zu: " . get_query_var('s') . "</h2>");
                while ($the_query->have_posts()) {
                    $the_query->the_post();
            ?>
                    <div>
                        <?php get_template_part('template-parts/preview', 'post'); ?>
                </div>
                <?php
                }
            } else {
                ?>
                <h2><?php echo __('Nichts zu finden', 'pebenergy'); ?></h2>
                <div class="alert alert-info">
                    <p><?php echo __('Sorry, wir konnten leider nichts finden', 'pebenergy'); ?></p>
                </div>
            <?php } ?>
        </div>
        <!-- end .search-results-wrapper -->
    </div>
    <!-- end .page-main-content-container -->
</main>
<!-- end #primary -->

<?php
get_footer();
