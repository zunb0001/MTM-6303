<?php
/*
Template Name: Contact page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *  @package WordPress
 * @subpackage MTM6303_Assg2
 * @since MTM6303 Assg2 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'contact' );
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


