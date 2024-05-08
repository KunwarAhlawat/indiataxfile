<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<!-- Topbar start -->
<!-- <section class="topbar <?php echo (have_posts() && $wp_query->post_count == 1) ? 'single-post' : ''; ?>">
<div class="container">
    <div class="scrolling-area">
        <div class="scrolling-text">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5, // Change this to the number of latest posts you want to fetch
                'orderby' => 'date',
                'order' => 'DESC',
                'category_name' => 'news', // Specify the category slug here
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                echo '<p>';
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a> ';
                }
                echo '</p>';
            } else {
                // no posts found
                echo 'No posts found.';
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
</section> -->
<!-- Topbar end -->

<!-- header desktop start -->
<header class="container-fluid header-section d-none d-lg-block">
        <div class="container ">
            <nav>
                <div class="logo">
                <?php get_template_part( 'global-templates/navbar-branding' ); ?>
                </div>
                <ul>
                    <!-- Service Nav -->
                    <li><a href="https://indiataxfile.com">Home</a></li>
                    <li><a href="#">Services <i class="fa-solid fa-caret-down"></i></a>
                        <div class="megamenu">
                            <div class="row ">
                                <!-- Tax Planning -->
                                <div class=" col-lg-4 megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Tax
                                        Planning</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/personal-tax-planning/">Personal Tax
                                                Planning </a></li>
                                        <li><a href="https://indiataxfile.com/corporate-tax-planning/">Corporate Tax
                                                Planning</a></li>
                                        <li><a href="https://indiataxfile.com/gst-and-indirect-tax-planning/">GST and
                                                Indirect Tax Planning</a></li>
                                        <li><a href="https://indiataxfile.com/tax-compliance-and-filing/">Tax Compliance
                                                and Filing</a></li>
                                    </ul>
                                </div>

                                <!-- Audit and Assurance -->
                                <div class="col-lg-4 megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Audit and
                                        Assurance</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/tax-audits/">Tax Audits</a></li>
                                        <li><a href="https://indiataxfile.com/compliance-audit/">Compliance Audit</a>
                                        </li>
                                        <li><a href="https://indiataxfile.com/statutory-audits/">Statutory Audits</a>
                                        </li>
                                        <li><a href="https://indiataxfile.com/internal-audits/">Internal Audits</a></li>
                                    </ul>
                                </div>

                                <!-- Financial Consulting -->
                                <div class="col-lg-4 megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Tax Financial
                                        Consulting</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/financial-planning/">Financial
                                                Planning</a></li>
                                        <li><a href="https://indiataxfile.com/budgeting-and-forecasting/">Budgeting and
                                                forecasting</a></li>
                                        <li><a href="https://indiataxfile.com/investment-advisory/">Investment
                                                Advisory</a></li>
                                        <li><a href="https://indiataxfile.com/wealth-management/">Wealth Management</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <!-- Compliance Services -->
                                <div class="col-lg-4 megamenu-item">
                                    <span class="menu-heading"><i class="fa-solid fa-square-check"></i>Compliance
                                        Services</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/company-registrations/">Company
                                                registrations</a></li>
                                        <li><a href="https://indiataxfile.com/roc-compliance/">ROC Compliance</a></li>
                                        <li><a href="https://indiataxfile.com/tds-and-tcs-filling/">TDS and TCS
                                                Filing</a></li>
                                        <li><a href="https://indiataxfile.com/income-tax-reporting/">Income tax
                                                Reporting</a></li>
                                        <li><a href="https://indiataxfile.com/ngos-compliance/">NGO’S
                                                COMPLIANCE</a></li>
                                    </ul>
                                </div>
                                <!-- Business Advisory -->
                                <div class=" col-lg-8 megamenu-item-2">
                                    <span><i class="fa-solid fa-square-check"></i>Business
                                        Advisory</span>

                                    <div class="megamenu-subitem">
                                        <ul>
                                            <li><a href="https://indiataxfile.com/trademark-registration/">Trademark</a>
                                            </li>
                                            <li><a href="https://indiataxfile.com/fssai/">FSSAI</a></li>
                                            <li><a href="https://indiataxfile.com/ngos/">NGO’S</a></li>
                                            <li><a href="https://indiataxfile.com/import-export/">Import & Export</a>
                                            </li>
                                            <li><a href="https://indiataxfile.com/startup-consultation/">Startup
                                                    Consultation</a></li>

                                        </ul>
                                        <ul>
                                            <li><a href="https://indiataxfile.com/succession-planning/">Succession
                                                    Planning</a></li>
                                            <li><a href="https://indiataxfile.com/financial-restructuring/">Financial
                                                    Restructuring</a></li>
                                            <li><a href="https://indiataxfile.com/merger-and-acquisition-consultation/">M&A
                                                    Consultation</a></li>
                                            <li><a
                                                    href="https://indiataxfile.com/business-expansion-and-diversification/">Expansion
                                                    & Diversification</a></li>
                                            <li><a
                                                    href="https://indiataxfile.com/business-structure-and-incorporation/">Business
                                                    Structure and Incorporation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </li>

                    <!-- Solution Nav -->
                    <li><a href="#">Solution <i class="fa-solid fa-caret-down"></i></a>
                        <div class="solution-megamenu">

                            <div class="row">
                                <!-- Individual Taxpayers -->
                                <div class="col-lg-6 solution-megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Individual Taxpayers</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/tax-planning-for-individuals/">Tax
                                                Planning for Individuals</a></li>
                                        <li><a href="https://indiataxfile.com/income-tax-return-filing/">Income Tax
                                                Return Filing</a></li>
                                        <li><a href="https://indiataxfile.com/nri-taxation-services/">NRI Taxation
                                                Services</a></li>
                                        <li><a href="https://indiataxfile.com/tax-exemptions-and-deductions/">Tax
                                                Exemptions and Deductions</a></li>
                                    </ul>
                                </div>
                                <!-- Small and Medium Enterprises -->
                                <div class=" col-lg-6 solution-megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Small and Medium Enterprises</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/accounting-and-book-keeping/">Accounting
                                                and Book-keeping</a></li>
                                        <li><a href="https://indiataxfile.com/cash-flow-management/">Cash Flow
                                                Management</a></li>
                                        <li><a href="https://indiataxfile.com/financial-analysis/">Financial
                                                Analysis</a></li>
                                        <li><a href="https://indiataxfile.com/financial-reporting/">Financial
                                                Reporting</a></li>
                                        <li><a href="https://indiataxfile.com/business-taxation-services/">Business
                                                Taxation Services</a></li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </li>

                    <!-- Resource Nav -->
                    <li><a href="#">Resources <i class="fa-solid fa-caret-down"></i></a>
                        <div class="resource-megamenu">
                            <div class="row">
                                <!-- Knowledge Hub -->
                                <div class="col-lg-4 resource-megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Knowledge</span>

                                    <ul>
                                        <li><a href="#">Case Study</a></li>
                                        <li><a href="https://indiataxfile.com/blogs/">Blog</a></li>
                                        <li><a href="#">Guide</a></li>
                                    </ul>
                                </div>
                                <!-- Updates & Information -->
                                <div class="col-lg-4 resource-megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Updates</span>

                                    <ul>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Videos</a></li>
                                    </ul>
                                </div>
                                <!-- Updates & Information -->
                                <div class="col-lg-4 resource-megamenu-item">
                                    <span><i class="fa-solid fa-square-check"></i>Support</span>

                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="https://indiataxfile.com/about/">About Us</a></li>

                                    </ul>
                                </div>
                            </div>




                        </div>
                    </li>
                    <li><a href="https://indiataxfile.com/contact/">Contact</a></li>

                </ul>
                <div class="nav-cta">
                    <a href="" class="btn btn-cta" data-bs-toggle="modal" data-bs-target="#exampleModal">Consult an Expert</a>
                </div>


            </nav>

        </div>
</header>
<!-- header desktop end -->


    <!-- offcanvas mega menu start -->
    <section class="offcanvas-menu-section d-lg-none">
        <div class="container-fluid">
            <div class="offcanvas-menu-head">
                <div class="offcanvas-logo">
                <?php get_template_part( 'global-templates/navbar-branding' ); ?>
                </div>
                <div class=" offcanvas-triger">
                    <i class="fa-solid fa-bars offcanvas-triger " onclick="showMenu()"></i>
                    <div class="offcanvas-menu-content">
                        <div class="offcanvas-menu-head">
                            <div class="offcanvas-logo">
                                <img src="https://indiataxfile.com/wp-content/uploads/2024/01/logo.webp" alt="">
                            </div>

                            <div class="offcanvas-triger"><i class="fa-solid fa-xmark" onclick="closeMenu()"></i></div>

                        </div>
                        <!-- Main Dropdown Start -->
                        <!-- Home -->
                        <div class="m-accordion">
                            <div class="m-accordion-item">
                                <div class="m-accordion-header"><a href="https://indiataxfile.com">Home</a></div>
                            </div>

                            <!-- Services -->
                            <div class="m-accordion-item">
                                <div class="m-accordion-header">
                                    <a href="#">Services</a>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                                <div class="m-accordion-content">
                                    <hr>
                                    <span><i class="fa-regular fa-square-check"></i> Tax Planning</span>
                                    <ul>
                                        <li><a href="https://indiataxfile.com/personal-tax-planning/">Personal Tax
                                                Planning </a></li>
                                        <li><a href="https://indiataxfile.com/corporate-tax-planning/">Corporate Tax
                                                Planning</a></li>
                                        <li><a href="https://indiataxfile.com/gst-and-indirect-tax-planning/">GST and
                                                Indirect Tax Planning</a></li>
                                        <li><a href="https://indiataxfile.com/tax-compliance-and-filing/">Tax Compliance
                                                and Filing</a></li>
                                    </ul>

                                    <span><i class="fa-regular fa-square-check"></i> Audit and Assurance</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/tax-audits/">Tax Audits</a></li>
                                        <li><a href="https://indiataxfile.com/compliance-audit/">Compliance Audit</a>
                                        </li>
                                        <li><a href="https://indiataxfile.com/statutory-audits/">Statutory Audits</a>
                                        </li>
                                        <li><a href="https://indiataxfile.com/internal-audits/">Internal Audits</a></li>
                                    </ul>

                                    <span><i class="fa-regular fa-square-check"></i> Financial Consulting</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/financial-planning/">Financial
                                                Planning</a></li>
                                        <li><a href="https://indiataxfile.com/budgeting-and-forecasting/">Budgeting and
                                                forecasting</a></li>
                                        <li><a href="https://indiataxfile.com/investment-advisory/">Investment
                                                Advisory</a></li>
                                        <li><a href="https://indiataxfile.com/wealth-management/">Wealth Management</a>
                                        </li>
                                    </ul>

                                    <span><i class="fa-regular fa-square-check"></i> Compliance Services</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/company-registrations/">Company
                                                registrations</a></li>
                                        <li><a href="https://indiataxfile.com/roc-compliance/">ROC Compliance</a></li>
                                        <li><a href="https://indiataxfile.com/tds-and-tcs-filling/">TDS and TCS
                                                Filing</a></li>
                                        <li><a href="https://indiataxfile.com/income-tax-reporting/">Income tax
                                                Reporting</a></li>
                                        <li><a href="https://indiataxfile.com/ngos-compliance/">NGO’S
                                                COMPLIANCE</a></li>
                                    </ul>

                                    <span><i class="fa-regular fa-square-check"></i> Business Advisory</span>

                                    <ul>
                                        <li><a href="https://indiataxfile.com/trademark-registration/">Trademark</a>
                                        </li>
                                        <li><a href="https://indiataxfile.com/fssai/">FSSAI</a></li>
                                        <li><a href="https://indiataxfile.com/ngos/">NGO’S</a></li>
                                        <li><a href="https://indiataxfile.com/import-export/">Import & Export</a>
                                        </li>
                                        <li><a href="https://indiataxfile.com/startup-consultation/">Startup
                                                Consultation</a></li>
                                        <li><a href="https://indiataxfile.com/succession-planning/">Succession
                                                Planning</a></li>
                                        <li><a href="https://indiataxfile.com/financial-restructuring/">Financial
                                                Restructuring</a></li>
                                        <li><a href="https://indiataxfile.com/merger-and-acquisition-consultation/">M&A
                                                Consultation</a></li>
                                        <li><a href="https://indiataxfile.com/business-expansion-and-diversification/">Expansion
                                                & Diversification</a></li>
                                        <li><a href="https://indiataxfile.com/business-structure-and-incorporation/">Business
                                                Structure and Incorporation</a></li>
                                    </ul>




                                </div>
                            </div>

                            <!-- Solutions -->
                            <div class="m-accordion-item">
                                <div class="m-accordion-header">
                                    <a href="#">Solutions</a>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                                <div class="m-accordion-content">
                                    <div>
                                        <hr>
                                        <span><i class="fa-regular fa-square-check"></i> Individual Taxpayers</span>

                                        <ul>
                                            <li><a href="https://indiataxfile.com/tax-planning-for-individuals/">Tax
                                                    Planning for Individuals</a></li>
                                            <li><a href="https://indiataxfile.com/income-tax-return-filing/">Income Tax
                                                    Return Filing</a></li>
                                            <li><a href="https://indiataxfile.com/nri-taxation-services/">NRI Taxation
                                                    Services</a></li>
                                            <li><a href="https://indiataxfile.com/tax-exemptions-and-deductions/">Tax
                                                    Exemptions and Deductions</a></li>
                                        </ul>


                                        <span><i class="fa-regular fa-square-check"></i> Small and Medium
                                            Enterprises</span>

                                        <ul>
                                            <li><a href="https://indiataxfile.com/accounting-and-book-keeping/">Accounting
                                                    and Book-keeping</a></li>
                                            <li><a href="https://indiataxfile.com/cash-flow-management/">Cash Flow
                                                    Management</a></li>
                                            <li><a href="https://indiataxfile.com/financial-analysis/">Financial
                                                    Analysis</a></li>
                                            <li><a href="https://indiataxfile.com/financial-reporting/">Financial
                                                    Reporting</a></li>
                                            <li><a href="https://indiataxfile.com/business-taxation-services/">Business
                                                    Taxation Services</a></li>
                                        </ul>





                                    </div>
                                </div>
                            </div>

                            <!-- Resources -->
                            <div class="m-accordion-item">
                                <div class="m-accordion-header">
                                    <a href="#">Resources</a>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                                <div class="m-accordion-content">
                                    <div>
                                        <hr>
                                        <span><i class="fa-regular fa-square-check"></i> Knowledge Hub</span>

                                        <ul>
                                            <li><a href="#">Case Study</a></li>
                                            <li><a href="https://indiataxfile.com/blogs/">Blog</a></li>
                                            <li><a href="#">Guide</a></li>
                                        </ul>
                                        <span><i class="fa-regular fa-square-check"></i> Updates & Information</span>

                                        <ul>
                                            <li><a href="#">Newsletter</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Videos</a></li>
                                        </ul>
                                        <span><i class="fa-regular fa-square-check"></i> Support & Assistance</span>

                                        <ul>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="https://indiataxfile.com/about/">About Us</a></li>

                                        </ul>



                                    </div>
                                </div>
                            </div>
                            <!-- About -->
                            <div class="m-accordion-item">
                                <div class="m-accordion-header"><a href="https://indiataxfile.com/about/">About</a>
                                </div>
                            </div>
                            <!-- Contact -->
                            <div class="m-accordion-item">
                                <div class="m-accordion-header"><a href="https://indiataxfile.com/contact/">Contact</a>
                                </div>
                            </div>
                            <!-- Contact -->
                            <div class="m-accordion-item">
                                <div class="m-accordion-header"><a href="https://indiataxfile.com/blogs/">Blog</a></div>
                            </div>
                            <!-- CTA Button Start -->
                            <div class="mt-2">
                                <a href="" class="btn btn-cta-w100" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" onclick="closeMenu()">Consult an Expert</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offcanvas mega menu -->

<script>
// Show and Hide MegaMenu Item Functions Start
function showMenu() {
    var m = document.querySelector('.offcanvas-menu-content');
    m.classList.add('show-menu');
}

function closeMenu() {
    var m = document.querySelector('.offcanvas-menu-content');
    m.classList.remove('show-menu');
} // Show and Hide MegaMenu Item Functions End

// Function for Mobile offcanvas Menu Start
// Main Dropdown
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.m-accordion-item');

    accordionItems.forEach(item => {
        item.addEventListener('click', function () {
            item.classList.toggle('active');
        });
    });
}); // Function for Mobile offcanvas Menu End

document.addEventListener("DOMContentLoaded", function() {
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    window.onscroll = function() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    };
});
</script> 
