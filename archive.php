<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title><?php wp_title('',true,''); ?>|<?php bloginfo('name'); ?></title>
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
<li><?php echo $archive_title; ?></li>
</ul>
		</div>
</div>
<div class="row">
		<div class="large-8 columns">
<h2><?php wp_title('',true,''); ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
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
