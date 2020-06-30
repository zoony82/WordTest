<?php
function getHelloWorld(){
return '<h1>hello world insam</h1>';
}

function insam_register_post_type() {
	register_post_type( 'book', [
		'has_archive' => true, // 아카이브 링크를 켜기
		'labels' => [
			'name'                  => '책',
			'singular_name'         => '책',
			'menu_name'             => '책',
			'name_admin_bar'        => '책',
			'add_new'               => '새 책 추가',
			'add_new_item'          => '책',
			'new_item'              => '책',
			'edit_item'             => '책 수정',
			'view_item'             => '책 보기',
			'all_items'             => '모든 책',
			'search_items'          => '책 검색',
			'parent_item_colon'     => '부모 책 : ',
			'not_found'             => '입력한 책이 없습니다',
			'not_found_in_trash'    => '현재 휴지통에 책이 없습니다',
			],
		'public' => true,
		'menu_position' => 3,
		'menu_icon' => get_template_directory_uri().'/images/tele_icon.svg'
//		'menu_icon' => 'dashicons-book'
	]);
}

add_action( 'init', 'insam_register_post_type' );

// head 실행될 때 실행된다
add_action('wp_enqueue_scripts',function (){
	// que에 집어 넣는다, 화면 그릴때 뽑아져 나옴,
	//get_stylesheet_url : 이 스타일의 url 경로를 리턴
	// 브라우져 창에서 ins-style-css 를 가져온것을 확인 할 수 있다.
	wp_enqueue_style('ins-style',  get_stylesheet_uri());
});

// 테마 넣기
add_action('after_setup_theme',function (){
	// 타이틀 넣기
	add_theme_support('title-tag');
	// rss feed 넣기 : 웹 소스에 feed link가 붙는다
	add_theme_support("automatic-feed-links");
});

//
//function wpdocs_codex_book_init() {
//	$labels = array(
//		'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
//		'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
//		'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
//		'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
//		'add_new'               => __( 'Add New', 'textdomain' ),
//		'add_new_item'          => __( 'Add New Insam Book', 'textdomain' ),
//		'new_item'              => __( 'New Book', 'textdomain' ),
//		'edit_item'             => __( 'Edit Book', 'textdomain' ),
//		'view_item'             => __( 'View Book', 'textdomain' ),
//		'all_items'             => __( 'All Books', 'textdomain' ),
//		'search_items'          => __( 'Search Books', 'textdomain' ),
//		'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
//		'not_found'             => __( 'No books found.', 'textdomain' ),
//		'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
//		'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
//		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//		'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
//		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
//		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
//		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
//		'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
//		'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
//	);
//
//	$args = array(
//		'labels'             => $labels,
//		'public'             => true,
//		'publicly_queryable' => true,
//		'show_ui'            => true,
//		'show_in_menu'       => true,
//		'query_var'          => true,
//		'rewrite'            => array( 'slug' => 'book' ),
//		'capability_type'    => 'post',
//		'has_archive'        => true,
//		'hierarchical'       => false,
//		'menu_position'      => null,
//		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
//	);
//
//	register_post_type( 'book', $args );
//}
//
//add_action( 'init', 'wpdocs_codex_book_init' );

