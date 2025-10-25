<?php get_header();
var_dump(have_posts())
?>
<h1 class="bg-red-700 text-2xl text-black">blog page</h1>
<a href="<?php echo esc_url(home_url()) ?>" class="text-2xl w-full">خانه</a>



<?php get_footer()  ?>