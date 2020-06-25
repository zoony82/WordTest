<html>
<head>
<?php wp_head(); ?>
</head>
<body>

<navi>
	<a href="<?= home_url() ?>">insam bookstore</a>
<a href="<?= get_post_type_archive_link('book') ?>">책 목록</a>
</navi>
