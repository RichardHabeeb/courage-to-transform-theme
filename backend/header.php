<!DOCTYPE html>
<html <?php language_attributes(); ?> class="portrait-12 landscape-26">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title(); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- preconnections -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://cdn.jsdelivr.net/">

	<?php wp_head(); ?>
</head>
	<body <? body_class("grid bg-color-light-beige") ?>>

<nav
		class=" col-span-full
				row-start-1 row-span-5
				sticky-top
				bg-color-light-beige box-glow-grey
				grid grid-fixed"
		data-z-index="10000">
	<div
			class=" col-start-2 col-span-full
					row-start-2 row-span-3
					flex-v-center">
		<h1 class="line-height-2 cap-height-2 color-darker-rose" data-link="/">
			<?= get_bloginfo('name'); ?>
		</h1>
	</div>
	<div
			class=" hide-l
					col-pull-2
					row-start-2 row-span-3
					flex-right flex-v-center">
		<p
				class=" line-height-3 cap-height-3
						padding-none color-darker-rose">
			<i class="bi bi-list"></i>
		</p>
	</div>
	<?php if (has_nav_menu('primary')):
		 wp_nav_menu(array(
			'theme_location' => 'primary',
			'container' => false,
			'menu_class' => 'hide-p row-start-2 row-span-3 col-span-12 col-pull-2 grid',
			'items_wrap' => '<menu id="%1$s" class="%2$s">%3$s</menu>',
		));
	endif; ?>
</nav>
