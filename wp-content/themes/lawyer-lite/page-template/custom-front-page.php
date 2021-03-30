<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'lawyer_lite_before_slider' ); ?>

  <?php if( get_theme_mod('lawyer_lite_slider_hide_show', false) != '' || get_theme_mod('lawyer_lite_responsive_slider', false) != ''){ ?>
    <section id="slider" class="mw-100 p-0">  
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('lawyer_lite_slider_speed_option', 3000)); ?>"> 
        <?php $lawyer_lite_slider_pages = array();
          for ( $count = 0; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'lawyer_lite_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $lawyer_lite_slider_pages[] = $mod;
            }
          }
          if( !empty($lawyer_lite_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $lawyer_lite_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $count = 3;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($count == 3){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption d-none d-md-block">
                <div class="inner_carousel">
                  <h1 class="text-left"><?php the_title(); ?></h1>
                  <div class="horizontal">
                    <hr>
                  </div>
                  <?php if( get_theme_mod('lawyer_lite_slider_button','FREE CONSULTATIONS') != ''){ ?>
                    <div class="consultant">
                      <a class="free-consultant p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('lawyer_lite_slider_button','FREE CONSULTATIONS'));?> <i class="fas fa-arrow-right pl-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('lawyer_lite_slider_button','FREE CONSULTATIONS'));?></span></a>
                    </div>
                  <?php } ?>             
                </div>
              </div>
            </div>
          <?php $count++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;?>    
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><?php esc_html_e('Previous','lawyer-lite'); ?></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','lawyer-lite' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><?php esc_html_e('Next','lawyer-lite'); ?></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','lawyer-lite' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'lawyer_lite_after_slider' ); ?>

  <?php if( get_theme_mod('lawyer_lite_post') != ''){ ?>
    <section class="about-section py-5 px-0">
      <div class="container">
        <?php
          $lawyer_lite_postData =  get_theme_mod('lawyer_lite_post');
          if($lawyer_lite_postData){
          $args = array( 'name' => esc_html($lawyer_lite_postData ,'lawyer-lite'));
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="row">
                <div class="col-lg-6 col-md-6 content-sec">
                  <h2 class="p-0"><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p> 
                  <hr class="ml-0 mt-0">
                  <div class ="about-btn pt-3">
                    <a href="<?php the_permalink(); ?>"><span><?php echo esc_html_e('Discover More','lawyer-lite'); ?><i class="fas fa-arrow-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Discover More','lawyer-lite' );?></span></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 abt-image">
                  <?php the_post_thumbnail(); ?>
                </div>  
              </div>
            <?php endwhile; 
            wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
        endif; } ?>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'lawyer_lite_after_about_section' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>