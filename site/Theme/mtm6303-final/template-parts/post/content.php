<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 *  @package WordPress
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
?>
    <div class="tm-text-secondary row">
        <div class="column">
            <h4>
                <a href = "<?php echo get_permalink()?>"><?php echo get_the_title();?>
                </a>
            </h4>
            <div class="col-md-12">
                <?php the_post_thumbnail('medium')?>
             </div>
             <div class="entry-content-page row">
                 <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
     
