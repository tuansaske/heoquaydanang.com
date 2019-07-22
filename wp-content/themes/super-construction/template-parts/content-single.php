<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business_Point
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-head">


		<div class="entry-footer">
			<?php 

			$cat_meta = business_point_get_option( 'category_meta' );

			if ( 1 !== absint( $cat_meta ) ) : 
				
				business_point_posted_on();

			endif; 
			
			business_point_entry_footer(); ?>
		</div>

	</div>

	<div class="content-wrap">
		<div class="content-wrap-inner">

			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'super-construction' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'super-construction' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
