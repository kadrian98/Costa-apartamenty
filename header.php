<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php wp_head(); ?>
</head>
<body>

<section id="header" style="background-image: url(<?php echo get_theme_file_uri('/background1.jpg'); ?>);">

<div class="nav">
          <nav class="nav-menu">

                    
                    
          <a href="<?php echo site_url('/'); ?>"><img class="photo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>

                    <ul class="nav-menu-ul">
                                <li class="nav-menu-li"><a href="<?php echo site_url(); ?>">Strona główna</a></li>
                                <li class="nav-menu-li"><a href="<?php echo site_url('/galeria'); ?>">Galeria</a></li>
                                <li class="nav-menu-li"><a href="<?php echo site_url('/uslugi'); ?>">Usługi</a></li>
                                <li class="nav-menu-li"><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
                                <a href="mailto:rezerwacja@costa-apartamenty.pl"><button class="button">Rezerwuj <i class="icon-bell-alt"></i></button></a>                               
                                <li class="nav-menu-li"><?php echo do_shortcode('[gtranslate]'); ?></li>
                                
                    </ul>      
                    <div class="nav-toggle">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                        </div>   
                    
                </div>
                    
                
          </nav>
          
</div>
          
</section>

<section class="center-logo">

          <h1>COSTA</h1>
          <h5>Apartamenty</h5>
          <h6><?php echo is_front_page() ? get_field('glowny_wpis') : the_title()?></h6>
          

</section>