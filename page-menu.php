<?php get_header(); ?>

<section class="hero single">
	<div class="section__container centered">
		<h2 class="hero white">
			All day menu
		</h2>

		<?php get_template_part("partials/frontend", "breakline") ?>

		<p class="hero white">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea quas sunt necessitatibus iure et! Atque reiciendis debitis natus autem modi perferendis laborum placeat tenetur, obcaecati repellat cupiditate velit voluptatum.
		</p>
	</div>
</section>

<section class="images">
	<img src="<?php echo get_template_directory_uri(); ?>/images/tacos.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/carbonara.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/waffles.jpg
" alt="">
</section>

<section class="list single white">

	<div class="section__container">
		<?php
		$post_type = 'menuitems';

		// Get all the taxonomies for this post type
		$taxonomies = get_object_taxonomies((object) array('post_type' => $post_type));

		foreach ($taxonomies as $taxonomy) :
			$terms = get_terms($taxonomy);
			foreach ($terms as $term) :
		?>

				<div class="category__group">
					<h2 class="section-label no-margin">
						<?php echo $term->name ?>
					</h2>

					<?php
					$posts = new WP_Query("taxonomy=$taxonomy&term=$term->slug");

					if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();
					?>

							<?php get_template_part("partials/frontend", "menu-item") ?>

					<?php
						endwhile;
					endif; ?>
				</div>
		<?php
			endforeach;

		endforeach;
		?>
	</div>
</section>

<img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="" class="background-image">

<?php get_footer(); ?>