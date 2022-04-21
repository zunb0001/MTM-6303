<?php
/**
 * Front Page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Final

 */


get_header(); 
?>


<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'home' );
			endwhile; // End of the loop.
			?>

      
               
    
 <?php wp_footer(); ?>
 <?php get_footer(); ?>
