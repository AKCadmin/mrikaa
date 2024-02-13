<?php
/**
 * Template part for displaying post about page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div  id="about">
            
            <section class="about-section section-padding" id="section_2">

<div class="container">

    <div class="row">



        <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">

            <div class="services-info">

                <h2 class="text-white mb-4"><?php the_field('heading_about'); ?></h2>
                
                
                <li class="text-white" ><?php the_field('about_content'); ?></li>
            </div>
        </div>

        



        <div class="col-lg-6 col-12">

            <div class="about-text-wrap">

            <img src='<?php echo esc_url( get_template_directory_uri() ) ?>/images/pexels-alexander-suhorucov-64575' alt="About Image">
                </div>

            </div>
        </div>
    </div>

</div>

</section>
</div>