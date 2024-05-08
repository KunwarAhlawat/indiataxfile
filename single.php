<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="single-wrapper">

    <section class="single-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5 mt-md-0">
                    <div class="single-hero-content">
                        <?php
                        // Display Rank Math breadcrumbs
                        if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
                            rank_math_the_breadcrumbs();
                        }
                        ?>
                        <h1 class="single-hero-title"><?php the_title(); ?></h1>
                        <span class="single-meta">
                            Posted by <?php the_author(); ?> on <?php echo get_the_date(); ?> in <?php the_category( ', ' ); ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-5 mt-md-3">
                    <div class="single-img">
                        <!-- You can place your image here -->
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container-xxl single-content" id="content" tabindex="-1">
        <div class="row justify-content-center">
            <!-- Left sidebar content -->
            <div class="col-2 d-none d-lg-block" id="left-sidebar">
                <!-- Sticky Table of Contents -->
                <div id="sticky-toc">
                    <h5>Table of Content</h4>
                    <ul id="toc-list"></ul>
                </div>
            </div>

            <!-- Main content area -->
            <main class="site-main col" id="main-content">
                <div class="row">
                    <div class="col-12">
                        <?php
                        while ( have_posts() ) {
                            the_post();
                            // Content template part
                            get_template_part( 'loop-templates/content', 'single' );
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                        }
                        ?>
                    </div>
                </div>         
            </main>

            <!-- Right sidebar content -->
            <div class="col-3 d-none d-xl-block" id="right-sidebar">
                <?php
                if ( is_active_sidebar( 'right-sidebar' ) ) {
                    dynamic_sidebar( 'right-sidebar' );
                }
                ?>
            </div>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
?>


<script>
document.addEventListener("DOMContentLoaded", function() {
    var headings = document.querySelectorAll("#main-content h2");
    var tocList = document.getElementById("toc-list");

    if (headings.length > 0) {
        headings.forEach(function(heading) {
            // Generate ID for the heading if it doesn't have one
            if (!heading.id) {
                heading.id = "heading-" + Math.random().toString(36).substr(2, 10);
            }

            var tocItem = document.createElement("li");
            var tocLink = document.createElement("a");
            tocLink.textContent = heading.textContent;
            tocLink.href = "#" + heading.id; // Update href to point to heading id
            tocItem.appendChild(tocLink);
            tocList.appendChild(tocItem);
        });

        // Highlight the active link in the table of contents
        var tocLinks = document.querySelectorAll("#toc-list a");
        var options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };

        var observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    tocLinks.forEach(link => {
                        link.classList.remove("active");
                        if (link.getAttribute("href").slice(1) === entry.target.id) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        }, options);

        headings.forEach(heading => {
            observer.observe(heading);
        });
    }
});

</script>
