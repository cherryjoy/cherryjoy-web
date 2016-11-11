<?php
add_action( 'wp_enqueue_scripts', 'mandy_theme_css',999);
function mandy_theme_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'theme-menu-style', get_template_directory_uri() . '/css/theme-menu.css' );
	wp_enqueue_style( 'default-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_enqueue_style( 'element-style', get_template_directory_uri() . '/css/element.css' );
	wp_enqueue_style( 'media-responsive', get_template_directory_uri() . '/css/media-responsive.css' );
	wp_dequeue_style('appointment-default',get_template_directory_uri() .'/css/default.css');
}

/*
	 * Let WordPress manage the document title.
	 */
	function mandy_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mandy_setup' );

function show_wp_title(){
    global $page, $paged;
    wp_title( '-', true, 'right' );
    // 添加网站标题.
    //bloginfo( 'name' );
    // 为首页添加网站描述.
    //$site_description = get_bloginfo( 'description', 'display' );
    //if ( $site_description && ( is_home() || is_front_page() ) )
    //echo ' - ' . $site_description;
    // 如果有必要，在标题上显示一个页面数.
    //if ( $paged >= 2 || $page >= 2 )
    //echo ' - ' . sprintf( '第%s页', max( $paged, $page ) );
}
?>