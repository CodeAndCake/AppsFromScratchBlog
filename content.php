<?php
/**
 * @package luna
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <div class="archive-news-post" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
                	<div class="layer" style="background-color: rgba(<?php echo get_field('colour_overlay');?>);">
                	</div>
                    <h2>
                    	<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
                        </a>
                    </h2> 

                </div>
            </header><!-- .entry-header -->      
</article><!-- #post-## -->