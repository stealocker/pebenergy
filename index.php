<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 */

 get_header();
 ?>

<!-- start #primary -->
<main id="primary" class="site-main">
    <!-- start .page-main-content-container -->
	<div id="page-main-content-container" class="content-container top-bottom-container template--index">
    <?php
		echo '<h1>';
		the_title();
		echo '</h1>';
			the_content();
		?>
	</div>
    <!-- end .page-main-content-container -->
	</main>
    <!-- end #primary -->

<?php
get_footer();
