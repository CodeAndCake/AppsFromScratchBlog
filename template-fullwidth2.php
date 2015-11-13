<?php
/**
Template Name: Page - Fullwidth 2
 *
 * @package luna
 */

get_header(); ?>

<section id="page-content-container">

	<?php while ( have_posts() ) : the_post(); ?>
    
    	<?php if ( has_post_thumbnail( $post->ID ) ): ?>    
    
			<header class="page-entry-header" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
        
    	<?php else: ?>    
    
    		<header class="page-entry-header">
    
    	<?php endif; ?> 
    
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
        </div>
        <div class="entry-overlay"></div>
	</header><!-- .entry-header -->


 
<div class="entry-content-wrapper"> 
	<div class="grid grid-pad page-full-contain">
    	<div class="col-1-1">    
            <div id="primary" class="content-area shortcodes">
                <main id="main" class="site-main" role="main">


                    <!-- INFO PANELS -->
                    <div class="info-panel">

                    <?php if( have_rows('info_panels') ): ?>

                    <?php while( have_rows('info_panels') ): the_row(); ?>


                        <div class="grid grid-pad">
                            <div class="col-1-2">
                               <div class="content">
                                   <p><?php echo ?></p>
                               </div>
                            </div>
                            <div class="col-1-2">
                               <div class="content">
                                   <div class="archive-news-bg" style="background-image: url('<?php echo ?>');"></div>
                               </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>


        <!-- 
                        //<?php get_template_part( 'content', 'page' ); ?>
        
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>// -->
        
                    <?php endwhile; // end of the loop. ?>
        
                </main><!-- #main -->
            </div><!-- #primary -->
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
