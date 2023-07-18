<?php get_header(); ?>

<section class="hero single">
	<div class="section__container">
		<h1 class="hero white">
			Great food.
			<br>
			Great coffee.
		</h1>
		<?php get_template_part("partials/frontend", "breakline") ?>
		<p class="hero white">
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita repellendus quod excepturi explicabo magni deserunt delectus sapiente
		</p>
	</div>
</section>

<section class="menus single">
	<div class="section__container">
		<h2 class="white">
			What's for lunch?
		</h2>

		<?php get_template_part("partials/frontend", "breakline") ?>

		<div class="button-container">
			<a href="#" class="button primary fixed-width">
				<span>
					View menu
				</span>
			</a>
			<a href="#" class="button primary fixed-width">
				<span>
					Catering
				</span>
			</a>
		</div>
	</div>


	<img class="section-background" src="<?php echo get_template_directory_uri(); ?>/images/about.png
" alt="">
</section>

<section class="double">
	<div class="panel">
		<img src="<?php echo get_template_directory_uri(); ?>/images/people.jpg" alt="">
	</div>

	<div class="panel white">
		<div class="panel__container">
			<h2>
				A bit about us
			</h2>

			<?php get_template_part("partials/frontend", "breakline-v2") ?>

			<p>
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, consectetur aliquam, et unde pariatur obcaecati similique tempora mollitia, aperiam vitae magni quibusdam ducimus rem eligendi nobis. Eum, repellendus. Nulla, aliquam.
			</p>
		</div>
	</div>
</section>

<section class="contact single secondary blur">
	<div class="section__container">
		<h2 class="white">
			Get in touch
		</h2>

		<?php get_template_part("partials/frontend", "breakline") ?>

		<p class="white">
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus velit numquam cum sequi modi, eligendi non adipisci reprehenderit. Ea aut repellendus mollitia omnis eius vitae harum nam, sapiente dolorum perferendis?
		</p>

		<a href="#" class="button white">
			<span>
				Contact
			</span>
		</a>
	</div>
</section>

<section class="images">
	<img src="<?php echo get_template_directory_uri(); ?>/images/coffee2.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/cake.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/tacos.jpg
" alt="">
</section>




<img src="<?php echo get_template_directory_uri(); ?>/images/background.jpg" alt="" class="background-image">


<?php get_footer(); ?>