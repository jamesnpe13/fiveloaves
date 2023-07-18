<?php get_header(); ?>

<section class="hero single">
	<div class="section__container centered">
		<h2 class="hero white">
			Catering
		</h2>

		<?php get_template_part("partials/frontend", "breakline") ?>

		<p class="hero white">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea quas sunt necessitatibus iure et! Atque reiciendis debitis natus autem modi perferendis laborum placeat tenetur, obcaecati repellat cupiditate velit voluptatum.
		</p>
	</div>
</section>

<section class="images">
	<img src="<?php echo get_template_directory_uri(); ?>/images/catering2.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/tacos.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/cake2.jpg
" alt="">
</section>

<section class="list single white">

	<div class="section__container">
		<?php
		$post_type = 'catering_items';

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

<section class="contact single white">

	<div class="section__container">
		<div class="panel">
			<h2>
				Leave a message
			</h2>

			<?php get_template_part("partials/frontend", "breakline-v2") ?>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat debitis quia nisi, expedita dolore rem aperiam laboriosam iste. Officia voluptatem obcaecati voluptatum dolor quas, vero sapiente nihil atque ducimus esse.
			</p>
		</div>



		<?php echo do_shortcode('[contact-form-7 id="81" title="Catering form"]') ?>
	</div>



</section>


<img src="<?php echo get_template_directory_uri(); ?>/images/catering.jpg" alt="" class="background-image">


<?php get_footer(); ?>