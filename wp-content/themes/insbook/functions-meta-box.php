<?php
add_action('add_meta_boxes',function(){

	add_meta_box('book-detail','책 상세 정보',function (){
		include 'meta-box/book-detail.php';
	}, 'book');
});

// advancde edit form 은 페이지를 제외한 모든 post에만 적용 되기 때문에, book에만 액션 되도록 설정
add_action('edit_form_advanced', function (){
	if(get_current_screen()->post_type === 'book') {
		include 'meta-box/book-toc.php';
	};
});

