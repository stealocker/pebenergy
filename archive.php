<?php
/**
 * Template Name: Archive
 * 
 * The Template for displaying post archives
 * 
 * This is the template that displays post archives by default.
 */

 get_header();
 ?>

<!-- start #primary -->
<main id="primary" class="site-main">
    <!-- start .page-main-content-container -->
	<div id="page-main-content-container" class="content-container top-bottom-container template--archive">
    <?php
		echo '<h1>';
		the_title();
		echo '</h1>';
			
		?>
        <div class="archive__post-wrapper">
        <?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'orderby' => 'date',
						'order' => 'DESC'
					);

					$custom_query = new WP_Query($args);

					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
							<?php get_template_part('template-parts/preview', 'post'); ?>
						<?php endwhile;
						 endif;
					wp_reset_postdata(); ?>
        </div>
	</div>
    <!-- end .page-main-content-container -->
	</main>
    <!-- end #primary -->

<?php
get_footer();
