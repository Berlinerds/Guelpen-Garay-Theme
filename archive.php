<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Impresa
 * @since Impresa 1.0
 */

get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
yoast_breadcrumb('<div id="con-breadcrumbs"><div id="breadcrumbs">','</div></div>');
} ?>

<div id="main">
	<div id="content">
	
		<?php
			/* Queue the first post, that way we know
			 * what date we're dealing with (if that is the case).
			 *
			 * We reset this later so we can run the loop
			 * properly with a call to rewind_posts().
			 */
			if ( have_posts() )
				the_post();
		?>
		
		<?php
			/* Since we called the_post() above, we need to
			 * rewind the loop back to the beginning that way
			 * we can run the loop properly, in full.
			 */
			rewind_posts();
		
			/* Run the loop for the archives page to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-archives.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'archive' );
		?>

		
	</div><!-- #content -->
	<div id="sideright">
		<?php get_sidebar();?>
	</div><!-- #sideright -->
	<div class="clear"></div>
</div>
<!-- #main -->
<?php get_footer(); ?>
