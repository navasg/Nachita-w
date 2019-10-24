<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div style= "display: inline-block !important;">
            <?php get_sidebar(); ?>
        </div>
      </div>
      <div class="col-md-8">
        <div class="container ">
          		<h2 class="main-general__title mb-5">
      Resultados
    </h2>
          </div>
          <?php if ( have_posts()) : ?>
              <div class="row ">
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php if(get_the_post_thumbnail_url()) :?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                      <div class="blog-entry justify-content-end">
                        <a class="block-20 lazy" href="blog-single.html" data-bg="url(<?php echo get_the_post_thumbnail_url(); ?>)"></a>
                        <div class="text p-4 float-right d-block">
                          <div class="d-flex align-items-center pt-2 mb-4">
                            <div class="one">
                              <span class="day"><?php echo get_the_time('j'); ?></span>
                            </div>
                            <div class="two">
                              <span class="mos"><?php echo get_the_time('m'); ?></span>
                              <span class="yr"><?php echo get_the_time('y'); ?></span>
                            </div>
                          </div>
                          <h3 class="heading mt-2">
                            <a href="blog-single.html"><?php the_title(); ?></a>
                            <h2><?php the_title(); ?></h2>
                          </h3>
                          <p><?php the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>  -->
                    <div class="col-lg-6 col-md-6">
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

                    <?php else : ?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                      <div class="blog-entry justify-content-end">
                        <a class="block-20 lazy" href="blog-single.html" data-bg="url(&#39;https://images.unsplash.com/photo-1562887189-e5d078343de4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=80&#39;)"></a>
                        <div class="text p-4 float-right d-block">
                          <div class="d-flex align-items-center pt-2 mb-4">
                            <div class="one">
                              <span class="day"><?php echo get_the_time('j'); ?></span>
                            </div>
                            <div class="two">
                              <span class="mos"><?php echo get_the_time('m'); ?></span>
                              <span class="yr"><?php echo get_the_time('y'); ?></span>
                            </div>
                          </div>
                          <h3 class="heading mt-2">
                            <a href="blog-single.html"><?php the_title(); ?></a>
                            <h2><?php the_title(); ?></h2>
                          </h3>
                          <p><?php the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>  -->
                    <div class="col-lg-6 col-md-6">
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
                <?php endif; endwhile; ?>   
              </div>
            </div>
          <?php else : ?> 
          <h2 class="main-general__title ">
      No hay Resultados
    </h2>          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>