<?php
/**
 * The template part for displaying services
 *
 * @package lawyer-lite
 * @subpackage lawyer-lite
 * @since lawyer-lite 1.0
 */
?> 
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio   = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <div class="page-box">
    <?php if(get_theme_mod('lawyer_lite_blog_post_description_option') != 'Full Content'){ ?>
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the audio file.
          if ( ! empty( $audio ) ) {
            foreach ( $audio as $audio_html ) {
              echo '<div class="entry-audio">';
                echo $audio_html;
              echo '</div><!-- .entry-audio -->';
            }
          };
        };
      ?>
    <?php }?>
    <div class="new-text">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if(get_theme_mod('lawyer_lite_blog_post_description_option') == 'Full Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('lawyer_lite_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( lawyer_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('lawyer_lite_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('lawyer_lite_post_suffix_option','...') ); ?></p></div>
        <?php }?>
      <?php }?>
      <?php if( get_theme_mod('lawyer_lite_button_text','Read More') != ''){ ?>
        <div class="content-bttn">
          <div class="second-border">
            <a href="<?php the_permalink();?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'lawyer-lite' ); ?>"><?php echo esc_html(get_theme_mod('lawyer_lite_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('lawyer_lite_button_text','Read More'));?></span></a>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="clearfix"></div>
  </div>
</article>