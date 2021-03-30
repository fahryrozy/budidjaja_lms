<?php
/**
 * The template part for displaying services
 *
 * @package lawyer-lite
 * @subpackage lawyer-lite
 * @since lawyer-lite 1.0
 */
?>  
<article class="page-box row">
    <?php 
        if(has_post_thumbnail()) { ?>
        <div class="box-image col-lg-6 col-md-6">
            <?php the_post_thumbnail();  ?>
        </div>
    <?php } ?>
    <div class="new-text <?php 
        if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>>
        <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>   
        <?php if(get_theme_mod('lawyer_lite_blog_post_description_option') == 'Full Content'){ ?>
            <?php the_content(); ?>
        <?php }
        if(get_theme_mod('lawyer_lite_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( lawyer_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('lawyer_lite_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('lawyer_lite_post_suffix_option','...') ); ?></p></div>
            <?php }?>
        <?php }?>
        <?php if( get_theme_mod('lawyer_lite_button_text','Read More') != ''){ ?>
          <div class="read-more-btn">
            <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('lawyer_lite_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('lawyer_lite_button_text','Read More'));?></span></a>
          </div>
        <?php } ?>
    </div>
    <div class="clearfix"></div>
</article>