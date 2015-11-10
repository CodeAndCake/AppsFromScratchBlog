<?php
/**
 * @package luna
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<div class="archive-news-post">
			
			<!-- <h6><?php the_category(', ') ?></h6> -->

			<div class="archive-news-bg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');"></div> 
			<h4>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h4>
			
			<?php if ( 'option2' == luna_sanitize_index_content( get_theme_mod( 'luna_post_content' ) ) ) :
				the_content(); 
			else :
				the_excerpt();
			endif; ?> 
			
			<a href="<?php the_permalink(); ?>">
				<button>
					<?php echo esc_html( get_theme_mod( 'luna_blog_view_more', esc_html__( 'View More', 'luna' ) )) ?>
				</button>
			</a>
		</div>
	</header><!-- .entry-header --> 
		
</article><!-- #post-## -->