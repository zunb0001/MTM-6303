<?php
/**
 * Main template file
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

 <div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                <!-- <h1>Latest Posts</h1> -->
                <h1><?php echo get_the_title();?></h1>
              </div>
            </div>
        </div>
     </div>
 </div>
<div class="container">
    <div class="row">
      <div class="col-md-6">
      <h2><?php echo get_the_title();?></h2>
   

            
           
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content',  'content' );

				endwhile;

		

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

  
        </div>
    </div>
</div>
 <?php get_footer(); ?>