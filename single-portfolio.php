<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Impresa
 * @since Impresa 1.0
 */


/*

[print_title]
[print_city]
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
				<?php include_once (TEMPLATEPATH . '/title.php'); ?>
				
				<div class="box-text">
				
				<?php edit_post_link('Edit this content');?>

				<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div class="entry-content__holder clearfix"> 
							
							<?php if (has_term('panorama', 'portfoliocat')) : ?>
							
							<?php the_content(); ?>

							<?php else : ?>

							<div class="content_block_aside w-25 to-left clearfix">
								<?php 
									$default_attr = array(
										'class' => "attachment-$size content_image",
										'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
									);
									the_post_thumbnail('full', $default_attr);
								?>
							</div>
							<div class="content_block_main w-75 to-right">
								<h4><?php the_title(); ?></h4>
								<?php the_Social_Block(); ?>
								<?php the_content(); ?>
								<div class="content_goback">
									<h3>
										<?php 
										$back_to = array(
											'Die Anwälte von Gülpen &amp; Garay',
											'Адвокаты – Gülpen & Garay',
											'Volver a la página de abogados',
											'Gülpen & Garay Lawyers',
											'Les avocats du Gülpen & Garay',
											'Die Adwokaty'
										);

										$back_to_href = array(
											site_url() . '/blog/portfolio/anwalte-berlin/',
											site_url() . '/portfolio/abogados/',
											site_url() . '/portfolio/abogados/',
											site_url() . '/portfolio/gulpen-garay-lawyers/',
											site_url() . '/portfolio/avocats-berlin/',
											site_url() . '/portfolio/adwokaty-berlin/'										
										);
										?>
										<a href="<?php echo $back_to_href[get_current_blog_id() - 1]; ?>" 
										   title="Anwälte Berlin">
										   <?php echo '<span class="content_arrow"><< </span>' . $back_to[get_current_blog_id() - 1]; ?>
										</a>
									</h3>
								</div>
							</div>	

							<?php endif; ?>	
						
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
