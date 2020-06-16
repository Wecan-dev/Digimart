      <div class="padding-ri grid">
        <div class="selec-product">
<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
          <div  class=" caption-products samsung" >
            <div class="card hvr-shadow-p">
              <div class="card-img">
                <a href="<?php the_permalink(); ?>">
                  
                    <div class="img-products" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                </a>
              </div>
              <div class="card-content">
                <div class="caption-title">
                  <a href="<?php the_permalink(); ?>">
                    <h5 class="open-sans title-product"><?php the_title(); ?></h5>
                  </a>
                  <div class="">
                    <a class=" btn-drop btn-custom btn--medium btn--filled">
                    Comprar por Whatsapp
                    </a>
                  
                    <div class="dropdown__btn dropdown-item__desktop" aria-labelledby="dropdownMenuLink">
                      <a class="" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804121271277&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor de ventas</a> <br>
                      <a class="" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804121727855&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor de ventas</a> <br>
                      <a class="" href="<?php echo 'https://web.whatsapp.com/send?phone=5804126403077&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor de ventas</a> <br>

                      
                    </div>
                    <div class="dropdown__btn dropdown-item__mobile" aria-labelledby="dropdownMenuLink">
                    
                    <a class="" href=" <?php echo 'https://api.whatsapp.com/send?phone=5804121271277&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor de ventas</a> <br>
                      <a class="" href=" <?php echo 'https://api.whatsapp.com/send?phone=5804121727855&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor de ventas</a> <br>
                      <a class="" href="<?php echo 'https://api.whatsapp.com/send?phone=5804126403077&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor de ventas</a> <br>
                      
                    </div>


                  </div>
                </div>
              </div>
            </div>
    </div>
      <?php endwhile; ?>

</div>
</div>