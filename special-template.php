
<?php
/*
 Template Name: Special Template 
 */

get_header();
 
if(have_posts()) :
    while(have_posts()) : the_post();  

?>
    <article class="post page">
        <h2><?php the_title(); ?> </a></h2>

        <!-- info-box -->
        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, se
                d do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita
                tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                velit esse 
                cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> <!-- /info-box -->
        <p><?php the_content(); ?></p>
    </article>
       
<?php endwhile;

    else : 
        echo '<p> No content found</p>'; 

    endif;

get_footer();



?>