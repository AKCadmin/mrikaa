

<!doctype html>

<html lang="en">
<html <?php language_attributes(); ?>>


<?php get_header();

 ?>

    

    <body>
    <?php wp_body_open(); ?>


             <?php get_template_part('home-content');?>


            <?php get_template_part('about-content');?>

            <?php get_template_part('template-gallery');?>





        
            

            


        








            <?php get_template_part('event-content');?>


            <?php get_template_part('media-content');?>




            <?php get_template_part('contact-content');?>








        <?php get_footer(); ?>



<!--



T e m p l a t e M o



-->



        <!-- JAVASCRIPT FILES -->

        <script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery.min.js"></script>

        <script src="<?php bloginfo( 'template_directory' ) ?>/js/bootstrap.min.js"></script>

        <script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery.sticky.js"></script>

        <script src="<?php bloginfo( 'template_directory' ) ?>/js/click-scroll.js"></script>

        <script src="<?php bloginfo( 'template_directory' ) ?>/js/custom.js"></script>



    </body>

</html>