<?php get_header(); ?>

  <div class="banner-blog">
    <img class="lazy" data-src="https://images.unsplash.com/photo-1494354205675-139c8101dfa5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
  </div>
  <section class="blog-single">
    <div class="container">
      <div class="row">
      <?php while (have_posts() ) : the_post(); ?>
        <div class="col-12 d-md-none">
          <form action="#" class="search-form">
            <div class="form-group">
              <a class="icon fa fa-search" href="#"></a>
              <input class="form-control" placeholder="Buscar" type="text">
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-last">
          <h2 class="mb-3"><?php the_title(); ?></h2>
            <div class="content-post">
           
                <?php the_content(); ?>

            </div>
        </div>
        <?php endwhile; ?>
      <div class="col-md-4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>