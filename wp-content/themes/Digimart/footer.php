<?php $args = array( 'post_type' => 'footer', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<footer class="main-end padding__general">
  <div class="main-end__content">
    <div class="main-logo__end">
      <div class="main-logo__img">
        <img class="img-logo-amarillo" src="<?php echo get_template_directory_uri();?>/assets/img/logo-digimart-amarillo.png" alt="">
      </div>
      <div class="description-footer" >
        <p><?php the_field('slogan') ?></p>
      </div>
    </div>
    <div class="main-end__categoria">
      <div class="main-categoria__end--title">
        <p class="title-end__categoria">
          Categoria
        </p>
      </div>
      <div class="main-end__categoria--list">
       <ul class="list-sitemap" >
             <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
        $count_cat = 1;
      foreach($wcatTerms as $wcatTerm) : 
       


      
      
          $thumbnail_id = get_woocommerce_term_meta($wcatTerm->term_id, 'thumbnail_id', true);

          $images = wp_get_attachment_image_src($thumbnail_id, 'large');

          ?>
          <?php if ($count_cat <= 6): ?>
            
        <li>
          <a class="opciones-sitemap" href="<?php echo $url_category = get_term_link( $wcatTerm ) ?>"><?php echo $wcatTerm->name; ?></a>
        </li>
      <?php endif; $count_cat++; endforeach; ?>
       
      </ul>
    </div>
  </div>
  <div class="main-end__contactos">
   <div class="information-f" >
    <div class="description-f"> 
      <h4 class="title-information-f">Visítanos</h4>
      <img class="emojis" src="<?php echo get_template_directory_uri();?>/assets/img/Artboard 5.svg" alt="" >
      <br>
      <a href="<?php the_field('google_maps_sitio') ?>" class="caption-text-f"><?php the_field('direccion') ?></a>

    </div>
    <div class="description-f">
      <h4 class="title-information-f">Escríbenos</h4>
      <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/Artboard 3.svg" alt="" >
      <br>
      <a href="mailto:<?php the_field('correo') ?>" class="caption-text-f"><?php the_field('correo') ?></a>
    </div>
    <div  class="description-f">
      <h4 class="title-information-f">Llámanos</h4>
      <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/Artboard 6.svg" alt="" >
      <br>
      <a href="http://api.whatsapp.com/send?phone=<?php the_field('telefono_movil') ?>" class="caption-text-f">+ <?php the_field('telefono_movil') ?></a>
      <a href="tel:<?php the_field('telefono_local') ?>" class="caption-text-f"><?php the_field('telefono_local') ?></a>
    </div>
  </div>
</div>
</div>
<hr class="linea-footer">
<div class="redes-footer">
  <div class="social-f">
    <a target="_blank" href="<?php the_field('facebook') ?>"><i class="fa fa-facebook icon-footer" aria-hidden="true"></i></a>
    <a target="_blank" href="<?php the_field('twitter') ?>"><i class="fa fa-twitter icon-footer" aria-hidden="true"></i></a>
    <a target="_blank" href="<?php the_field('instagram') ?>"><i class="fa fa-instagram icon-footer" aria-hidden="true"></i></a>
  </div>
</div>
<div class="logo-slice">
  <p class="text-powered">Powered By</p>
  <a href="" class="empresa">We can! Company </a>
  <p class="text-powered">and</p>
  <a href="" class="empresa">SliceGroup</a>
  <p class="fecha-f">2020</p>
</div>
</footer>
<?php endwhile; ?>
<section id="nav-mobile">
  <div class="nav-mobile">
    <div class="navbar-nuevo visible-xs">
      <ul class="nav nav-nuevo ">
        <li class="nav-item">
          <a class="nav-link-nuevo active" href="<?php bloginfo('url'); ?>/"><i class="fa fa-home icon-mobile" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-nuevo" href="<?php bloginfo('url'); ?>/about"><i class="fa fa-users icon-mobile" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-nuevo" href="product.html"><i class="fa fa-tablet icon-mobile" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-nuevo" href="<?php bloginfo('url'); ?>/#contact"><i class="fa fa-envelope icon-mobile" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>  
  </div>
</section>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
<script >
  $("a").click(function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 50
      }, 1500, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $('#modal-digimart').modal('toggle')

</script>
<?php wp_footer(); ?>
</body>
</html>