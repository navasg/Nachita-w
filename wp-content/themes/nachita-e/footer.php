 <!-- FOOTER -->
 <footer class="main-contact" id="contact">
    <div class="container padding-top-bottom">
      <div class="row">
        <div class="col-lg-6">
          <div class="main-footer__rrss">
            <h2 class="main-footer__title">
              Contáctanos
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consequuntur ipsa maiores iusto quibusdam officiis animi! Iure adipisci accusantium, id libero excepturi eligendi unde iusto tempore, eius vitae asperiores minima!
            </p>
            <ul>
              <li>
                <a href="">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="">
                <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="">
                <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="">
                <i class="fa fa-whatsapp"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>
  </footer>
  <div class="main-powered">
    <p>
      Copyright ©2019 Todos los derechos reservados | Diseño y desarrollo por
      <a href="https://cmarketing.cl/">Contact Marketing</a>
    </p>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
<?php wp_footer(); ?>
</html>
 
 

