<?php
add_action( 'wp_enqueue_scripts', 'custam_theme_enqueue_styles' );
function custam_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function twentyseventeen_widgets_init_custom() {
	register_sidebar( array(
		'name'          => __( 'Events', 'twentyseventeen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init_custom' );

function twentyseventeen_widgets_init_forum() {
	register_sidebar( array(
		'name'          => __( 'Forums', 'twentyseventeen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init_forum' );

function twentyseventeen_widgets_init_footermenu() {
	register_sidebar( array(
		'name'          => __( 'Footer Menu', 'twentyseventeen' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init_footermenu' );

function twentyseventeen_widgets_init_customfooter() {
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'twentyseventeen' ),
		'id'            => 'sidebar-7',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init_customfooter' );

function twentyseventeen_widgets_init_customfooterfour() {
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'twentyseventeen' ),
		'id'            => 'sidebar-8',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init_customfooterfour' );


function twentyseventeen_widgets_init_customfooterfive() {
	register_sidebar( array(
		'name'          => __( 'Footer 5', 'twentyseventeen' ),
		'id'            => 'sidebar-9',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init_customfooterfive' );

?>