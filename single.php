<?php
get_header();
if (have_posts()):
    while(have_posts()): the_post();
        echo "<h1>Single.php Works!</h1>";
        the_title('<h2>', '</h2>');
        the_content();
    endwhile;
endif;
get_footer();
