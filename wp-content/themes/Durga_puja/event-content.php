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

<div id="event">
            <section class="schedule-section section-padding" id="section_4">

                <div class="container">

                    <div class="row">
                    <?php $posts = get_posts([
                    'post_type'  => 'page',
                    'title' => 'Event',
                ]);
                
                ?>
                <?php echo $posts[0]->post_content; ?>





                    </div>

                </div>

            </section>
            </div>