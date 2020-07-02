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
