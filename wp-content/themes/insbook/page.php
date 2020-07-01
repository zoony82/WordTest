<?php
get_header();

if (have_posts()){
	while(have_posts()){
		the_post();
		?>
		<header></header>
		<h1><?php the_title(); ?></h1>
		</header>
		
		<?php
        // page에선 author/date 필요 없음
//		the_author();
//		the_date();
		the_content();

	}
}
get_footer();

