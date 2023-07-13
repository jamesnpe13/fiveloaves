<?php get_header(); ?>

<section>
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


<img src="<?php echo get_template_directory_uri(); ?>/images/background.jpg" alt="" class="background-image">
<!-- <div class="background-container">
	<div class="filter"></div>
	
</div> -->


<?php get_footer(); ?>