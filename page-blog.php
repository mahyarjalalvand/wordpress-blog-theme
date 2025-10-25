<?php get_header();
$all_post=get_all_post();
$posts = $all_post->posts;
// custom_var_dump($posts)
?>
<h1 class="bg-red-700 text-2xl text-white py-3 ">blog page</h1>
<a href="<?php echo esc_url(home_url()) ?>" class="text-2xl w-full underline">خانه</a>
<?php if($all_post->have_posts()): while($all_post->have_posts()): $all_post->the_post(); ?>
    <div>
        <a href="<?php echo esc_url(the_permalink()) ?>"><?php echo esc_html(the_title()) ?></a>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
<p>پستی پیدا نشد</p>
<?php endif ?>
<?php get_footer()  ?>