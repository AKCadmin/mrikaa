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





<div id=media>
            <section class="pricing-section section-padding section-bg" id="section_5">

                <div class="container">

                    <div class="row">



                    <?php $posts = get_posts([
                    'post_type'  => 'page',
                    'title' => 'Media',
                ]);
                
                ?>
                <?php echo $posts[0]->post_content; ?>


                    </div>

                </div>

            </section>

            </div>
