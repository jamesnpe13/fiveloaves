<?php get_header(); ?>

<h1>This is Index.php</h1>

<div class="card-container">
	<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<h3><a href="<?php the_permalink(); ?>">Read more</a></h3>


	<?php endwhile;

	else :
		echo '<p>No Posts</p>';

	endif;

	?>
</div>

<?php get_footer(); ?> 