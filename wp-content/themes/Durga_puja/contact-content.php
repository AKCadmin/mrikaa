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



<div id=contact>
            <section class="contact-section section-padding" id="section_6">

                <div class="container">

                    <div class="row">



                    <div class="col-lg-8 col-12 mx-auto">

                    <?php $posts = get_posts([
                    'post_type'  => 'page',
                    'title' => 'Contact',
                ]);
                
                ?>
                <?php echo $posts[0]->post_content; ?>



<div class="tab-content shadow-lg mt-5" id="nav-tabContent">

<div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">

    <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">

    
    <?php echo do_shortcode('[contact-form-7 id="0271d4f" title="Untitled"]'); ?>

</form>

    </div>

    



    <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.810023040465!2d88.3779914!3d22.8465171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89126dc02fc2f%3A0x559d249d3d225e63!2sMala%20Para%20Durga%20Mandap!5e0!3m2!1sen!2sin!4v1682866054113!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                    <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->

    </div>

</div>

</div>



                    </div>

                </div>

            </section>

        </main>
        </div>
