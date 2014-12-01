<?php

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' );?>" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'templatesquare' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="<?php bloginfo('template_url'); ?>/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/js/snap.css" rel="stylesheet" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
$favicon = get_option('templatesquare_favicon');
if($favicon =="" ){
?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<?php }else{?>
<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
<?php }?>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript">
	 //Cufon.replace('h1') ('h1 a') ('h2') ('h3') ('h5') ('h6') ('#topnavigation li', { hover: true});
</script>

<?php 
	$effect = get_option('templatesquare_slider_effect');
	$slices = get_option('templatesquare_slider_slices');
	$speed = get_option('templatesquare_slider_speed');
	$timeout = get_option('templatesquare_slider_timeout');

 ?>
<script type="text/javascript">
   jQuery(document).ready(function($) {
   
   		var media_queries = [400];
		
         $('.boxslideshow').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pause:   0,	  // true to enable "pause on hover"
			pager:   '.pager_cycle',  // selector for element to use as pager container
			cleartypeNoBg:true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides) 
            pauseOnPagerHover: 0, // true to pause when hovering over pager link
            cssBefore: {
	            height: 300
            }
        });
		
         $('.boxslideshow2').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'scrollVert', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pause:   0,	  // true to enable "pause on hover"
			pager:   '.pager_cycle',  // selector for element to use as pager container
			cleartypeNoBg:true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides) 
            pauseOnPagerHover: 0, // true to pause when hovering over pager link
            cssBefore: {
	            height: 300
            }
        });
        
		
		/* for portfolio prettyPhoto */
		$("#gallery-pf a[rel^='prettyPhoto']").prettyPhoto({theme:'dark_rounded'});
		
		
     });
	 
</script>

<script type="text/JavaScript" src="<?php bloginfo('template_url'); ?>/js/snap.min.js"></script>
<script>
	window.addEventListener('load', function(e) {
		var win_w = this.innerWidth;
		var lat_menu = false;		
		if (win_w < 770) { lat_menu = true;	}
		else { lat_menu = false; }	
		show_lateral(lat_menu);	
	}, false);
	
	window.addEventListener('resize', function (e) {
		var win_w = this.innerWidth;
		if (win_w < 770) { lat_menu = true;	}
		else { lat_menu = false; }	
		show_lateral(lat_menu);	
	}, false);
	
	window.addEventListener('orientationchange', function (e) {
		var win_w = this.innerWidth;
		if (win_w < 770) { lat_menu = true;	}
		else { lat_menu = false; }	
		show_lateral(lat_menu);	
	}, false);
	
	
	var show_lateral = function (bool) {
		if (bool) {
			var wrapper = document.getElementById('content_out');
			var lateral = document.body.querySelector('.drawers');
			var top 	= document.getElementById('top');
			var main 	= document.getElementById('main');
			var toggle  = document.body.querySelector('#menu_tab');
		
			var lat_menu = new Snap({
				element: wrapper,
				dragger: wrapper,
				disable: 'right',
			});
			
			toggle.addEventListener('click', function(){
			    if( lat_menu.state().state=="left" ){
			        lat_menu.close();
			    } else {
			        lat_menu.open('left');
			    }
			});
		}
	};
	
	//document.body.addEventListener('touchmove', function(e) { e.preventDefault(); }, false);
</script>

<!--[if IE]>
<script type="text/JavaScript" src="<?php bloginfo('template_url'); ?>/js/DD_belatedPNG.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/responsive_style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/anythingslider/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/anythingslider/anythingslider.css" />

</head>

<body <?php if(!is_front_page()) { echo 'class="body-page"'; } ?>>

	<div class="drawers snap-drawers">
		<div class="left-drawer snap-drawer">
			<?php
			$current_blog = get_current_blog_id();
			
			$lang_types   = array(
				'1' => array(0 => 'DE', 1 => 'menuprincipal RU' ),  
				'2' => array(0 => 'RU', 1 => 'secundario'), 	   
				'3' => array(0 => 'ES', 1 => 'menuprincipal RU' ),  
				'4' => array(0 => 'EN', 1 => 'secundario' ),	  
				'5' => array(0 => 'FR', 1 => 'secundario' )	     
			);
			
			$defaults_1   = array(
				'container'       => 'ul', 
				'menu_class'      => 'menu_idiomas', 
				'menu_id'         => 'idiomas',
				'depth'           => 0,
				'sort_column'     => 'menu_order',
				'theme_location'  => 'mainmenu' ,
				'menu'            => 'nav_menu-3',
				'fallback_cb'     => false,
			); 

			$defaults_2   = array(
				'theme_location'  => '',
				'menu'            => $lang_types[$current_blog][1],
				'container'       => 'div',
				'container_class' => 'menu_lateral',
				'menu_class'      => 'menu',
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			);
						
			?><h3 class="lat_menu--title">Idiomas</h3><?php
			wp_nav_menu( $defaults_1 );
			?><h3 class="lat_menu--title">Enlaces</h3><?php
			wp_nav_menu( $defaults_2 );
			?>
			
			<div id="footer">
				<div id="footer-logo"><img src="http://guelpen-garay.com/wp-content/themes/ruso/images/logo-footer.png" alt=""></div>
				<div id="footer-text">&copy; 2014 G&uuml;lpen &amp; Garay</div>
			</div>
			
		</div>
	</div>

	<div id="content_out" class="snap-content">
	<div id="menu_tab" class="clearfix"><div id="menu_tab--holder"></div></div>
	<div id="wrapper">

		<div id="top">
			<div class="top_holder clearfix">
			
			<?php

			$logotype  = get_option('templatesquare_logo_type');
			$logoimage = get_option('templatesquare_logo_image'); 
			$sitename  = get_option('templatesquare_site_name');
			if ($logoimage == "") { 
				$logoimage = get_bloginfo('template_url') . "/images/logo.png"; 
			}
			
			?>

			<?php if ($logotype == 'textlogo') : ?>

			<div id="logo" class="clearfix">
				<div id="logo-text">
					<?php if($sitename==""){?>
						<h1><a href="<?php echo get_option('home'); ?>/" title="<?php _e('Click for Home','templatesquare'); ?>"><?php bloginfo('name'); ?></a></h1>
					<?php }else{ ?>
						<h1><a href="<?php echo get_option('home'); ?>/" title="<?php _e('Click for Home','templatesquare'); ?>"><?php echo $sitename; ?></a></h1>
					<?php }?>
				</div>
			</div> <!-- end #logo -->

			<?php else : ?>

				<div id="logo">
					<div id="logo-img">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php _e('Click for Home','templatesquare'); ?>">
							<img src="<?php echo $logoimage; ?>" alt=""  />
						</a>
					</div>
				</div> <!-- #logo -->
			
			<?php endif; ?>
				
				<div id="topnavigation">					
					<div class="topnavigation_a">
						<ul class="navigation">
							<li class="navigation_item navigation_menu"><a href="#">Menu</a></li>'
						<?php 
						//wp_nav_menu( array('container' => 'ul','menu_class' => 'menu', 'menu_id' => 'topnav', 'depth' => 0, 'sort_column' => 'menu_order', 'theme_location' => 'mainmenu')); 
						$menu_name = 'mainmenu';
						
						if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {    
						    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						    $menu_items = wp_get_nav_menu_items($menu->term_id);
						    $num = 0;
						    $last = sizeof($menu_items);

						    foreach ($menu_items as $key => $menu_item) {
						        $title = $menu_item->title;
						        $lil_title = ($title === 'русский') ? 'ru' : substr($title, 0, 2);
						        if ($num === 0) {
						        	echo '<li class="navigation_item first"><a href="' . $menu_item->url . '">' . $lil_title . '</a></li>';
						        } else if ($num === $last) {
						        	echo '<li class="navigation_item last"><a href="' . $menu_item->url . '">' . $lil_title . '</a></li>';
						        } else {
						        	echo '<li class="navigation_item"><a href="' . $menu_item->url . '">' . $lil_title . '</a></li>';
						        }

						        $num++;
						    }
						}
						?>

						</ul>
					</div>
				</div><!-- #topnavigation -->
			</div>
		</div><!-- #top -->

			<?php 
			/* ==== PHP functions of the block menus ==== */

			$defaults_3   = array(
				'theme_location'  => '',
				'menu'            => 'secundario',
				'container'       => 'div',
				'container_class' => 'menu_lateral',
				'menu_class'      => 'menu',
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			);

			$defaults_4   = array(
				'theme_location'  => '',
				'menu'            => $lang_types[$current_blog][1],
				'container'       => 'div',
				'container_class' => 'menu_lateral',
				'menu_class'      => 'menu',
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			);

			/* WP_Query para Nachrichten */

			$args = array(
				'cat'              =>  1,
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'order'            => 'DESC',
				'orderby'          => 'date',						
				'posts_per_page'   => 5,
			);
			$menu_query = new WP_Query( $args );
			wp_reset_query();
			?>
			
			<div class="menu_block closed">
			<div class="menu_block__holder">
				<div class="menu_block--top">
					<div class="menu_title">Menu</div>
					<div class="menu_close">
						<img src="<?php echo bloginfo('template_directory' );?>/images/delete.png" alt="close" class="close" width="30"/>
					</div>
				</div>
				<div class="menu_block_menus">
					<div class="menu_block__menu-1">
						<span class="menu_block__menu-title">Menu a</span>
						<div class="menu_block_block">
							<?php wp_nav_menu( $defaults_3 ); ?>
						</div>
					</div>
					<div class="menu_block__menu-2">
						<span class="menu_block__menu-title">Menu b</span>
						<div class="menu_block_block">
							<ul>
							<?php 								
								if ( $menu_query->have_posts() ) : while ( $menu_query->have_posts() ) :
									$menu_query->the_post(); 
									echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
								endwhile;
								endif;
							?>
							</ul>
						</div>
					</div>
					<div class="menu_block__menu-3">
						<span class="menu_block__menu-title">Menu c</span>
						<div class="menu_block_block">
							<?php wp_nav_menu( $defaults_4 ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="container">
			
		<?php 
		if(is_front_page()){
			//include_once(TEMPLATEPATH .'/twitter.php');
			include_once(TEMPLATEPATH .'/slider.php');
		}
		?>
