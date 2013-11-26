<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title><?php the_title(); ?>|<?php bloginfo('name'); ?></title>
<meta name="description" content="<?php echo mb_substr(strip_tags($post-> post_content), 0, 100); ?>…" />
<?php get_header(); ?>
</head>
<body>
<div class="row">
		<div class="large-12 columns">
			<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		</div>
</div>
<div class="row">
		<div class="large-12 columns">
<?php wp_nav_menu( array(
            'theme_location'=>'navi', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap'    =>'<ul class="sub-nav">%3$s</ul>'));
    ?>
<ul class="breadcrumbs">
<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
<li><?php the_title(); ?></li>
</ul>
		</div>
</div>
<div class="row">
		<div class="large-8 columns">
<h2><?php the_title(); ?></h2>
<?php	if (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php	endif; ?>
		</div>
		<div class="large-4 columns">
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
</body>
</html>
