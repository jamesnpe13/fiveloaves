<?php get_header(); ?>


<section class="hero single">
	<div class="section__container centered">
		<h2 class="hero white">
			The A-Team
		</h2>

		<?php get_template_part("partials/frontend", "breakline") ?>

		<p class="hero white">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptate ut saepe, iste ratione rerum illo. Voluptatem ut distinctio consectetur nesciunt aliquam harum hic maxime unde, quisquam ex recusandae qui?
		</p>
	</div>
</section>

<section class="images">
	<img src="<?php echo get_template_directory_uri(); ?>/images/background.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/chef.jpg
" alt="">
</section>


<section class="images">
	<img src="<?php echo get_template_directory_uri(); ?>/images/chef2.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/chef3.jpg
" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/girl.jpg
" alt="">
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


<img src="<?php echo get_template_directory_uri(); ?>/images/people.jpg" alt="" class="background-image">


<?php get_footer(); ?>