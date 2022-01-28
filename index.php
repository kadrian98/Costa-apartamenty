<?php get_header();?>


<section class="content">

          <h1>O Nas</h1>

          <h2>COSTA Apartamenty</h2>

          <article>
                    <?php echo get_field('wpis_o_nas'); ?>
          </article>

          <div class="line"></div>

</section>

<section class="location">

          <h1>Nasze apartamenty</h1>
          <div class="line"></div>

          <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo get_field('image1')['sizes']['large'];?>" /></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image2')['sizes']['large'];?>" /></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image3')['sizes']['large'];?>" /></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image4')['sizes']['large'];?>" /></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image5')['sizes']['large'];?>" /></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image6')['sizes']['large'];?>" /></div>
      </div>
      <div style="color:#fff;" class="swiper-button-next"></div>
      <div style="color:#fff;" class="swiper-button-prev"></div>
    </div>


</section>

<section class="about">

        <div class="about-text">
                <h6>Nasza lokalizacja</h6>
                <div class="line"></div>
                <h1><?php echo get_field('naglowek_lokalizacja'); ?></h1>
                <p><?php echo get_field('opis_lokalizacja'); ?></p>
        </div>
        <div class="about-img">

                <img class="img1" src="<?php echo get_field('location1')['sizes']['large'];?>" alt="">
                <img class="img2" src="<?php echo get_field('location2')['sizes']['large'];?>" alt="">
                

        </div>



</section>

<?php get_footer(); ?>
     