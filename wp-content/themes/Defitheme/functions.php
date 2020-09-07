<?php
/** 
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'childtheme_styles');

 
       
function childtheme_styles() {
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'enfant', get_template_directory_uri().'/../Defitheme/style.css' );                       
    wp_enqueue_style('footer enfant', get_template_directory_uri().'/..Defitheme/footer.css' );
}   
    

?>