
<?php
// function ariftheme_setup(){
//   add_theme_support( 'post-thumbnails');
//   add_action('init', 'register_arif_menu');
// }

add_theme_support( 'post-thumbnails');
function register_arif_menu() {
  register_nav_menu( 'primary', __( 'Main Menu location', 'ariftheme' ) );
//   register_nav_menu( 'secondary', __( 'footer Menu location', 'ariftheme' ) );
  
}
add_action('after_setup_theme', 'register_arif_menu');




function slider_custom_post_type() {
	register_post_type('arif_slider',
		array(
			'labels'      => array(
				'name'          => __('sliders', 'ariftheme'),
				'singular_name' => __('slider', 'ariftheme'),
			),
				'public'      => true,
				'supports' => array('title','thumbnail')
		)
	);
}
add_action('init', 'slider_custom_post_type');




function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'ariftheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'ariftheme' ),
		'before_widget' => '<div class="box"><div class="heading">',
		'after_widget'  => '</div></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

  register_sidebar( array(
		'name'          => __( 'footer Sidebar-1', 'ariftheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'ariftheme' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



