<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h5 class="entry-title parabox-blog"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h5>'
		);
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

            <div class="entry-meta">
    <span class="posted-label">Posted</span>
    <span class="posted-date"><?php echo date_i18n( 'F d, Y', strtotime( get_the_date() ) ); ?></span>
</div><!-- .entry-meta -->


		<?php endif; ?>

	</header><!-- .entry-header -->

	

	<div class="entry-content">

		<?php
		echo wp_trim_words( get_the_excerpt(), 20, '...' );
		?>
        <p class="mt-2"><a href="<?php the_permalink(); ?>" class="post-btn"><?php echo esc_html__( 'CONTINUE READING', 'your-textdomain' ); ?></a></p>
      
       
        

	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer> -->

</article><!-- #post-<?php the_ID(); ?> -->