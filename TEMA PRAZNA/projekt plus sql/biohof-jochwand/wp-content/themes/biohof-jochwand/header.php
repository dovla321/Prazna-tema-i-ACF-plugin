<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>

  <meta charset="<?php bloginfo('charset');?>">
  <title><?php wp_title('');?><?php if (wp_title('', false)) {echo ' :';}?> <?php bloginfo('name');?></title>

  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">

 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
  <?php wp_head() ?>


 </head>
 

 <body id="page-top" <?php body_class();?> >
  
  
  <div class="page-wrap">
    
    <nav class="navbar navbar-expand-lg navbar-default fixed-top " id="mainNav">
        <div class="container">
            <div class="line-top">gornja</div>
            <div class="mid-content">
              <div class="logo animsition-link"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/content/img/logo_biohof_jochwand.jpg" alt="biohof_jochwand"></a></div>

            logo i brdo i ikonice</div>
          
           <div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>
            
              
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <?php
                      wp_nav_menu( array(
                          'theme_location'  => 'primary',
                          'depth'           => 2,
                          'container'       => 'div',
                          'container_class' => 'collapse navbar-collapse',
                          'container_id'    => 'bs-example-navbar-collapse-1',
                          'menu_class'      => 'navbar-nav mx-auto animsition-link',
                          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'          => new WP_Bootstrap_Navwalker(),
                      ) );
                ?>

                
            </div>

            
            
        </div>
    </nav>
  

<section>
  <div class="aps-img img1"><img src=""> </div>
  <div class="aps-img img2"><img src=""> </div>
  
</section>
 
