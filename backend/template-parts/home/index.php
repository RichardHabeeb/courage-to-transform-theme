<div class="col-span-full row-start-1 row-span-window grid grid-fixed" data-bg-image="<?= get_theme_mod('home_landing_background'); ?>">
	<div class="col-start-2 col-pull-2 row-span-auto row-pull-8">

		<h4 class="font-glow-light-beige margin-bottom-2 pre-line-l">
			<?= get_theme_mod('home_tagline'); ?>

		</h4>

		<a
				class="button width-l-10 center"
				href="<?= get_permalink(get_theme_mod('home_tagline_button_link')); ?>">
			<?= get_theme_mod('home_tagline_button'); ?>

		</a>
	</div>
</div>



<div class="col-span-l-half col-span-p-full row-span-40 grid grid-fixed">
<div class="col-start-3 col-span-5 row-start-5 row-span-25" data-bg-image="<?= get_theme_mod('home_image_1'); ?>">
	</div>
	<div class="col-start-6 col-span-5 row-start-10 row-span-25" data-bg-image="<?= get_theme_mod('home_image_2'); ?>">
	</div>
</div>


<div class="col-span-l-half col-span-p-full row-span-auto grid grid-fixed">
	<div class="row-start-5 col-start-p-2 col-pull-2 col-span-l-full padding-bottom-5">
		<?= get_theme_mod_page_content('home_about_content') ?>
	</div>
</div>

<div class="col-span-full col-start-l-2 row-span-4">
	<h2 class="font-color-grey line-height-4">Our offerings...</h2>
</div>

<div class="col-span-full row-span-40 grid">
	<div
			class="col-start-l-2 col-span-6 margin-remove-right-p-gutter"
			data-bg-image="<?= get_theme_mod('home_offerings_image_0'); ?>">
		<a
				href="<?= get_permalink(get_theme_mod('home_offerings_page_0')); ?>"
				class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover no-underline">
			<h5>
				<?= get_theme_mod('home_offerings_label_0'); ?>

			</h5>
		</a>
	</div>
	<div
			class="col-span-6"
			data-bg-image="<?= get_theme_mod('home_offerings_image_1'); ?>">
		<a
				href="<?= get_permalink(get_theme_mod('home_offerings_page_1')); ?>"
				class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover no-underline">
			<h5>
				<?= get_theme_mod('home_offerings_label_1'); ?>

			</h5>
		</a>
	</div>
	<div
			class="col-span-6 margin-remove-right-p-gutter"
			data-bg-image="<?= get_theme_mod('home_offerings_image_2'); ?>">
		<a
				href="<?= get_permalink(get_theme_mod('home_offerings_page_2')); ?>"
				class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover no-underline">
			<h5>
				<?= get_theme_mod('home_offerings_label_2'); ?>

			</h5>
		</a>
	</div>
	<div
			class="col-span-6"
			data-bg-image="<?= get_theme_mod('home_offerings_image_3'); ?>">
		<a
				href="<?= get_permalink(get_theme_mod('home_offerings_page_3')); ?>"
				class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover no-underline">
			<h5>
				<?= get_theme_mod('home_offerings_label_3'); ?>

			</h5>
		</a>
	</div>
</div>
<div class="col-span-full row-span-5">
</div>

<div class="col-span-full row-span-auto grid bg-color-darker-rose padding-bottom-5">
	<div class="col-fill-l-2 col-fill-p-1 row-span-10">
		<h2 class="font-color-off-white font-shadow-grey-25 line-height-8" data-z-index="100">Inspiring Change...</h2>
	</div>
	<div class="col-fill-2 row-start-11 grid">
		<div class="cols-8 cols-p-10 row-span-auto bg-color-off-white padding-1" data-tag='&#8220;'>
			<?= get_theme_mod_page_content('home_quote_page_0') ?>

		</div>
		<div class="cols-8 cols-p-10 row-span-auto bg-color-off-white padding-1 margin-top-p-1" data-tag='&#8220;'>
			<?= get_theme_mod_page_content('home_quote_page_1') ?>

		</div>
		<div class="cols-8 cols-p-10 row-span-auto bg-color-off-white padding-1 margin-top-p-1" data-tag='&#8220;'>
			<?= get_theme_mod_page_content('home_quote_page_2') ?>

		</div>
	</div>
</div>

<div class="col-fill-2 col-pull-2 row-span-auto grid padding-y-5">
	<div
		class="col-start-3 cols-l-8 cols-p-6 row-span-p-24"
		data-bg-image="<?= get_theme_mod('home_mini_bio_image'); ?>">
	</div>
	<div class="col-start-l-13 cols-l-12 col-span-p-full">
		<?= get_theme_mod_page_content('home_mini_bio_page') ?>

		<a class="button center" href="<?= get_permalink(get_theme_mod('home_bio_page_link')); ?>">
			Read my full bio here
		</a>
	</div>
</div>

<div class="col-span-full row-span-auto bg-color-dark-green flex-center flex-v-center padding-y-3">
	<div class="center">
		<h4 class="color-light-beige">Book My Discovery Call Today</h4>
		<a
				class="button center"
				href="<?= get_permalink(get_theme_mod('home_tagline_button_link')); ?>">
			Get Started on Your Transformation

		</a>
	</div>
</div>

<?php
$latestPosts = wp_get_recent_posts(['numberposts' => 2], OBJECT);
if($latestPosts): ?>
<div class="col-span-full col-start-l-2 row-span-9">
	<h2 class="font-color-grey padding-top-4">From the blog...</h2>
</div>

<div class="col-fill-2 col-pull-2 row-span-auto padding-bottom-5 grid">

	<?php foreach ($latestPosts as $post): ?>

	<div class="col-span-12 row-span-25" data-bg-image="<?= esc_url(get_the_post_thumbnail_url($post->ID)); ?>">
		<a
				class="bg-color-black-50 bg-color-black-75-hover full-height padding-x-1 flex-bottom no-underline"
				href="<?= get_permalink($post->ID); ?>">
			<div>
				<h5>
					<?= get_the_title($post->ID); ?>
				</h5>
				<p class="line-height-1 cap-height-1 font-color-light-beige">
					<i>
						<?= get_the_date('F jS, Y', $post->ID); ?>

					</i>
				</p>
			</div>
		</a>
	</div>
	<?php endforeach; ?>

</div>
<?php endif; ?>
