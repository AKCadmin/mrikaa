<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage DURGA_PUJA
 * @since DURGA_PUJA
 */

?>

        <main>








            



            <section class="hero-section" id="section_1">

                <div class="section-overlay"></div>



                <div class="container d-flex justify-content-center align-items-center">

                    <div class="row">



                        <div class="col-12 mt-auto mb-5 text-center">

                        <?php Dynamic_sidebar('home-1') ?>



                        <?php Dynamic_sidebar('home-2') ?>   

                        </div>



                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">

                            <div class="date-wrap">

                            <?php Dynamic_sidebar('home-3') ?>   

                            </div>



                            <div class="location-wrap mx-auto py-3 py-lg-0">

                            <?php Dynamic_sidebar('home-4') ?>    

                            </div>



                            <div class="social-share">

                            <?php Dynamic_sidebar('home-5') ?> 

                            </div>

                        </div>

                    </div>

                </div>



                <div class="video-wrap">

                    <video autoplay="" loop="" muted="" class="custom-video" poster="">

                        <source src="<?php bloginfo( 'template_directory' ) ?>/video/pexels-2022395.mp4" type="video/mp4">



                        Your browser does not support the video tag.

                    </video>

                </div>

            </section>