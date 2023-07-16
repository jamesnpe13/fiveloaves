</main>

<footer class="footer">
	<div class="footer__main">
		<div class="footer__main__container">
			<?php get_template_part("partials/frontend", "navbar-secondary") ?>
			<p class="footer white">
				123 Address Street <br>
				Suburb <br>
				City
			</p>

			<p class="footer white">
				09 123 456
			</p>

			<p class="footer white">
				email@email.com
			</p>

			<div class="sm-icons__container">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png
" alt="">
				</a>
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png
" alt="">
				</a>
			</div>
		</div>
	</div>

	<div class="footer__footer">
		<div>
			<?php echo get_custom_logo() ?>
		</div>
		<div>
			<p class="footer white">
				Five Loaves Eatery &copy; 2023 <br>
				All rights reserved
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>