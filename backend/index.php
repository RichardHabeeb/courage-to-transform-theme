<?php get_header(); ?>

<div class="col-span-full row-start-1 row-span-window grid grid-fixed" data-bg-image="<?= get_theme_mod('home_landing_background'); ?>">
	<div class="col-start-2 col-pull-2 row-span-auto row-pull-8">

		<h4 class="font-glow-light-beige margin-bottom-2 pre-line-l">
			<?= get_theme_mod('home_tagline'); ?>

		</h4>

		<button
				class="flex-center padding-1 width-l-10"
				data-link="<?= get_permalink(get_theme_mod('home_tagline_button_link')); ?>">
			<span class="line-height-3 margin-remove-excess-line-height">
				<?= get_theme_mod('home_tagline_button'); ?>

			</span>
		</button>
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
	<h2 class="font-color-grey">Our offerings...</h2>
</div>

<div class="col-span-full row-span-40 grid">
	<div class="col-start-l-2 col-span-6 margin-remove-right-p-gutter"
		data-bg-image="<?= get_theme_mod('home_offerings_image_0'); ?>"
		data-link="<?= get_permalink(get_theme_mod('home_offerings_page_0')); ?>">
		<div class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover">
			<h5>
				<?= get_theme_mod('home_offerings_label_0'); ?>

			</h5>
		</div>
	</div>
	<div class="col-span-6"
		data-bg-image="<?= get_theme_mod('home_offerings_image_1'); ?>"
		data-link="<?= get_permalink(get_theme_mod('home_offerings_page_1')); ?>">
		<div class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover">
			<h5>
				<?= get_theme_mod('home_offerings_label_1'); ?>

			</h5>
		</div>
	</div>
	<div class="col-span-6 margin-remove-right-p-gutter"
		data-bg-image="<?= get_theme_mod('home_offerings_image_2'); ?>"
		data-link="<?= get_permalink(get_theme_mod('home_offerings_page_2')); ?>">
		<div class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover">
			<h5>
				<?= get_theme_mod('home_offerings_label_2'); ?>

			</h5>
		</div>
	</div>
	<div class="col-span-6"
		data-bg-image="<?= get_theme_mod('home_offerings_image_3'); ?>"
		data-link="<?= get_permalink(get_theme_mod('home_offerings_page_3')); ?>">
		<div class="full-width full-height flex-bottom bg-black-25 bg-black-50-hover">
			<h5>
				<?= get_theme_mod('home_offerings_label_3'); ?>

			</h5>
		</div>
	</div>
</div>
<div class="col-span-full row-span-5">
</div>

<div class="col-span-full row-span-auto grid bg-color-darker-rose padding-bottom-5">
	<div class="col-fill-l-2 col-fill-p-1 row-span-10">
		<h2 class="font-color-beige font-shadow-grey-25 line-height-8" data-z-index="100">Inspiring Change...</h2>
	</div>
	<div class="col-fill-2 row-start-11 grid">
		<div class="cols-8 cols-p-10 row-span-auto bg-color-light-beige padding-1" data-tag='&#8220;'>
			<?= get_theme_mod_page_content('home_quote_page_0') ?>

		</div>
		<div class="cols-8 cols-p-10 row-span-auto bg-color-light-beige padding-1 margin-top-p-1" data-tag='&#8220;'>
			<?= get_theme_mod_page_content('home_quote_page_1') ?>

		</div>
		<div class="cols-8 cols-p-10 row-span-auto bg-color-light-beige padding-1 margin-top-p-1" data-tag='&#8220;'>
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

		<button
				class="padding-1 flex-center flex-v-center"
				data-link="<?= get_permalink(get_theme_mod('home_bio_page_link')); ?>">
			<span>Read my full bio here</span>
		</button>
	</div>
</div>

<div class="col-span-full row-span-auto bg-color-dark-green flex-center flex-v-center padding-y-3">
	<div class="center">
		<h4 class="color-light-beige">Book My Discovery Call Today</h4>
		<p class="color-light-beige">1 800 555 5555</p>
	</div>
</div>

<div class="col-span-full col-start-l-2 row-span-9">
	<h2 class="font-color-grey padding-top-5">From the blog...</h2>
</div>

<div class="col-fill-2 col-pull-2 row-span-auto padding-bottom-5 grid">
	<div class="col-span-12 row-span-25" data-bg-image="https://i0.wp.com/couragetotransform.com/wp-content/uploads/2024/02/angry-cry.png?w=1640&ssl=1">
		<div class="bg-color-black-50 bg-color-black-75-hover full-height padding-x-1 flex-bottom" data-link="#article1">
			<div>
				<h5>
					Why Do I Cry When I’m Angry? A Five Element and Physiological Understanding Behind Angry Tears
				</h5>
				<p class="line-height-1 cap-height-1 font-color-light-beige"><i>1/1/2024</i></p>
			</div>
		</div>
	</div>
	<div class="col-span-12 row-span-25" data-bg-image="https://i0.wp.com/couragetotransform.com/wp-content/uploads/2024/02/taking-a-chance-on-yourself.png?w=1640&ssl=1">
		<div class="bg-color-black-50 bg-color-black-75-hover full-height padding-x-1 flex-bottom" data-link="#article1">
			<div>
				<h5>
					Embracing Uncertainty: Letting Go to Step Forward, and Recognizing Manipulation
				</h5>
				<p class="line-height-1 cap-height-1 font-color-light-beige"><i>1/1/2024</i></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
