
<footer class="col-span-full row-span-auto grid grid-fixed bg-color-dark-green clip">
	<div class="col-span-full row-span-5"></div>
	<div class="col-fill-2 col-pull-2 row-span-auto grid grid fixed">
		<div class="col-span-l-10 col-span-p-5 row-span-auto grid">
			<?php
			if (is_active_sidebar('footer-1')) {
				dynamic_sidebar('footer-1');
			}
			?>

		</div>

		<div class="col-start-l-13 col-span-6 row-span-9">
			<h5>Follow us</h5>
			<p>
			<a href="https://www.facebook.com/lionsheartwellness"><i class="bi bi-facebook"></i></a>&emsp;<a href="http://instagram.com/couragetotransform"><i class="bi bi-instagram"></i></a>&emsp;<a href="http://tiktok.com/@couragetotransform"><i class="bi bi-tiktok"></i></a>&emsp;<a href="https://www.youtube.com/@couragetotransform"><i class="bi bi-youtube"></i></a>
			</p>
		</div>

		<div class="col-start-l-19 col-span-6 row-span-9">
			<?php
			if (is_active_sidebar('footer-2')) {
				dynamic_sidebar('footer-2');
			}
			?>
		</div>
	</div>
	<div class="col-fill-2 col-pull-2 flex-center">
		<p>
			Copyright <?= date("Y"); ?> Courage to Transform Coaching & Hypnotherapy
		</p>
	</div>
</footer>
<!-- wp_footer -->
<?php wp_footer(); ?>
<!-- /wp_footer -->
<!-- Firefox FOUC -->
<script>0</script>
</body>
</html>
