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
      

      <div id="about">
    <section class="about-section section-padding" id="section_2">

    <div class="container">
            <div class="row">  
                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="services-info">
                <?php $posts = get_posts([
                    'post_type'  => 'page',
                    'title' => 'About',
                ]);
                
                ?>
                <?php echo $posts[0]->post_content; ?>
            </div>
            </div>


        <div class="col-lg-6 col-12">
        <div class="about-text-wrap">
        
        <img src="<?php echo get_the_post_thumbnail_url($posts[0]->ID); ?>" class="about-image img-fluid">
            </div>
            </div>
            </div>
            </div>
             
        
        </section>
            </div>