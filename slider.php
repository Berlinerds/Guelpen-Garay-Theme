	
			<div id="header">
				<div id="slider">
					<ul class="slider_items">
					
					<?php 
						$args = array ( 'post_type'   => 'slider', 'post_status' => 'publish', 'posts_per_page'  => 3 );
						$slider_query = new WP_Query( $args ); 

						if ($slider_query->have_posts()) : while ($slider_query->have_posts()) : $slider_query->the_post(); 
						

						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					?>
						
						<li class="slider_item">
							<img src="<?php echo $image_src[0]; ?>" class="slider_item_img"/>
						</li>

					<?php 
						endwhile;
						endif;  
					?>

					</ul>

					<script type="text/javascript">
						$('.slider_items').anythingSlider({
							'resizeContents': true,
							'expand': true,
							'autoPlay': true,
							'hashTags': false,
							'infiniteSlides': true,
							'mode': 'fade',
							'enableArrows': false,
							'enableNavigation': false,
							'enableStartStop': false,
							'enableKeyboard': false,
							'delay': 8000,
							'animationTime': 1000,
							'pauseOnHover': false
						});
					</script>

				<ul class="slider_items_responsive" style="display:none">
					<?php 
						$args = array ( 'post_type'   => 'slider', 'post_status' => 'publish', 'posts_per_page'  => 1 );
						$slider_query = new WP_Query( $args ); 

						if ($slider_query->have_posts()) : while ($slider_query->have_posts()) : $slider_query->the_post(); 
						

						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					?>
						
						<li class="slider_item">
							<img src="<?php echo $image_src[0]; ?>" class="slider_item_img"/>
						</li>

					<?php 
						endwhile;
						endif;  
					?>

				</ul>

				</div>
			</div>
			<!-- #header -->
