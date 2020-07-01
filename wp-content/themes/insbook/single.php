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
		the_author();
		the_date();
		the_permalink();
		the_content();

	}
}
get_footer();

