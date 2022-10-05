<?php //Template Name: Material Style ?>
<?php get_header(); ?>

<header class="caption">
	<h1><?php the_title(); ?></h1>
	<p><?php the_excerpt(); ?></p>
</header>


<?php 
	while ( have_posts() ): the_post();
		the_content();
	endwhile;
?>

<footer class="badge">
	<a href="https://github.com/shower/shower">Fork me on GitHub</a>
</footer>

<div class="progress"></div>

<?php get_footer(); ?>