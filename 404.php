<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title>404｜<?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php get_header(); ?>
</head>
<body>
<div class="row">
		<div class="large-12 columns">
			<h1><a href="<?php bloginfo('home'); ?>">404</a></h1>
		</div>
</div>
<div class="row">
		<div class="large-8 columns">
<p>NotFound</p>
		</div>
		<div class="large-4 columns">
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
</body>
</html>
