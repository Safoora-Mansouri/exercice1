<?php get_header();?>
<main>
    <h3>exercice1</h3>
    <h2>this is the first page of my try</h2>
<?php
if (have_posts()):
     while (have_posts()) : the_post();
         the_title('<h1>','<h1>');
    endwhile;
endif;
?> 
</main>
<?php get_footer(); ?>