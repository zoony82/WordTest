<?php
add_action('init', function()
{
	register_taxonomy('book_author','book', ['label' => '저자']); // object type는 포스트 타입을 말한다 => book
	register_taxonomy('book_translator','book', ['label' => '역자', 'show_admin_column' => true]);
	register_taxonomy('book_subject','book', ['label' => '주제', 'hierarchical' => true]);
	register_taxonomy('book_custom', 'book',[
		'label' => [
			'name'              => '커스텀',
			'singular_name'     => '커스텀',
			'search_items'      => '커스텀 검색',
			'all_items'         => '전체 커스텀',
			'parent_item'       => '상위 커스텀',
			'parent_item_colon' => '상위 커스텀',
			'edit_item'         => '커스텀 편집',
			'update_item'       => '상위 수정',
			'add_new_item'      => '새 커스텀',
			'new_item_name'     => '커스텀 이름',
			'menu_name'         => '커스텀'
	],'show_admin_column' => true, 'hierarchical' => true]);
});

