<div id="secondary" class="row-start-6 row-span-auto col-start-1 col-span-l-7 col-span-p-full padding-y-3 padding-x-1">
	<?php
	$description = get_bloginfo( 'description', 'display' );
	if (!empty($description)): ?>

	<h6>
		<?= esc_html($description); ?>

	</h6>
	<?php endif; ?>
	<?php if (has_nav_menu('secondary')): ?>

	<nav>
		<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
	</nav>
	<?php endif; ?>
	<?php if (is_active_sidebar('sidebar-1')): ?>

	<div role="complementary" class="widgets grid">
		<?php dynamic_sidebar('sidebar-1'); ?>

	</div>
	<?php endif; ?>

</div>

