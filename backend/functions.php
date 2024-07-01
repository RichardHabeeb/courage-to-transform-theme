<?php


add_action( 'wp_enqueue_scripts', 'load_theme_scripts', 999 );
function load_theme_scripts() {
	wp_enqueue_script(
		"theme",
		get_stylesheet_directory_uri() . "/assets/js/theme.js",
		array(),
		null
	);

}


add_action( 'wp_enqueue_scripts', 'load_theme_styles', 999 );
function load_theme_styles() {
	wp_enqueue_style(
		'Normalize',
		'https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css',
		'8.0.1'
	);

	wp_enqueue_style(
		'BootstrapIcons',
		'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
		'1.11.3'
	);

	wp_enqueue_style(
		'LibreFranklin',
		'https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap'
	);

	wp_enqueue_style(
		'PlayfairDisplay',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap'
	);

	wp_enqueue_style(
		'theme',
		get_stylesheet_directory_uri() . '/style.css',
		array(
			'Normalize',
			'BootstrapIcons',
			'LibreFranklin',
			'PlayfairDisplay'),
		null
	);
}

add_action('widgets_init', 'theme_widgets_init' );
function theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => __('Sidebar', 'text-domain'),
			'id'            => 'sidebar-1',
			'description'   => __('Left Sidebar.', 'text-domain'),
			'before_widget' => '<aside id="%1$s" class="col-span-full row-span-auto %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
}

add_action('after_setup_theme', 'theme_init' );
function theme_init() {
		register_nav_menus(
		array(
			'primary'   => __('Top primary menu', 'text-domain'),
			'secondary' => __('Secondary menu in left sidebar', 'text-domain'),
		)
	);
}

add_action('customize_register','theme_customization');
function theme_customization($wp_customize) {
	$wp_customize->add_section('home_page', array(
		'title' => 'Home Page Content',
		'description' => 'Text and images for home page'
	));

	/* TAGLINE */
	$wp_customize->add_setting('home_tagline', array(
		'default' => "Illuminate Your Inner World\nwith the Courage to Transform",
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control('home_tagline', array(
		'label' => __('Large tagline'),
		'description' => __('Place line breaks in preferred location'),
		'type' => 'textarea',
		'section' => 'home_page',
	));

	/* TAGLINE BUTTON */
	$wp_customize->add_setting('home_tagline_button', array(
		'default' => 'I’m Ready to Ignite My Transformation',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control('home_tagline_button', array(
		'label' => __('Tagline button label'),
		'type' => 'textarea',
		'section' => 'home_page',
	));

	$wp_customize->add_setting('home_tagline_button_link', array(
		'default'           => '',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('home_tagline_button_link', array(
		'label' => __('Tagline button link'),
		'section' => 'home_page',
		'type'    => 'dropdown-pages'
	));

	/* LANDING BACKGROUND */
	$wp_customize->add_setting('home_landing_background', array(
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'type'              => 'theme_mod',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_landing_background',
			array(
				'label'    => __('Landing background image', 'text-domain'),
				'section'  => 'home_page',
				'settings' => 'home_landing_background',
			)
		)
	);

	/* LAYERED IMAGE 1  */
	$wp_customize->add_setting('home_image_1', array(
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'type'              => 'theme_mod',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_image_1',
			array(
				'label'    => __('Layered image 1', 'text-domain'),
				'section'  => 'home_page',
				'settings' => 'home_image_1',
			)
		)
	);

	/* LAYERED IMAGE 2  */
	$wp_customize->add_setting('home_image_2', array(
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'type'              => 'theme_mod',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_image_2',
			array(
				'label'    => __('Layered image 2', 'text-domain'),
				'section'  => 'home_page',
				'settings' => 'home_image_2',
			)
		)
	);

	/* HOME ABOUT SECTION  */
	$wp_customize->add_setting('home_about_content', array(
		'default'           => '',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('home_about_content', array(
		'label'   => __('Select about content', 'textdomain'),
		'section' => 'home_page',
		'type'    => 'dropdown-pages'
	));


	/* TILE LINKS */
	for($i = 0; $i < 4; $i++) {
		$wp_customize->add_setting('home_offerings_label_'.$i, array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));
		$wp_customize->add_control('home_offerings_label_'.$i, array(
			'label' => __('Offerings Link '.$i.' Label'),
			'type' => 'textarea',
			'section' => 'home_page',
		));

		$wp_customize->add_setting('home_offerings_page_'.$i, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control('home_offerings_page_'.$i, array(
			'label' => __('Offerings '.$i.' Page Link'),
			'section' => 'home_page',
			'type'    => 'dropdown-pages'
		));

		$wp_customize->add_setting('home_offerings_image_'.$i, array(
			'capability'        => 'edit_theme_options',
			'default'           => '',
			'type'              => 'theme_mod',
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'home_offerings_image_'.$i,
				array(
					'label'    => __('Offerings '.$i.' Image', 'text-domain'),
					'section'  => 'home_page',
					'settings' => 'home_offerings_image_'.$i,
				)
			)
		);
	}

	/* QUOTES */
	for($i = 0; $i < 3; $i++) {
		$wp_customize->add_setting('home_quote_page_'.$i, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control('home_quote_page_'.$i, array(
			'label' => __('Quote '.$i.' Content'),
			'section' => 'home_page',
			'type'    => 'dropdown-pages'
		));
	}

	/* MINI BIO */
	$wp_customize->add_setting('home_mini_bio_page', array(
		'default'           => '',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('home_mini_bio_page', array(
		'label' => __('Mini Bio Content'),
		'section' => 'home_page',
		'type'    => 'dropdown-pages'
	));

	$wp_customize->add_setting('home_bio_page_link', array(
		'default'           => '',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('home_bio_page_link', array(
		'label' => __('Bio Page Link'),
		'section' => 'home_page',
		'type'    => 'dropdown-pages'
	));

	$wp_customize->add_setting('home_mini_bio_image', array(
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'type'              => 'theme_mod',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_mini_bio_image',
			array(
				'label'    => __('Mini Bio Image', 'text-domain'),
				'section'  => 'home_page',
				'settings' => 'home_mini_bio_image',
			)
		)
	);
}




function get_theme_mod_page_content($setting) {
	return apply_filters('the_content',
		get_page(get_theme_mod($setting))->post_content);
}
