<?php
function my_script() {

		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//code.jquery.com/jquery-1.11.1.min.js', false, '1.11.1', false);
		wp_register_script( 'jquery_migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', false, '1.2.1', false);
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery_migrate' );

		wp_enqueue_script('prettyphoto', get_bloginfo('template_url').'/js/jquery.prettyPhoto.js', array('jquery'), '2.5.6');
		wp_enqueue_script('cufon-yui', get_bloginfo('template_url').'/js/cufon-yui.js', array('jquery'), '1.0.9');
		wp_enqueue_script('tuffy', get_bloginfo('template_url').'/js/Tuffy_500-Tuffy_700-Tuffy_italic_500.font.js', array('jquery'));
		wp_enqueue_script('cycle', get_bloginfo('template_url').'/js/jquery.cycle.all.min.js', array('jquery'));
		wp_enqueue_script('fade', get_bloginfo('template_url').'/js/fade.js', array('jquery'));
		wp_enqueue_script('dropdownmenu', get_bloginfo('template_url').'/js/dropdown.js', array('jquery'));

		wp_enqueue_script('anythingSlider', get_bloginfo('template_url') .'/anythingslider/jquery.anythingslider.min.js', array('jquery'), '2.1');
		wp_enqueue_script('anythingSlider_FX', get_bloginfo('template_url') .'/anythingslider/jquery.anythingslider.fx.min.js', array('jquery'), '2.1');

		wp_enqueue_script('main', get_bloginfo('template_url') .'/js/main.js', false, '1.0', true);
}
add_action('init', 'my_script');
?>