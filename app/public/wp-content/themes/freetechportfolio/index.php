<?php 
/**
 * index.php 
 * 
 * @package WordPress
 * @subpackage freetechportfolio
 */
 get_header();

 if(have_posts()) :
    while (have_posts()) : the_post();
        the_title();
        the_content();
        the_author();
    endwhile;
    else :
        _e('Não há posts para exibir', 'freetechportfolio');
 endif;



 get_footer();
?>