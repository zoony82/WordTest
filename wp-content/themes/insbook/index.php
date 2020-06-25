<?php get_header() ?>

<ul>
<?php
echo getHelloWorld();

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

<?php get_footer() ?>