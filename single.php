<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package new-theme-for-test
 */

get_header();
?>

	<main id="primary" class="site-main">
			<div class="bg-red-500 text-center text-2xl py-3 my-5">single page file</div>

	</main><!-- #main -->

	<div class="w-full flex flex-col">
		<div>
			<?php the_content() ?>
		</div>
	</div>	



	<?php
	// while ( have_posts() ) : the_post();

	// 	get_template_part( 'template-parts/content', get_post_type() );

	// 	the_post_navigation(
	// 		array(
	// 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'new-theme-for-test' ) . '</span> <span class="nav-title">%title</span>',
	// 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'new-theme-for-test' ) . '</span> <span class="nav-title">%title</span>',
	// 		)
	// 	);

	// 	// If comments are open or we have at least one comment, load up the comment template.
	// 	if ( comments_open() || get_comments_number() ) :
	// 		comments_template();
	// 	endif;

	// endwhile; // End of the loop.
	?> 
<?php
// get_sidebar();
get_footer();
