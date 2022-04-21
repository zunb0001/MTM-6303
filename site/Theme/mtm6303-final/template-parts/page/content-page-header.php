<?php
/**
 * Template part for displaying page content in page-header.php
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

$featured_img_url = get_the_post_thumbnail_url();

if(empty($featured_img_url)){
    $featured_img_url = get_stylesheet_directory_uri() ."/assets/images/about.jpg";
}
?>

 <div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo $featured_img_url;?>"
            ></div>
        </div>
    </div>
</div>
