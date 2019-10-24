<section class="main-blog">
  <div class="container padding-top-bottom">
    <h2 class="main-general__title">
      Blog
    </h2>
    <div class="d-flex justify-content-center">
      <p class="main-general__subtitle">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente repellendus quibusdam Lorem ipsum dolor sit
        amet consectetur, adipisicing elit.
      </p>
    </div>

    <div class="row main-featured__container wow animated fadeInRight" style="visibility: visible;">
    <?php $args = array( 'posts_per_page' => 3); ?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-lg-4 col-md-6">
        <div class="main-blog__item">
          <div class="main-blog__img">
          <img
            src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="">
          </div>
          <div class="main-blog__description">
            <div class="main-blog__detail">
              <p>
                <i class="fa fa-calendar-check-o"></i> 
                <?php echo get_the_date(); ?>
              </p>
              <p>
                <i class="fa fa-user-o"></i> 
                <?php the_author(); ?>
              </p>
            </div>
            <div class="main-blog__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="main-blog__text">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <!-- <div class="col-lg-4 col-md-6">
        <div class="main-blog__item">
          <div class="main-blog__img">
            <img alt=""
              src="//cdn.shopify.com/s/files/1/0072/0417/5981/articles/adult-blur-body-918576_370x236.jpg?v=1562319896">
          </div>
          <div class="main-blog__description">
            <div class="main-blog__detail">
              <p>
                <i class="fa fa-calendar-check-o"></i> 12 Junio 2019
              </p>
              <p>
                <i class="fa fa-user-o"></i> Génesis Navas
              </p>
            </div>
            <div class="main-blog__title">
              Lorem Ipsum
            </div>
            <div class="main-blog__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente repellendus quibusdam e repellendus
              quibusdame repellendus quibusdame repellendus quibusdame repellendus quibusdame repellendus quibusdam
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="main-blog__item">
          <div class="main-blog__img">
            <img alt=""
              src="//cdn.shopify.com/s/files/1/0072/0417/5981/articles/adult-blur-body-918576_370x236.jpg?v=1562319896">
          </div>
          <div class="main-blog__description">
            <div class="main-blog__detail">
              <p>
                <i class="fa fa-calendar-check-o"></i> 12 Junio 2019
              </p>
              <p>
                <i class="fa fa-user-o"></i> Génesis Navas
              </p>
            </div>
            <div class="main-blog__title">
              Lorem Ipsum
            </div>
            <div class="main-blog__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente repellendus quibusdam e repellendus
              quibusdame repellendus quibusdame repellendus quibusdame repellendus quibusdame repellendus quibusdam
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>