<div class="header_section">
         <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="<?php bloginfo('template_directory') ?>/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="menu bar">
               <ul class="navbar-nav mr-auto">
                  <?php 
                  wp_nav_menu(array('theme_location'=>'primary-menu'))
                  
                  ?>
                  <li class="nav-item">
                     <a class="nav-link" href="#"><img src="<?php bloginfo('template_directory') ?>/images/serach-icon.png"></a>
                  </li>
               </ul>
               </div>

            </nav>
         </div>