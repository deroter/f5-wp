<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
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
</ul>
		</div>
</div>
<div class="row">
		<div class="large-8 columns">
<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
<hr>
<?php endwhile; endif; ?>
		</div>
		<div class="large-4 columns">
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
</body>
</html>
