<?php
$action_list = [];

function add_action($tag, $function){
	global $action_list;
	$action_list[$tag][] = $function;
}

function do_action($tag){
	global $action_list;
	if(!empty($action_list[$tag])){
		foreach($action_list[$tag] as $function){
			call_user_func($function);
		}
	}
}

add_action('2 진입 전', function(){
	echo '4.5';
	echo '<br>';
});

// url로 테스트 가능
// http://localhost/wordpress/wp-content/themes/insbook/action-test.php

// var_dump로도 확인 가능
var_dump($action_list);


// 그럼 이걸 왜 하냐?
// ================ 아래는 cms의 코어 로직이다, 테마 개발자들이 중간에 액션을 끼워놓고 싶을때 사용하는 방식이다
echo 1;
echo '<br>';
do_action('2 진입 전');
echo 2;
echo '<br>';
do_action('2 진입 후');
echo 3;
echo '<br>';
echo 4;
