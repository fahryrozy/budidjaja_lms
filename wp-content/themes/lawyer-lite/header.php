<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package lawyer-lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('lawyer_lite_preloader_option',true)!= '' || get_theme_mod('lawyer_lite_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper" class="w-100 h-100">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'lawyer-lite' ); ?></a>
    <div class="topbar">
      <div class="container">
        <div class="row m-0">
          <div class="logo col-lg-3 col-md-12 m-0 py-3 px-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if( get_theme_mod('lawyer_lite_site_title',true) != ''){ ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title text-uppercase p-0 mb-2 mt-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase p-0 mb-2 mt-0"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php }?>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('lawyer_lite_tagline',true) != ''){ ?>
                <p class="site-description mb-0">
                  <?php echo esc_html($description); ?>
                </p>
              <?php }?>
            <?php endif; ?>
          </div>
          <div class="contact col-lg-9 col-md-12 py-2">
            <div class="row topbar-section pt-3">
              <div class="col-lg-3 col-md-3">
                <?php if( get_theme_mod( 'lawyer_lite_email','' ) != '') { ?>
                  <div class="row top-data p-2">
                    <div class="col-lg-2 col-md-2 icon">
                      <i class="fas fa-at"></i>
                    </div>
                    <div class="col-lg-10 col-md-10">
                      <p class="top-text mb-0"><?php echo esc_html( get_theme_mod( 'lawyer_lite_mail','Email Text','lawyer-lite' ) ); ?></p>
                      <a href="mailto:<?php echo esc_attr( get_theme_mod('lawyer_lite_email','') ); ?>"><?php echo esc_html( get_theme_mod('lawyer_lite_email','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('lawyer_lite_email','')); ?></span></a>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-3 col-md-3">
                <?php if( get_theme_mod( 'lawyer_lite_call1','' ) != '') { ?>
                  <div class="row top-data">
                    <div class="col-lg-2 col-md-2 icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-lg-10 col-md-10">
                      <p class="top-text"><?php echo esc_html( get_theme_mod('lawyer_lite_call','Phone Text','lawyer-lite') ); ?></p>
                      <a href="tel:<?php echo esc_attr( get_theme_mod('lawyer_lite_call1','' )); ?>"><?php echo esc_html( get_theme_mod('lawyer_lite_call1','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('lawyer_lite_call1','')); ?></span></a>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-3 col-md-3">
                <?php if( get_theme_mod( 'lawyer_lite_location1','' ) != '') { ?>
                  <div class="row top-data">
                    <div class="col-lg-2 col-md-2 icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="col-lg-10 col-md-10">
                      <p class="top-text"><?php echo esc_html( get_theme_mod( 'lawyer_lite_location','Location','lawyer-lite' ) ); ?></p>
                      <p><?php echo esc_html( get_theme_mod('lawyer_lite_location1',__('area name,city name','lawyer-lite') )); ?></p>
                    </div>
                  </div>   
                <?php }?>          
              </div>
              <div class="col-lg-3 col-md-3">
                <?php if( get_theme_mod( 'lawyer_lite_time1','' ) != '') { ?>
                  <div class="row top-data">
                    <div class="col-lg-2 col-md-2 icon">
                      <i class="fas fa-at"></i>
                    </div>
                    <div class="col-lg-10 col-md-10">
                      <p class="top-text"><?php echo esc_html( get_theme_mod( 'lawyer_lite_time','Timing','lawyer-lite' ) ); ?></p>
                      <p><?php echo esc_html( get_theme_mod('lawyer_lite_time1',__('Mon-Fri 8:00am to 2:00pm','lawyer-lite') )); ?></p>
                    </div>
                  </div>  
                <?php }?>             
              </div>
            </div>                   
          </div>      
        </div>
      </div>
    </div>  
    <div class="<?php if( get_theme_mod( 'lawyer_lite_sticky_header', false) != '' || get_theme_mod( 'lawyer_lite_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div id="header">
        <?php 
          if(has_nav_menu('primary')){ ?>
          <div class="toggle-menu responsive-menu">
            <button class="mobiletoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','lawyer-lite'); ?></span></button>
          </div>
        <?php }?>
        <div class="container" >
          <div class="menu-color">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <div id="menu-sidebar text-center" class="nav sidebar">
                  <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lawyer-lite' ); ?>">
                    <?php
                      if(has_nav_menu('primary')){  
                        wp_nav_menu( array( 
                          'theme_location' => 'primary',
                          'container_class' => 'main-menu-navigation clearfix' ,
                          'menu_class' => 'clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav text-lg-left pl-lg-0">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) );
                      } 
                    ?>
                    <div id="contact-info">
                      <div class="social-media">
                        <?php if( get_theme_mod( 'lawyer_lite_facebook_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','lawyer-lite' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'lawyer_lite_twitter_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','lawyer-lite' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'lawyer_lite_linkdin_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','lawyer-lite' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'lawyer_lite_youtube_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','lawyer-lite' );?></span></a>
                        <?php } ?> 
                      </div>
                      <?php get_search_form();?>
                    </div>
                    <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','lawyer-lite'); ?></span></a>
                  </nav>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-6">
                <div class="search-box">
                  <button type="button" class="search-open"><i class="fas fa-search m-2 p-2"></i></button>
                </div>
              </div>
              <div class="search-outer">
                <div class="serach_inner w-100 h-100">
                  <?php get_search_form(); ?>
                </div>
                <button type="button" class="search-close">X</span></button>
              </div>
              <div class="social-media col-lg-2 col-md-3">
                <?php if( get_theme_mod( 'lawyer_lite_facebook_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','lawyer-lite' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'lawyer_lite_twitter_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','lawyer-lite' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'lawyer_lite_linkdin_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','lawyer-lite' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'lawyer_lite_youtube_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'lawyer_lite_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','lawyer-lite' );?></span></a>
                <?php } ?> 
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </header>