
<article
		<?php post_class("col-fill-l-8 col-fill-p-2 col-pull-2 row-span-auto padding-bottom-5"); ?>
		id="post-<?php the_ID(); ?>">

	<div class="height-24 flex-bottom bg-color-dark-green" >
		<div class="padding-1 full-width backdrop-blur">
			<h2 class="font-color-off-white blend-difference font-weight-300">
				<?php the_title(); ?>
			</h2>
		</div>
	</div>
	<div class="padding-1">

		<?php the_content(); ?>
		<hr>
	</div>
</article>
