<?php
	
	$lawyer_lite_theme_color = get_theme_mod('lawyer_lite_theme_color');

	$lawyer_lite_custom_css = '';

	$lawyer_lite_custom_css .='a.button, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .blogbutton-small:hover,  #footer input[type="submit"], #footer .tagcloud a, .pagination a:hover, .pagination .current, .social-media,  .horizontal hr, .about-section hr, .woocommerce span.onsale, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
		$lawyer_lite_custom_css .='background-color: '.esc_attr($lawyer_lite_theme_color).';';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='.social-media{';
		$lawyer_lite_custom_css .='background: '.esc_attr($lawyer_lite_theme_color).';';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='a.button, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .blogbutton-small:hover, #footer input[type="submit"], #footer .tagcloud a, .pagination a:hover, .pagination .current, .social-media,  .horizontal hr, .about-section hr, .woocommerce span.onsale,#menu-sidebar input[type="submit"],.meta-nav:hover,#comments a.comment-reply-link{';
		$lawyer_lite_custom_css .='background-color: '.esc_attr($lawyer_lite_theme_color).';';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='input[type="submit"],.about-btn i.fas,a.free-consultant:hover, .woocommerce-message::before, .our-services .page-box h4:hover, .causes-box:hover h4,.causes-box:hover i,.our-services .page-box:hover h4 a, h1.entry-title, .icon i.fas,.about-section .abt-image img, .about-btn i.fas, a.free-consultant, #footer li a:hover, a.free-consultant:hover, .primary-navigation a:hover, .primary-navigation ul ul a,.primary-navigation li:hover a, .primary-navigation a:focus,.metabox a:hover,.tags i,#sidebar ul li a:hover{';
		$lawyer_lite_custom_css .='color: '.esc_attr($lawyer_lite_theme_color).';';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='#footer input[type="search"],.free-consultant, .about-btn a, .free-consultant, .woocommerce-message, .primary-navigation a:focus, .primary-navigation ul ul, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$lawyer_lite_custom_css .='border-color: '.esc_attr($lawyer_lite_theme_color).';';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='.primary-navigation ul ul{';
		$lawyer_lite_custom_css .='border-top-color: '.esc_attr($lawyer_lite_theme_color).'!important;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover {';
		$lawyer_lite_custom_css .='background-color: '.esc_attr($lawyer_lite_theme_color).'!important;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_custom_css .='.page-template-custom-front-page .menu-color,.menu-color{
	background: linear-gradient(104deg, #eee 83%, '.esc_attr($lawyer_lite_theme_color).' 83%);
	}';
	
	// media
	$lawyer_lite_custom_css .='@media screen and (max-width:1000px) {';
	if($lawyer_lite_theme_color){
	$lawyer_lite_custom_css .='#menu-sidebar .social-media, #contact-info, #menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul, #menu-sidebar, .sidebar{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($lawyer_lite_theme_color).' 120%);
		}';
	}
	$lawyer_lite_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$lawyer_lite_theme_lay = get_theme_mod( 'lawyer_lite_theme_options','Default');
    if($lawyer_lite_theme_lay == 'Default'){
		$lawyer_lite_custom_css .='body{';
			$lawyer_lite_custom_css .='max-width: 100%;';
		$lawyer_lite_custom_css .='}';
	}else if($lawyer_lite_theme_lay == 'Container'){
		$lawyer_lite_custom_css .='body{';
			$lawyer_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.page-template-custom-front-page #header{';
			$lawyer_lite_custom_css .='width:97%';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.serach_outer{';
			$lawyer_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$lawyer_lite_custom_css .='width:96%;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_theme_lay == 'Box Container'){
		$lawyer_lite_custom_css .='body{';
			$lawyer_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.serach_outer{';
			$lawyer_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.page-template-custom-front-page #header{';
			$lawyer_lite_custom_css .='width:86.4%';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$lawyer_lite_custom_css .='width:97%;';
		$lawyer_lite_custom_css .='} }';
	}

	// css
	$lawyer_lite_show_slider = get_theme_mod( 'lawyer_lite_slider_hide_show', false);
		if($lawyer_lite_show_slider == false){
			$lawyer_lite_custom_css .='.page-template-custom-front-page #header{';
				$lawyer_lite_custom_css .='position: static; background-color: #eee; width: 100%;';
			$lawyer_lite_custom_css .='}';
		}
		if($lawyer_lite_show_slider == false){
			$lawyer_lite_custom_css .='.page-template-custom-front-page .menu-color{';
				$lawyer_lite_custom_css .='background: linear-gradient(105deg, #eee 81%, #14cab4 81%); }';
			$lawyer_lite_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$lawyer_lite_theme_lay = get_theme_mod( 'lawyer_lite_slider_content_alignment','Left');
    if($lawyer_lite_theme_lay == 'Left'){
		$lawyer_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p{';
			$lawyer_lite_custom_css .='text-align:left; left:0; right:45%;';
		$lawyer_lite_custom_css .='}';
	}else if($lawyer_lite_theme_lay == 'Center'){
		$lawyer_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .consultant{';
			$lawyer_lite_custom_css .='text-align:center; left:30%; right:0;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='#slider .carousel-caption{';
			$lawyer_lite_custom_css .='height: auto; top:50%; bottom: auto; transform: translateY(-50%);';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.inner_carousel h1{';
			$lawyer_lite_custom_css .='margin-top:0;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.inner_carousel h1, .free-consultant{';
			$lawyer_lite_custom_css .='margin-left:0;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.horizontal hr{';
			$lawyer_lite_custom_css .='margin-left:40%;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='.d-md-block{';
			$lawyer_lite_custom_css .='top:27%;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='
		@media screen and (max-width: 768px){
		.free-consultant{';
		$lawyer_lite_custom_css .='margin-left: 0 !important;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_theme_lay == 'Right'){
		$lawyer_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p{';
			$lawyer_lite_custom_css .='text-align:right; left:auto; right:0;';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .=' #slider .inner_carousel h1,.horizontal hr,#slider .consultant{';
			$lawyer_lite_custom_css .='margin-right: 20%; margin-left: auto; ';
		$lawyer_lite_custom_css .='}';
		$lawyer_lite_custom_css .='
		@media screen and (min-width: 767px) and (max-width: 1024px){
		#slider a.free-consultant{';
		$lawyer_lite_custom_css .='font-size: 10px;';
		$lawyer_lite_custom_css .='} }';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$lawyer_lite_theme_lay = get_theme_mod( 'lawyer_lite_slider_image_opacity','0.6');
	if($lawyer_lite_theme_lay == '0'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.1'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.1';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.2'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.2';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.3'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.3';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.4'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.4';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.5'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.5';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.6'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.6';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.7'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.7';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.8'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.8';
		$lawyer_lite_custom_css .='}';
		}else if($lawyer_lite_theme_lay == '0.9'){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:0.9';
		$lawyer_lite_custom_css .='}';
	}

	/*---------------------- Button Settings option--------------*/
	$lawyer_lite_button_padding_top_bottom = get_theme_mod('lawyer_lite_button_padding_top_bottom');
	$lawyer_lite_button_padding_left_right = get_theme_mod('lawyer_lite_button_padding_left_right');
	$lawyer_lite_custom_css .='.blogbutton-small, #slider .free-consultant, #comments .form-submit input[type="submit"], .about-btn a{';
		$lawyer_lite_custom_css .='padding-top: '.esc_attr($lawyer_lite_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($lawyer_lite_button_padding_top_bottom).'px; padding-left: '.esc_attr($lawyer_lite_button_padding_left_right).'px; padding-right: '.esc_attr($lawyer_lite_button_padding_left_right).'px; display:inline-block;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_button_border_radius = get_theme_mod('lawyer_lite_button_border_radius');
	$lawyer_lite_custom_css .='.blogbutton-small,#slider .free-consultant, #comments .form-submit input[type="submit"], .about-btn a{';
		$lawyer_lite_custom_css .='border-radius: '.esc_attr($lawyer_lite_button_border_radius).'px;';
	$lawyer_lite_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$lawyer_lite_stickyheader = get_theme_mod( 'lawyer_lite_responsive_sticky_header',false);
	if($lawyer_lite_stickyheader == true && get_theme_mod( 'lawyer_lite_sticky_header', false) == false){
    	$lawyer_lite_custom_css .='.fixed-header, .page-template-custom-front-page .fixed-header #header{';
			$lawyer_lite_custom_css .='position:static;';
		$lawyer_lite_custom_css .='} ';
	}
    if($lawyer_lite_stickyheader == true){
    	$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='.fixed-header, .page-template-custom-front-page .fixed-header #header{';
			$lawyer_lite_custom_css .='position:fixed;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_stickyheader == false){
		$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='.fixed-header, .page-template-custom-front-page .fixed-header #header{';
			$lawyer_lite_custom_css .='position:static;';
		$lawyer_lite_custom_css .='} }';
	}

	$lawyer_lite_slider = get_theme_mod( 'lawyer_lite_responsive_slider',false);
	if($lawyer_lite_slider == true && get_theme_mod( 'lawyer_lite_slider_hide_show', false) == false){
    	$lawyer_lite_custom_css .='#slider{';
			$lawyer_lite_custom_css .='display:none;';
		$lawyer_lite_custom_css .='} ';
	}
    if($lawyer_lite_slider == true){
    	$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#slider{';
			$lawyer_lite_custom_css .='display:block;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_slider == false){
		$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#slider{';
			$lawyer_lite_custom_css .='display:none;';
		$lawyer_lite_custom_css .='} }';
	}

	$lawyer_lite_slider = get_theme_mod( 'lawyer_lite_responsive_scroll',true);
	if($lawyer_lite_slider == true && get_theme_mod( 'lawyer_lite_enable_disable_scroll', true) == false){
    	$lawyer_lite_custom_css .='#scroll-top{';
			$lawyer_lite_custom_css .='display:none !important;';
		$lawyer_lite_custom_css .='} ';
	}
    if($lawyer_lite_slider == true){
    	$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#scroll-top{';
			$lawyer_lite_custom_css .='display:block !important;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_slider == false){
		$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#scroll-top{';
			$lawyer_lite_custom_css .='display:none !important;';
		$lawyer_lite_custom_css .='} }';
	}

	$lawyer_lite_sidebar = get_theme_mod( 'lawyer_lite_responsive_sidebar',true);
    if($lawyer_lite_sidebar == true){
    	$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#sidebar{';
			$lawyer_lite_custom_css .='display:block;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_sidebar == false){
		$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#sidebar{';
			$lawyer_lite_custom_css .='display:none;';
		$lawyer_lite_custom_css .='} }';
	}

	$lawyer_lite_loader = get_theme_mod( 'lawyer_lite_responsive_preloader', true);
	if($lawyer_lite_loader == true && get_theme_mod( 'lawyer_lite_preloader_option', true) == false){
    	$lawyer_lite_custom_css .='#loader-wrapper{';
			$lawyer_lite_custom_css .='display:none;';
		$lawyer_lite_custom_css .='} ';
	}
    if($lawyer_lite_loader == true){
    	$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#loader-wrapper{';
			$lawyer_lite_custom_css .='display:block;';
		$lawyer_lite_custom_css .='} }';
	}else if($lawyer_lite_loader == false){
		$lawyer_lite_custom_css .='@media screen and (max-width:575px) {';
		$lawyer_lite_custom_css .='#loader-wrapper{';
			$lawyer_lite_custom_css .='display:none;';
		$lawyer_lite_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$lawyer_lite_theme_lay = get_theme_mod( 'lawyer_lite_background_skin_mode','Transparent Background');
    if($lawyer_lite_theme_lay == 'With Background'){
		$lawyer_lite_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.content-sec,.front-page-content,.background-img-skin{';
			$lawyer_lite_custom_css .='background-color: #fff;';
		$lawyer_lite_custom_css .='}';
	}else if($lawyer_lite_theme_lay == 'Transparent Background'){
		$lawyer_lite_custom_css .='.page-box-single{';
			$lawyer_lite_custom_css .='background-color: transparent;';
		$lawyer_lite_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$lawyer_lite_top_bottom_product_button_padding = get_theme_mod('lawyer_lite_top_bottom_product_button_padding', 15);
	$lawyer_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled],.woocommerce a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart,.woocommerce .cart .button, .woocommerce .cart input.button{';
		$lawyer_lite_custom_css .='padding-top: '.esc_attr($lawyer_lite_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($lawyer_lite_top_bottom_product_button_padding).'px;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_left_right_product_button_padding = get_theme_mod('lawyer_lite_left_right_product_button_padding', 15);
	$lawyer_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled],.woocommerce a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart,.woocommerce .cart .button, .woocommerce .cart input.button{';
		$lawyer_lite_custom_css .='padding-left: '.esc_attr($lawyer_lite_left_right_product_button_padding).'px; padding-right: '.esc_attr($lawyer_lite_left_right_product_button_padding).'px;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_product_button_border_radius = get_theme_mod('lawyer_lite_product_button_border_radius', 0);
	$lawyer_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled],.woocommerce a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart,.woocommerce .cart .button, .woocommerce .cart input.button{';
		$lawyer_lite_custom_css .='border-radius: '.esc_attr($lawyer_lite_product_button_border_radius).'px;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_show_related_products = get_theme_mod('lawyer_lite_show_related_products',true);
	if($lawyer_lite_show_related_products == false){
		$lawyer_lite_custom_css .='.related.products{';
			$lawyer_lite_custom_css .='display: none;';
		$lawyer_lite_custom_css .='}';
	}

	$lawyer_lite_show_wooproducts_border = get_theme_mod('lawyer_lite_show_wooproducts_border', true);
	if($lawyer_lite_show_wooproducts_border == false){
		$lawyer_lite_custom_css .='.products li{';
			$lawyer_lite_custom_css .='border: none;';
		$lawyer_lite_custom_css .='}';
	}

	$lawyer_lite_top_bottom_wooproducts_padding = get_theme_mod('lawyer_lite_top_bottom_wooproducts_padding', 10);
	$lawyer_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$lawyer_lite_custom_css .='padding-top: '.esc_attr($lawyer_lite_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($lawyer_lite_top_bottom_wooproducts_padding).'px !important;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_left_right_wooproducts_padding = get_theme_mod('lawyer_lite_left_right_wooproducts_padding', 10);
	$lawyer_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$lawyer_lite_custom_css .='padding-left: '.esc_attr($lawyer_lite_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($lawyer_lite_left_right_wooproducts_padding).'px !important;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_wooproducts_border_radius = get_theme_mod('lawyer_lite_wooproducts_border_radius',0);
	$lawyer_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$lawyer_lite_custom_css .='border-radius: '.esc_attr($lawyer_lite_wooproducts_border_radius).'px;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_wooproducts_box_shadow = get_theme_mod('lawyer_lite_wooproducts_box_shadow',0);
	$lawyer_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$lawyer_lite_custom_css .='box-shadow: '.esc_attr($lawyer_lite_wooproducts_box_shadow).'px '.esc_attr($lawyer_lite_wooproducts_box_shadow).'px '.esc_attr($lawyer_lite_wooproducts_box_shadow).'px #eee;';
	$lawyer_lite_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$lawyer_lite_copyright_content_align = get_theme_mod('lawyer_lite_copyright_content_align');
	if($lawyer_lite_copyright_content_align != false){
		$lawyer_lite_custom_css .='.copyright p{';
			$lawyer_lite_custom_css .='text-align: '.esc_attr($lawyer_lite_copyright_content_align).';';
		$lawyer_lite_custom_css .='}';
	}

	$lawyer_lite_footer_content_font_size = get_theme_mod('lawyer_lite_footer_content_font_size', 14);
	$lawyer_lite_custom_css .='.copyright p{';
		$lawyer_lite_custom_css .='font-size: '.esc_attr($lawyer_lite_footer_content_font_size).'px !important;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_copyright_padding = get_theme_mod('lawyer_lite_copyright_padding', 15);
	$lawyer_lite_custom_css .='.copyright{';
		$lawyer_lite_custom_css .='padding-top: '.esc_attr($lawyer_lite_copyright_padding).'px; padding-bottom: '.esc_attr($lawyer_lite_copyright_padding).'px;';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_footer_widget_bg_color = get_theme_mod('lawyer_lite_footer_widget_bg_color');
	$lawyer_lite_custom_css .='#footer{';
		$lawyer_lite_custom_css .='background-color: '.esc_attr($lawyer_lite_footer_widget_bg_color).';';
	$lawyer_lite_custom_css .='}';

	$lawyer_lite_footer_widget_bg_image = get_theme_mod('lawyer_lite_footer_widget_bg_image');
	if($lawyer_lite_footer_widget_bg_image != false){
		$lawyer_lite_custom_css .='#footer{';
			$lawyer_lite_custom_css .='background: url('.esc_attr($lawyer_lite_footer_widget_bg_image).');';
		$lawyer_lite_custom_css .='}';
	}

	// scroll to top
	$lawyer_lite_scroll_font_size_icon = get_theme_mod('lawyer_lite_scroll_font_size_icon', 22);
	$lawyer_lite_custom_css .='#scroll-top .fas{';
		$lawyer_lite_custom_css .='font-size: '.esc_attr($lawyer_lite_scroll_font_size_icon).'px;';
	$lawyer_lite_custom_css .='}';

	// Slider Height 
	$lawyer_lite_slider_image_height = get_theme_mod('lawyer_lite_slider_image_height');
	$lawyer_lite_custom_css .='#slider img{';
		$lawyer_lite_custom_css .='height: '.esc_attr($lawyer_lite_slider_image_height).'px;';
	$lawyer_lite_custom_css .='}';

	// Display Blog Post 
	$lawyer_lite_display_blog_page_post = get_theme_mod( 'lawyer_lite_display_blog_page_post','In Box');
    if($lawyer_lite_display_blog_page_post == 'Without Box'){
		$lawyer_lite_custom_css .='.our-services .page-box{';
			$lawyer_lite_custom_css .='border:none; margin:25px 0;';
		$lawyer_lite_custom_css .='}';
	}

	// slider overlay
	$lawyer_lite_slider_overlay = get_theme_mod('lawyer_lite_slider_overlay', true);
	if($lawyer_lite_slider_overlay == false){
		$lawyer_lite_custom_css .='#slider img{';
			$lawyer_lite_custom_css .='opacity:1;';
		$lawyer_lite_custom_css .='}';
	} 
	$lawyer_lite_slider_image_overlay_color = get_theme_mod('lawyer_lite_slider_image_overlay_color', true);
	if($lawyer_lite_slider_overlay != false){
		$lawyer_lite_custom_css .='#slider{';
			$lawyer_lite_custom_css .='background-color: '.esc_attr($lawyer_lite_slider_image_overlay_color).';';
		$lawyer_lite_custom_css .='}';
	}








