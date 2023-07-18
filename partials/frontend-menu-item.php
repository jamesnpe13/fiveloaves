<div class="list-item">

	<div class="title-box">
		<h5>
			<?php echo the_title() ?>
		</h5>

		<span class="price">
			$00.00
		</span>

	</div>

	<p class="list">
		<?php echo get_post_field('description', get_the_ID()) ?>
	</p>
</div>