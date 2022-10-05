<?php get_header(); ?>


<?php if (is_front_page()): ?>

	<header class="caption">
		<h1><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>
	</header>

<?php else: ?>

	<header class="caption">
		<h1><?php the_title(); ?></h1>
	</header>

<?php endif; ?>


<?php 
	while ( have_posts() ): the_post();
		the_content();
	endwhile;
?>

<?php if (is_front_page()): ?>

	<footer class="badge">
		<a href="https://github.com/solidcreature/shower_wp">Fork me on GitHub</a>
	</footer>

<?php endif; ?>

<div class="progress"></div>

<?php get_footer(); ?>