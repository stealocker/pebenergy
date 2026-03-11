<?php
/**
 * Template Name: Startseite
 * 
 * The Template for displaying the home page
 * 
 * This is the template that displays the home page default.
 */

 get_header();
 ?>

<!-- start #primary -->
<main id="primary" class="site-main">
    <!-- start .page-main-content-container -->
	<div id="page-main-content-container" class="content-container top-bottom-container template--page">
    <?php
			the_content();
		?>
	</div>
    <!-- end .page-main-content-container -->
	</main>
    <!-- end #primary -->

<?php
get_footer();
