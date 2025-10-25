<?php get_header(); ?>
<?php 
$all_posts = get_all_post();

?>

<div class="bg-black center ">
    <h1 class="bg-red-500 text-2xl text-black ">front page file</h1>
</div>

<section class="container">
    <div class="w-full flex items-center justify-between bg-gray-200 mt-12">
        <span>مقالات</span>
        <a href="<?php echo esc_url(home_url('/blog/')) ?>">مشاهده همه</a>
        <!-- <?php echo esc_url(home_url('/blog/')) ?> -->
    </div>
   <div class="w-full flex items-center gap-3">
    <?php if($all_posts->have_posts()): ?>
        <?php while($all_posts->have_posts()) : $all_posts->the_post(); ?>
       <!-- <p class="p-4 bg-indigo-600"> <?php echo the_title() ;  ?></p> -->
            <?php //get_template_part("template-parts/components/articleCard"); ?>
            <a href="<?php echo the_permalink() ?>"><?php echo the_title() ;  ?></a>
        <?php endwhile;  wp_reset_postdata(); else : ?>
        <p> پستی برای نمایش یافت نشد</p>
        <?php endif; ?>
   </div>
</section>


<?php get_footer(); ?>