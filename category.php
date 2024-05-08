<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

// Get the current queried object
$current_object = get_queried_object();

// Check if it's a category archive
if ( is_category() && $current_object ) {
    $category_name = $current_object->name;
} else {
    // If not a category archive, set a default cover image title
    $category_name = 'Stay Informed on Tax, Finance, & Consultation with Indiataxfile';
}
?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
      
    <!-- cover image area start -->
        <div class="blog-cover-image">      
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-content">
                        <h1><?php echo esc_html( $category_name ); ?></h1>   
                        <p>Stay Informed on Tax, Finance, & Consultation<br>with Indiataxfile</p>                   
                    </div>
                </div>
            </div>  
        </div>
        <!-- cover image area end -->

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			<main class="site-main" id="main">

				<?php
				// Start the Loop.
				if ( have_posts() ) {
					$i = 0;
					while ( have_posts() ) {
						the_post();
						if ($i % 2 == 0) {
							echo '<div class="row">';
						}
						echo '<div class="col-md-6 mb-3">';
						get_template_part( 'loop-templates/content', get_post_format() );
						echo '</div>';
						if ($i % 2 != 0 || $i == (count($posts)-1)) {
							echo '</div>';
						}
						$i++;
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main>

			<?php
			// Display the pagination component.
			understrap_pagination();

			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
?>
