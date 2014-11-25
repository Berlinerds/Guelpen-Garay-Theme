<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Impresa
 * @since Impresa 1.0
 */

get_header(); 

do_action('the_linkedin_URL');

?>

<?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
yoast_breadcrumb('<div id="con-breadcrumbs"><div id="breadcrumbs">','</div></div>');
} ?>
				
<div id="main">
	<div id="content" class="fullwidth">
	
		<div class="box-type2">
			<div class="main-box">
				<?php
				include_once (TEMPLATEPATH . '/title.php');
				 ?>
				 <div class="box-text">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div class="entry-content__holder"> 
							<?php the_URL(); ?>
							<?php the_content( __( 'Continue Reading', 'templatesquare' ) ); ?>
							
						</div>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'templatesquare' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'templatesquare' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->

				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

				<?php endwhile; ?>
				</div><!-- .boxt-text -->
			</div><!-- .main-box -->
		</div><!-- .box-type2 -->
		
	</div><!-- #content -->
</div><!-- #main -->
<?php get_footer(); ?>
