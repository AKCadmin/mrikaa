<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">



<meta name="description" content="">

<meta name="author" content="">



<title>Malapara Durga Puja</title>

<!-- Favicon -->

<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_directory' ) ?>/images/favicon.png">



<!-- CSS FILES -->        

<link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com">



<link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.gstatic.com" crossorigin>



<link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

        

<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">



<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-icons.css" rel="stylesheet">



<link href="<?php echo get_template_directory_uri(); ?>/css/templatemo-festava-live.css" rel="stylesheet">



<!--



TemplateMo 583 Malapara Durga Puja



https://templatemo.com/tm-583-festava-live



-->
<header class="site-header">

                <div class="container">

                    <div class="row">

                        

                        <div class="col-lg-12 col-12 d-flex flex-wrap">

                        <?php Dynamic_sidebar('header-2') ?>   

                        </div>



                    </div>

                </div>

            </header>
<nav class="navbar navbar-expand-lg">

                <div class="container">


                <a class="navbar-brand" href="index.html">

                <?php Dynamic_sidebar('header-1') ?>

                </a>



                    <!--<a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>-->

    

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

    

                    <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'nav'
                    ) );
                    ?>



                        <!---<a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>-->

                    </div>

                </div>

            </nav>



<?php wp_head(); ?>
</head>

