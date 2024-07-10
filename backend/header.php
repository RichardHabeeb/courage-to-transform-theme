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
	<body <? body_class("grid") ?>>

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
		<h1 class="line-height-2 cap-height-2 color-darker-rose">
			<a class="no-underline" href="/"><?= get_bloginfo('name'); ?></a>
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
			<a
					aria-haspopup="menu"
					aria-controls="menu-top-navbar"
				<i class="bi bi-list"></i>
			</a>
		</p>
	</div>
	<?php if (has_nav_menu('primary')):
		 wp_nav_menu(array(
			'theme_location' => 'primary',
			'container' => false,
			'menu_class' =>
				'grid ' .
				'right-to-left ' .
				'aria-expanded-l ' .
				'row-start-l-2 '.
				'row-span-l-3 ' .
				'col-pull-l-2 '.
				'col-span-full ' .
				'popup-dropdown-p ' .
				'full-width-p ' .
				'box-glow-grey-p ' .
				'margin-top-p-5',
			'items_wrap' => '<menu id="%1$s" class="%2$s">%3$s</menu>',
			'item_class' => 'col-span-l-3 col-span-p-full button',
			'link_class' => 'button center-l left-p padding-left-p-to-aria-level',
			'subitem_class' => 'col-span-full',
			'submenu_class' =>
				'popup-dropdown-l ' .
				'width-l-5 ' .
				'popup-accordion-p ' .
				'full-width-p ' .
				'box-glow-grey ' .
				'padding-none no-bullets grid',
		));
	endif; ?>
</nav>
