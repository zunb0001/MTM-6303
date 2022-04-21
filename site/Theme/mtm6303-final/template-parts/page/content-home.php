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

<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
            <h1><?php echo get_the_title();?></h1>
    
    
        <div class="entry-content-page tm-mb-6">
        <?php the_content(); ?>
        <a href="('<?php echo get_stylesheet_directory_uri();?>/page.php" title="" class="btn btn-lg btn-primary">About Us</a>
             
        </div>
        
              
            </div>

        </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                   <h2><?php echo get_the_title();?></h2>
    
             
                      <p>
                      <?php the_content(); ?>
                      <p>
                       
                </div>
            </div>
        </div>
     </div>
 </div>

