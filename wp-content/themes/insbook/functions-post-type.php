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

