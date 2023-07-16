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

	<section class="tabs">
		<div class="section__container"></div>
	</section>

	<img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="" class="background-image">
</section>

<?php get_footer(); ?>