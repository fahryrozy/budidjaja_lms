<?php
/**
 * Lawyer Lite Theme Customizer
 *
 * @package lawyer-lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lawyer_lite_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'lawyer_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'lawyer-lite' ),
	    'description' => __( 'Description of what this panel does.', 'lawyer-lite' ),
	) );

	// font array
	$lawyer_lite_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface', 
        'Acme' => 'Acme', 
        'Anton' => 'Anton',
        'Architects Daughter' =>'Architects Daughter', 
        'Arimo' => 'Arimo', 
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo', 
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' =>  'Alfa Slab One', 
        'Averia Serif Libre' =>  'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script', 
        'Bitter' =>  'Bitter', 
        'Bree Serif' => 'Bree Serif', 
        'BenchNine' => 'BenchNine',
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo', 
        'Courgette' => 'Courgette', 
        'Cherry Swash' => 'Cherry Swash', 
        'Cormorant Garamond' => 'Cormorant Garamond', 
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One',
        'Dosis' => 'Dosis', 
        'Droid Sans' => 'Droid Sans',
        'Economica' =>  'Economica',
        'Fredoka One' => 'Fredoka One', 
        'Fjalla One' => 'Fjalla One', 
        'Francois One' => 'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' =>  'Great Vibes', 
        'Handlee' => 'Handlee',
        'Hammersmith One' =>'Hammersmith One', 
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC',
        'Julius Sans One' => 'Julius Sans One', 
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans',
        'Kanit' => 'Kanit', 
        'Lobster' =>  'Lobster', 
        'Lato' => 'Lato', 
        'Lora' =>'Lora',
        'Libre Baskerville' =>  'Libre Baskerville', 
        'Lobster Two' => 'Lobster Two',
        'Merriweather' => 'Merriweather', 
        'Monda' => 'Monda', 
        'Montserrat' => 'Montserrat', 
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script', 
        'Noto Serif' => 'Noto Serif', 
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>  'Overpass Mono', 
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron',
        'Patua One' => 'Patua One', 
        'Pacifico' =>  'Pacifico',
        'Padauk' => 'Padauk',
        'Playball' =>  'Playball', 
        'Playfair Display' => 'Playfair Display',
        'PT Sans' => 'PT Sans', 
        'Philosopher' => 'Philosopher', 
        'Permanent Marker' => 'Permanent Marker', 
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro',
        'Shadows Into Light Two' => 'Shadows Into Light Two',
        'Shadows Into Light' => 'Shadows Into Light',
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand',
        'Tangerine' => 'Tangerine', 
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round',
        'Vampiro One' => 'Vampiro One', 
        'Vollkorn' => 'Vollkorn', 
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'lawyer_lite_typography', array(
    	'title'      => __( 'Typography', 'lawyer-lite' ),
		'priority'   => 30,
		'panel' => 'lawyer_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_paragraph_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'Paragraph Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	$wp_customize->add_setting('lawyer_lite_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_atag_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( '"a" Tag Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_li_color', array(
		'label' => __('"li" Tag Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_li_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( '"li" Tag Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_h1_color', array(
		'label' => __('H1 Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_h1_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'H1 Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('lawyer_lite_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_h2_color', array(
		'label' => __('h2 Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_h2_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'h2 Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('lawyer_lite_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_h3_color', array(
		'label' => __('h3 Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_h3_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'h3 Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('lawyer_lite_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_h4_color', array(
		'label' => __('h4 Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_h4_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'h4 Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('lawyer_lite_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_h5_color', array(
		'label' => __('h5 Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_h5_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'h5 Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('lawyer_lite_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'lawyer_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_h6_color', array(
		'label' => __('h6 Color', 'lawyer-lite'),
		'section' => 'lawyer_lite_typography',
		'settings' => 'lawyer_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('lawyer_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'lawyer_lite_h6_font_family', array(
	    'section'  => 'lawyer_lite_typography',
	    'label'    => __( 'h6 Fonts','lawyer-lite'),
	    'type'     => 'select',
	    'choices'  => $lawyer_lite_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('lawyer_lite_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','lawyer-lite'),
		'section'	=> 'lawyer_lite_typography',
		'setting'	=> 'lawyer_lite_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_background_skin_mode',array(
        'default' => 'Transparent Background',
  		'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_lite_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','lawyer-lite'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','lawyer-lite'),
            'Transparent Background' => __('Transparent Background','lawyer-lite'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('lawyer_lite_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','lawyer-lite'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('lawyer_lite_show_wooproducts_border',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','lawyer-lite'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'lawyer_lite_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
  		'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	) );
	$wp_customize->add_control( 'lawyer_lite_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'lawyer-lite' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('lawyer_lite_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));	
	$wp_customize->add_control('lawyer_lite_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','lawyer-lite'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'lawyer_lite_top_bottom_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control( 'lawyer_lite_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','lawyer-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'lawyer_lite_left_right_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control( 'lawyer_lite_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','lawyer-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'lawyer_lite_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'lawyer_lite_sanitize_number_range',
	));
	$wp_customize->add_control('lawyer_lite_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','lawyer-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'lawyer_lite_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'lawyer_lite_sanitize_number_range',
	));
	$wp_customize->add_control('lawyer_lite_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','lawyer-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_section('lawyer_lite_product_button_section', array(
		'title'    => __('Product Button Settings', 'lawyer-lite'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'lawyer_lite_top_bottom_product_button_padding',array(
		'default' => 15,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','lawyer-lite' ),
		'section' => 'lawyer_lite_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'lawyer_lite_left_right_product_button_padding',array(
		'default' => 15,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','lawyer-lite' ),
		'section' => 'lawyer_lite_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'lawyer_lite_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'lawyer_lite_sanitize_number_range',
	));
	$wp_customize->add_control('lawyer_lite_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','lawyer-lite' ),
		'section' => 'lawyer_lite_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'lawyer_lite_theme_color_option', array( 
		'panel' => 'lawyer_lite_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'lawyer-lite' ) 
	) );

  	$wp_customize->add_setting( 'lawyer_lite_theme_color', array(
	    'default' => '#14cab4',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lawyer_lite_theme_color', array(
  		'label' => __('Color Option','lawyer-lite'),
	    'description' => __('One can change complete theme color on just one click.', 'lawyer-lite'),
	    'section' => 'lawyer_lite_theme_color_option',
	    'settings' => 'lawyer_lite_theme_color',
  	)));

	//Layouts
	$wp_customize->add_section( 'lawyer_lite_left_right', array(
    	'title'      => __( 'Layout Settings', 'lawyer-lite' ),
		'priority'   => 30,
		'panel' => 'lawyer_lite_panel_id'
	) );

	$wp_customize->add_setting('lawyer_lite_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','lawyer-lite'),
       'section' => 'lawyer_lite_left_right'
    ));

    $wp_customize->add_setting( 'lawyer_lite_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('lawyer_lite_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','lawyer-lite'),
		'section' => 'lawyer_lite_left_right'
    ));

	$wp_customize->add_setting( 'lawyer_lite_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('lawyer_lite_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','lawyer-lite'),
		'section' => 'lawyer_lite_left_right'
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('lawyer_lite_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'lawyer_lite_sanitize_choices'	        
	)  );
	$wp_customize->add_control('lawyer_lite_layout_options',array(
	    'type' => 'radio',
	    'label' => __('Change Layouts','lawyer-lite'),
	    'section' => 'lawyer_lite_left_right',
	    'choices' => array(
	        'Left Sidebar' => __('Left Sidebar','lawyer-lite'),
	        'Right Sidebar' => __('Right Sidebar','lawyer-lite'),
	        'One Column' => __('One Column','lawyer-lite'),
	        'Three Columns' => __('Three Columns','lawyer-lite'),
	        'Four Columns' => __('Four Columns','lawyer-lite'),
	        'Grid Layout' => __('Grid Layout','lawyer-lite')
	    ),
	) );

	$wp_customize->add_setting('lawyer_lite_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'lawyer_lite_sanitize_choices',
	));
	$wp_customize->add_control('lawyer_lite_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'lawyer-lite'),
		'section'        => 'lawyer_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'lawyer-lite'),
			'Right Sidebar' => __('Right Sidebar', 'lawyer-lite'),
			'One Column'    => __('One Column', 'lawyer-lite'),
		),
	));

	$wp_customize->add_setting('lawyer_lite_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'lawyer_lite_sanitize_choices',
	));
	$wp_customize->add_control('lawyer_lite_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'lawyer-lite'),
		'section'        => 'lawyer_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'lawyer-lite'),
			'Right Sidebar' => __('Right Sidebar', 'lawyer-lite'),
			'One Column'    => __('One Column', 'lawyer-lite'),
		),
	));

	$wp_customize->add_setting('lawyer_lite_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_lite_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','lawyer-lite'),
        'description' => __('Here you can change the Width layout. ','lawyer-lite'),
        'section' => 'lawyer_lite_left_right',
        'choices' => array(
            'Default' => __('Default','lawyer-lite'),
            'Container' => __('Container','lawyer-lite'),
            'Box Container' => __('Box Container','lawyer-lite'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'lawyer_lite_theme_button', array(
		'title' => __('Button Option','lawyer-lite'),
		'panel' => 'lawyer_lite_panel_id',
	));

	$wp_customize->add_setting('lawyer_lite_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','lawyer-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'lawyer_lite_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('lawyer_lite_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','lawyer-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'lawyer_lite_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'lawyer_lite_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'lawyer_lite_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','lawyer-lite' ),
		'section'     => 'lawyer_lite_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	
	//Top Bar
	$wp_customize->add_section('lawyer_lite_topbar_header',array(
		'title'	=> __('Top Bar Section','lawyer-lite'),
		'description'	=> __('Add Top Bar Content here','lawyer-lite'),
		'priority'	=> null,
		'panel' => 'lawyer_lite_panel_id',
	) );

	//Sticky Header
	$wp_customize->add_setting( 'lawyer_lite_sticky_header',array(
		'default'	=> false,
      	'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('lawyer_lite_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','lawyer-lite' ),
        'section' => 'lawyer_lite_topbar_header'
    ));

	$wp_customize->add_setting('lawyer_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );
	$wp_customize->add_control('lawyer_lite_facebook_url',array(
		'label'	=> __('Add Facebook link','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_facebook_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('lawyer_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('lawyer_lite_twitter_url',array(
		'label'	=> __('Add Twitter link','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_twitter_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('lawyer_lite_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('lawyer_lite_linkdin_url',array(
		'label'	=> __('Add Linkdin link','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_linkdin_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('lawyer_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('lawyer_lite_youtube_url',array(
		'label'	=> __('Add Youtube link','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_youtube_url',
		'type'		=> 'url'
	) );

	$wp_customize->add_setting('lawyer_lite_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_mail',array(
		'label'	=> __('Email Text','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('lawyer_lite_email',array(
		'label'	=> __('Add Email','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_call',array(
		'label'	=> __('Phone Text','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_call1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'lawyer_lite_sanitize_phone_number'
	));	
	$wp_customize->add_control('lawyer_lite_call1',array(
		'label'	=> __('Add Phone Number','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_location',array(
		'label'	=> __('Location','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_location1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_location1',array(
		'label'	=> __('Add address','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_time',array(
		'label'	=> __('Timing','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_time1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_time1',array(
		'label'	=> __('Add Time','lawyer-lite'),
		'section'	=> 'lawyer_lite_topbar_header',
		'setting'	=> 'lawyer_lite_time',
		'type'		=> 'text'
	));

	//Slider
	$wp_customize->add_section( 'lawyer_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'lawyer-lite' ),
		'priority'   => null,
		'panel' => 'lawyer_lite_panel_id'
	) );

	$wp_customize->add_setting('lawyer_lite_slider_hide_show',array(
      'default' => false,
      'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('lawyer_lite_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','lawyer-lite'),
	  'section' => 'lawyer_lite_slidersettings',
	));

	for ( $count = 0; $count <= 3; $count++ ) {
		// Add color scheme setting and control.
		$wp_customize->add_setting( 'lawyer_lite_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lawyer_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'lawyer_lite_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lawyer-lite' ),
			'section'  => 'lawyer_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('lawyer_lite_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','lawyer-lite'),
		'description'    => __('This option will add colors over the slider.','lawyer-lite'),
       'section' => 'lawyer_lite_slidersettings'
    ));

    $wp_customize->add_setting('lawyer_lite_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawyer_lite_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'lawyer-lite'),
		'section'  => 'lawyer_lite_slidersettings',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','lawyer-lite'),
		'settings' => 'lawyer_lite_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('lawyer_lite_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_lite_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','lawyer-lite'),
        'section' => 'lawyer_lite_slidersettings',
        'choices' => array(
            'Center' => __('Center','lawyer-lite'),
            'Left' => __('Left','lawyer-lite'),
            'Right' => __('Right','lawyer-lite'),
        ),
	) );

	//Opacity
	$wp_customize->add_setting('lawyer_lite_slider_image_opacity',array(
      'default'              => 0.6,
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control( 'lawyer_lite_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','lawyer-lite' ),
	'section'     => 'lawyer_lite_slidersettings',
	'type'        => 'select',
	'settings'    => 'lawyer_lite_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','lawyer-lite'),
		'0.1' =>  esc_attr('0.1','lawyer-lite'),
		'0.2' =>  esc_attr('0.2','lawyer-lite'),
		'0.3' =>  esc_attr('0.3','lawyer-lite'),
		'0.4' =>  esc_attr('0.4','lawyer-lite'),
		'0.5' =>  esc_attr('0.5','lawyer-lite'),
		'0.6' =>  esc_attr('0.6','lawyer-lite'),
		'0.7' =>  esc_attr('0.7','lawyer-lite'),
		'0.8' =>  esc_attr('0.8','lawyer-lite'),
		'0.9' =>  esc_attr('0.9','lawyer-lite')
	),
	));

	$wp_customize->add_setting( 'lawyer_lite_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'lawyer_lite_sanitize_number_range',
	));
	$wp_customize->add_control( 'lawyer_lite_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','lawyer-lite' ),
		'section' => 'lawyer_lite_slidersettings',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('lawyer_lite_slider_image_height',array(
		'default'=> __('550','lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_slider_image_height',array(
		'label'	=> __('Slider Image Height','lawyer-lite'),
		'section'=> 'lawyer_lite_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_slider_button',array(
		'default'=> __('FREE CONSULTATIONS','lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_slider_button',array(
		'label'	=> __('Slider Button','lawyer-lite'),
		'section'=> 'lawyer_lite_slidersettings',
		'type'=> 'text'
	));
	
	//About
	$wp_customize->add_section('lawyer_lite_about',array(
		'title'	=> __('About Section','lawyer-lite'),
		'description'	=> __('Add About sections below.','lawyer-lite'),
		'panel' => 'lawyer_lite_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
	$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('lawyer_lite_post',array(
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_lite_post',array(
	 'type'    => 'select',
	 'choices' => $pst,
	 'label' => __('Select post','lawyer-lite'),
	 'section' => 'lawyer_lite_about',
	));

	//404 Page Setting
	$wp_customize->add_section('lawyer_lite_404_page_setting',array(
		'title'	=> __('404 Page','lawyer-lite'),
		'panel' => 'lawyer_lite_panel_id',
	));	

	$wp_customize->add_setting('lawyer_lite_title_404_page',array(
		'default'=> __('404 Not Found', 'lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_title_404_page',array(
		'label'	=> __('404 Page Title','lawyer-lite'),
		'section'=> 'lawyer_lite_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.', 'lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_content_404_page',array(
		'label'	=> __('404 Page Content','lawyer-lite'),
		'section'=> 'lawyer_lite_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_button_404_page',array(
		'default'=> __('Back to Home Page', 'lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_button_404_page',array(
		'label'	=> __('404 Page Button','lawyer-lite'),
		'section'=> 'lawyer_lite_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('lawyer_lite_responsive_setting',array(
		'title'	=> __('Responsive Settings','lawyer-lite'),
		'panel' => 'lawyer_lite_panel_id',
	));

    $wp_customize->add_setting('lawyer_lite_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','lawyer-lite'),
       'section' => 'lawyer_lite_responsive_setting'
    ));

    $wp_customize->add_setting('lawyer_lite_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','lawyer-lite'),
       'section' => 'lawyer_lite_responsive_setting'
    ));

    $wp_customize->add_setting('lawyer_lite_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','lawyer-lite'),
       'section' => 'lawyer_lite_responsive_setting'
    ));

    $wp_customize->add_setting('lawyer_lite_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','lawyer-lite'),
       'section' => 'lawyer_lite_responsive_setting'
    ));

    $wp_customize->add_setting('lawyer_lite_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','lawyer-lite'),
       'section' => 'lawyer_lite_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('lawyer_lite_blog_post',array(
		'title'	=> __('Blog Page Settings','lawyer-lite'),
		'panel' => 'lawyer_lite_panel_id',
	));	

	$wp_customize->add_setting('lawyer_lite_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','lawyer-lite'),
       'section' => 'lawyer_lite_blog_post'
    ));

    $wp_customize->add_setting('lawyer_lite_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','lawyer-lite'),
       'section' => 'lawyer_lite_blog_post'
    ));

    $wp_customize->add_setting('lawyer_lite_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','lawyer-lite'),
       'section' => 'lawyer_lite_blog_post'
    ));

    $wp_customize->add_setting('lawyer_lite_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','lawyer-lite'),
       'section' => 'lawyer_lite_blog_post'
    ));

    $wp_customize->add_setting('lawyer_lite_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','lawyer-lite'),
       'section' => 'lawyer_lite_blog_post'
    ));

    $wp_customize->add_setting('lawyer_lite_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_lite_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','lawyer-lite'),
        'section' => 'lawyer_lite_blog_post',
        'choices' => array(
            'No Content' => __('No Content','lawyer-lite'),
            'Excerpt Content' => __('Excerpt Content','lawyer-lite'),
            'Full Content' => __('Full Content','lawyer-lite'),
        ),
	) );

    $wp_customize->add_setting( 'lawyer_lite_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'lawyer_lite_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','lawyer-lite' ),
		'section'     => 'lawyer_lite_blog_post',
		'type'        => 'number',
		'settings'    => 'lawyer_lite_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'lawyer_lite_post_suffix_option', array(
		'default'   => __('...','lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'lawyer_lite_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','lawyer-lite' ),
		'section'     => 'lawyer_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'lawyer_lite_post_suffix_option',
	) );

	$wp_customize->add_setting('lawyer_lite_button_text',array(
		'default'=> __('Read More','lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_button_text',array(
		'label'	=> __('Add Button Text','lawyer-lite'),
		'section'=> 'lawyer_lite_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawyer_lite_metabox_separator_blog_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'lawyer_lite_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','lawyer-lite' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'lawyer-lite' ),
        ),
		'section'     => 'lawyer_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'lawyer_lite_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('lawyer_lite_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'lawyer_lite_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_lite_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','lawyer-lite'),
        'section' => 'lawyer_lite_blog_post',
        'choices' => array(
            'In Box' => __('In Box','lawyer-lite'),
            'Without Box' => __('Without Box','lawyer-lite'),
        ),
	) );

	$wp_customize->add_setting('lawyer_lite_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','lawyer-lite'),
       'section' => 'lawyer_lite_blog_post'
    ));

	//no Result Found
	$wp_customize->add_section('lawyer_lite_noresult_found',array(
		'title'	=> __('No Result Found','lawyer-lite'),
		'panel' => 'lawyer_lite_panel_id',
	));	

	$wp_customize->add_setting('lawyer_lite_nosearch_found_title',array(
		'default'=> __('Nothing Found','lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','lawyer-lite'),
		'section'=> 'lawyer_lite_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','lawyer-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_lite_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','lawyer-lite'),
		'section'=> 'lawyer_lite_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_lite_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','lawyer-lite'),
       'section' => 'lawyer_lite_noresult_found'
    ));

	//footer
	$wp_customize->add_section('lawyer_lite_footer_section',array(
		'title'	=> __('Footer Text','lawyer-lite'),
		'priority'	=> null,
		'panel' => 'lawyer_lite_panel_id',
	));

	$wp_customize->add_setting('lawyer_lite_footer_widget_areas',array(
        'default'           => 4,
	  'sanitize_callback' => 'lawyer_lite_sanitize_choices',
    ));
    $wp_customize->add_control('lawyer_lite_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'lawyer-lite'),
        'section'     => 'lawyer_lite_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'lawyer-lite'),
        'choices' => array(
            '1'     => __('One', 'lawyer-lite'),
            '2'     => __('Two', 'lawyer-lite'),
            '3'     => __('Three', 'lawyer-lite'),
            '4'     => __('Four', 'lawyer-lite')
        ),
    ));

    $wp_customize->add_setting('lawyer_lite_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawyer_lite_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'lawyer-lite'),
		'section'  => 'lawyer_lite_footer_section',
	)));

	$wp_customize->add_setting('lawyer_lite_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'lawyer_lite_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','lawyer-lite'),
        'section' => 'lawyer_lite_footer_section'
	)));
	
	$wp_customize->add_setting('lawyer_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('lawyer_lite_footer_copy',array(
		'label'	=> __('Copyright Text','lawyer-lite'),
		'section'	=> 'lawyer_lite_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_lite_copyright_content_align',array(
        'default' => 'center',
  		'sanitize_callback' => 'lawyer_lite_sanitize_choices',
	));
	$wp_customize->add_control('lawyer_lite_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','lawyer-lite'),
        'section' => 'lawyer_lite_footer_section',
        'choices' => array(
            'left' => __('Left','lawyer-lite'),
            'right' => __('Right','lawyer-lite'),
            'center' => __('Center','lawyer-lite'),
        ),
	) );

	$wp_customize->add_setting('lawyer_lite_footer_content_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','lawyer-lite' ),
		'section'=> 'lawyer_lite_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('lawyer_lite_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_copyright_padding',array(
		'label'	=> __('Copyright Padding','lawyer-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'lawyer_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('lawyer_lite_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'lawyer_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('lawyer_lite_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','lawyer-lite'),
      	'section' => 'lawyer_lite_footer_section',
	));

	$wp_customize->add_setting('lawyer_lite_scroll_setting',array(
        'default' => 'Right',
  		'sanitize_callback' => 'lawyer_lite_sanitize_choices',
	));
	$wp_customize->add_control('lawyer_lite_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','lawyer-lite'),
        'section' => 'lawyer_lite_footer_section',
        'choices' => array(
            'Left' => __('Left','lawyer-lite'),
            'Right' => __('Right','lawyer-lite'),
            'Center' => __('Center','lawyer-lite'),
        ),
	) );

	$wp_customize->add_setting('lawyer_lite_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'lawyer_lite_sanitize_float',
	));
	$wp_customize->add_control('lawyer_lite_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','lawyer-lite'),
		'section'=> 'lawyer_lite_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	) );
}
add_action( 'customize_register', 'lawyer_lite_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );
 
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Lawyer_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Lawyer_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Lawyer_Lite_Customize_Section_Pro(
				$manager,
				'lawyer_lite_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Lawyer Pro Theme', 'lawyer-lite' ),
					'pro_text' => esc_html__( 'Go Pro','lawyer-lite' ),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/premium-lawyer-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lawyer-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lawyer-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Lawyer_Lite_Customize::get_instance();