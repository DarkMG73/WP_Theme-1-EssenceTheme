<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gi-essence-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php


		if ( 'post' === get_post_type() ) :
			?>
	
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php gi_essence_theme_post_thumbnail(); ?>

	<div class="post-content-container">
		
		<div class="post-data-container">
			<?php 
			gi_essence_theme_posted_on();
			gi_essence_theme_posted_by();
			gi_essence_theme_entry_footer(); 
			?>
		</div>

		<div class="post-text-container">
			<?php 
			if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>


			<div class="entry-content">
				<?php
				the_excerpt(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gi-essence-theme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
				?>



				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gi-essence-theme' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div><!-- .post-text-container -->
	</div><!-- .post-content-container -->
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
