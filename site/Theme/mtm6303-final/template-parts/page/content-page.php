<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
  *  @package WordPress
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 * 
 */

?>

<?php 
get_template_part( 'template-parts/page/content', 'page-header' );
?>


<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                
                        <h1><?php echo get_the_title();?></h1>
                </div>
               
               <div class="entry-content-page tm-mb-6">
                 <?php the_content(); ?>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>