<?php 

//Theme supports
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
	
//Load styles & scripts	
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'shower-js', get_template_directory_uri() . '/shower/shower.js' );
	wp_enqueue_style( 'ribbon-css', get_template_directory_uri() . '/shower/themes/ribbon/styles/styles.css' );
	
	if ( is_page_template('material-style.php') ) {
		wp_dequeue_style('ribbon-css');
		wp_enqueue_style( 'material-css', get_template_directory_uri() . '/shower/themes/material/styles/styles.css' );		
	}
	
	
	add_editor_style( '/slide-block/block.css' );
}


add_action( 'wp_enqueue_scripts', 'theme_scripts' );	

//Ограничиваем блоки только допустимым списком
add_filter( 'allowed_block_types_all', 'allow_my_block_types', 10, 2 );
function allow_my_block_types( $allowed_blocks, $post ){

	return [
		'core/heading',
		'core/paragraph',
		'core/gallery',
		'core/image',
		'core/list',
		'core/columns',
		'core/quote',
		'core/code',
		'core/table',
		'core/html',
		'wp-shower/slide',
	];

}

function gutenberg_examples_06_register_block() {
	$block_path = get_template_directory() . '/slide-block/block.json';
	register_block_type( $block_path );
}
add_action( 'init', 'gutenberg_examples_06_register_block' );


