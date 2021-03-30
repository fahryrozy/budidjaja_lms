<?php
/**
 * The Template for displaying all single posts.
 *
 * @package lawyer-lite
 */

get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="middle-align">
    	<?php
        $lawyer_lite_left_right = get_theme_mod( 'lawyer_lite_single_post_sidebar_layout','Right Sidebar');
        if($lawyer_lite_left_right == 'Left Sidebar'){ ?>
            <div class="row">
		    	<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8" class="content-ts">
					<?php if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content-single' ); 
						endwhile;
						
						else :
							get_template_part( 'no-results' );
						endif; 
		            ?>
		            <div class="clearfix"></div>
		       	</div>
		    </div>
	    <?php }else if($lawyer_lite_left_right == 'Right Sidebar'){ ?>
	        <div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ts">
					<?php if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content-single' ); 
						endwhile;

						else :
							get_template_part( 'no-results' );
						endif; 
		            ?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
			</div>
		<?php }else if($lawyer_lite_left_right == 'One Column'){ ?>
		    <div class="row">
				<div class="content-ts">
					<?php if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						 	get_template_part( 'template-parts/content-single' ); 
						endwhile;

						else :
						 	get_template_part( 'no-results' );
						endif; 
		            ?>
		       	</div>
		    </div>
		<?php }else {?>
			<div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ts">
					<?php if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						 	get_template_part( 'template-parts/content-single' ); 
						endwhile;

						else :
						 	get_template_part( 'no-results' );
						endif; 
		            ?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
			</div>
		<?php }?>
	    <div class="clearfix"></div>
    </main>
</div>
<?php get_footer(); ?>