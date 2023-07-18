<?php get_header(); ?>

<section class="single">
	<div class="section__container centered">
		<h2 class="hero white">
			Come and visit us
		</h2>

		<?php get_template_part("partials/frontend", "breakline") ?>

		<p class="hero white">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur recusandae commodi nihil neque culpa alias minima fuga est error eligendi, repellendus cupiditate consequuntur, soluta ad obcaecati quod molestiae exercitationem laboriosam.
		</p>
	</div>
</section>

<section class="double white">
	<div class="panel">
		<?php get_template_part("partials/frontend", "map") ?>
	</div>

	<div class="panel">
		<div class="section__container">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">

			<p>
				123 Jervois Road <br>
				Herne Bay <br>
				Auckland
			</p>
			<p>
				(09) 123 456
			</p>
			<p>
				info@email.com
			</p>
		</div>

	</div>
</section>


<img src="<?php echo get_template_directory_uri(); ?>/images/cafe.jpg" alt="" class="background-image">

<?php get_footer(); ?>