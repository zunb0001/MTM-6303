<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
?>

<footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <h4>About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor</p>
                    </div><div class="col-md-4">
                    <h4>Do you like ? Share this !</h4>
                    <?php
                        $social_menu_items = mtm6303_getnav("social");
                        // print_r($social_menu_items);
                    ?>
                     <p>
                    <?php
         
                        foreach($social_menu_items as $social_menu_item){
                    ?>
                            <a href="<?php echo $social_menu_item["url"]?>" class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa <?php echo $social_menu_item["classes"]?>"></i>
                          </a>
                        <?php 
                        } 
                        ?>
                        </p>
                        <p><small>&copy; Untilted <?php echo date('Y'); ?> <a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Unsplash</a></small></p>    
                    </div>

                    <div class="col-md-4">
                        <h4>Subscribe to newsletter</h4>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control footer-input-text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-newsletter ">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <?php 
        do_shortcode("[mtm6303plugin_images]");?>
    </div>
 

</footer>
<?php wp_footer(); ?>

</body>
</html>