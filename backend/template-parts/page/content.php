
<article
		<?php post_class("col-fill-l-5 col-pull-l-5 col-span-p-full row-span-auto padding-bottom-5"); ?>
		id="post-<?php the_ID(); ?>">

	<h2 class="line-height-5 cap-height-4 margin-bottom-1">
		<?php the_title(); ?>
	</h2>

	<div class="padding-y-1">

		<?php the_content(); ?>

		<hr>
	</div>
</article>
