<?php
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
