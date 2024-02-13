<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<nav class="navbar navbar-expand-lg">

                <div class="container">

                    <a class="navbar-brand" href="index.html">

                        Malapara Durga Puja

                    </a>



                    <!--<a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>-->

    

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>
x
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
