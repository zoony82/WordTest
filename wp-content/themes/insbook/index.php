<ul>
<?php
echo getHelloWorld();
/* 2020.06.24
  * var_dump($wp_query);
  * $wp_query : url에 따라서, 워드프레스가 필요한 것들을 호출해서 담아주는 객체
  * index page에서 호출되는 것은 최신 글들 이다.(기본적으로 포스트 들을 담아서 가져 온다)
 * http://localhost/wordpress/?post_type=book 를 통해 책 목록 확인 가능
 ** 위 페이지에서 나오는 wp_post 는 query_vars : 질의에 사용한 변수들
 * wp_post -> request: sql문
 * wp_post -> posts: 질의결과 가져온 글들
 * 아카이브 링크를 설정하려면 functions.php에서 'has_archive' => true, 하고, wp-admin에서 설정-고유주소-변경사항 저장을 post추가하고 나서 해줘야 함
 * http://localhost/wordpress/book/ 그러면 이렇게 고유주소(아카이브페이지)로 결과가 나온다
  */

/* 2020.06.24
 * have_post : $wp_query에서 더 표시할 post가 있는지 검사.
 * the_post : template tag를 사용할 수 있게, $wp_query 의 현재 post를 셋팅(현재 포스터를 한칸 뒤로 이동한다)
 * template tag : wp에서 정보를 동적으로 표시할 때 쓰는 함수들
 */
if(have_posts()){
	while (have_posts()){
		the_post();
	?>
	<li>
		<a href ="<?php the_permalink();?>">
		<?php the_title();
		// 타이틀 가져오기(url에 따라서 가져오는게 다름)
		//http://localhost/wordpress/ => 초기 글 제목만 가져옴
		// http://localhost/wordpress/book/ => 글 제목만 가져옴
		?>
		</a>
	</li>

	<?php
	}
}
?>
</ul>