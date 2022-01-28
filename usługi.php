<?php
/*
Template Name: uslugi
*/
?>

<?php get_header(); ?>

<section class="uslugi">

          <h1 class="uslugi-title"><?php the_title(); ?></h1>

          <article><?php the_content();?></article>

</section>


<div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper-uslugi"
    >
      <div
        class="parallax-bg"
        style="background-image: url(<?php echo get_theme_file_uri('/img/slider5.jpg'); ?>);"
        data-swiper-parallax="-23%"
      ></div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="title" data-swiper-parallax="-300"><?php echo get_field('naglowek1'); ?></div>
          <div class="text" data-swiper-parallax="-100">
            <p>
            <?php echo get_field('opis1'); ?>
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="title" data-swiper-parallax="-300"><?php echo get_field('naglowek2'); ?></div>
          <div class="text" data-swiper-parallax="-100">
            <p>
            <?php echo get_field('opis2'); ?>
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="title" data-swiper-parallax="-300"><?php echo get_field('naglowek3'); ?></div>
          <div class="text" data-swiper-parallax="-100">
            <p>
            <?php echo get_field('opis3'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

<?php get_footer(); ?>

