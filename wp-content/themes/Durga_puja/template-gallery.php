







<div id="gallery">

<section class="artists-section section-padding" id="section_3">

    <div class="container">

        <div class="row justify-content-center">

<?php
/*Template Name: gallery*/
get_header();
query_posts(array(
   'post_type' => 'gallery'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
<?php endwhile;
 

?>

</div>
</div>
</section>
</div>









