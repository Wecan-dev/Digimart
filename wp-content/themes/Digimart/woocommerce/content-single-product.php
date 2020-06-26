<?php global $product;?>			
<style>
.information-producto {
    
    min-height: 600px;
}
.information-producto:hover {
    cursor: pointer;
	
}
	.information-producto:hover .b-hover{
    background: black;
		color: white;
	
}
</style>
<section id="description">
   <section class="main-detalle container">
    <div class="">
      <div class="col-lg-8 col-md-8 cuadro__imgs">
        <div class="main">
          <div>
            <div class="col-lg-3 col-md-3 cuadro__imgs">
              <div class="propiedades slider-nav2">
                <div><h3> <img class="img-navs" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> </h3></div>
				  <?php if(get_field('imagen_1')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_1'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
                 <?php if(get_field('imagen_2')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_2'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_3')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_3'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_4')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_4'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_5')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_5'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_6')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_6'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_7')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_7'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_8')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_8'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_9')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_9'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				   <?php if(get_field('imagen_10')): ?>
                <div><h3> <img class="img-navs" src="<?php the_field('imagen_10'); ?>" alt=""> </h3></div>
				  <?php endif; ?>



              </div>
            </div>
            <div class="columna-mostrar col-lg-9 col-md-9 p-0">
              <div class="slider slider-for">
				  
                <div class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php echo get_the_post_thumbnail_url(); ?>"> </h3></div>
				  <?php if(get_field('imagen_1')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_1'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
                <?php if(get_field('imagen_2')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_2'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_3')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_3'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_4')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_4'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_5')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_5'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_6')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_6'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_7')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_7'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_8')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_8'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_9')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_9'); ?>" alt=""> </h3></div>
				  <?php endif; ?>
				  <?php if(get_field('imagen_10')): ?>
                <div  class="img-slider__mostrar"><h3> <img class="img-mostrar" src="<?php the_field('imagen_10'); ?>" alt=""> </h3></div>
				  <?php endif; ?>



              </div>
            </div>


          </div>


        </div>

      </div>
      <div class="cuadro-descripcion col-lg-4 col-md-4">
       <div class="information-producto card hvr-grow-shadow">
        <div class="title-description title-description-padd pb-0">
          <h3 class="open-sans description-p"><?php the_title(); ?></h3>
          <hr class="line-product">
        </div>
        <div class="description-producto pt-0">
          <ul class="list-products">
			 <li class="description" ><h3>
				 <p><?php echo $product->get_price_html(); ?></p>
				 </h3></li>
           <?php echo the_content();?>
          </ul>
        </div>
        <div class="product-color">
          <span class="title-color">Color</span>
          <div class="color-choose">
            <div>
              <input data-image="black" type="radio" id="black" name="color" value="black" checked>
              <label for="black"><span></span></label>
            </div>
            <div>
              <input data-image="white" type="radio" id="white" name="color" value="white">
              <label for="white"><span></span></label>
            </div>
            <div>
              <input data-image="blue" type="radio" id="blue" name="blue" value="blue">
              <label for="blue"><span></span></label>
            </div>
          </div>
        </div>
		       <div class="">
              <a class=" b-hover btn-drop btn-custom btn--medium btn--filled">
              Comprar por Whatsapp
              </a>
            
              <div class="dropdown__btn dropdown-item__desktop" aria-labelledby="dropdownMenuLink">
                <a class="" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804121271277&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 1</a> <br>
                <a class="" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804121727855&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 2</a> <br>
                <a class="" href="<?php echo 'https://web.whatsapp.com/send?phone=5804126403077&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 3</a> <br>

                
              </div>
              <div class="dropdown__btn dropdown-item__mobile" aria-labelledby="dropdownMenuLink">
               
              <a class="" href=" <?php echo 'https://api.whatsapp.com/send?phone=5804121271277&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 1</a> <br>
                <a class="" href=" <?php echo 'https://api.whatsapp.com/send?phone=5804121727855&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 2</a> <br>
                <a class="" href="<?php echo 'https://api.whatsapp.com/send?phone=5804126403077&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 3</a> <br>
                
              </div>


            </div>
      <!--  <div class="redes-sociales" >
          <div class="redes-comparte">
            <ul class="social-icons icon-circle icon-rotate list-unstyled list-inline"> 
              <li> <a href="https://www.facebook.com/digimartvzla"><i class="fa fa-whatsapp"></i></a></li>     
            </ul>
          </div>
        </div> -->
      </div>
    </div>





  </section>
<section class="padding__general ">
  <div class="title-container">
    <h2 class="open-sans ">Productos Relacionados</h2>
  </div>
  <div class="main-products__grid--content">

 <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 8);?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
    <div class="contenedor-a">
      <div class="card hvr-shadow-p">
        <div class="card-img">
          <a href="<?php the_permalink(); ?>">

            <div class="img-products__home" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
          </a>
        </div>
        <div class="card-content">
          <div class="caption-title">
            <a class="title__products__general" href="<?php the_permalink(); ?>">

              <h5 class="open-sans title-product"><?php the_title(); ?></h5>
				<p><?php echo $product->get_price_html(); ?></p>
            </a>
        
            <div class="">
              <a class=" btn-drop btn-custom btn--medium btn--filled">
              Comprar por Whatsapp
              </a>
            
              <div class="dropdown__btn dropdown-item__desktop" aria-labelledby="dropdownMenuLink">
                <a class="" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804121271277&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 1</a> <br>
                <a class="" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804121727855&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 2</a> <br>
                <a class="" href="<?php echo 'https://web.whatsapp.com/send?phone=5804126403077&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 3</a> <br>

                
              </div>
              <div class="dropdown__btn dropdown-item__mobile" aria-labelledby="dropdownMenuLink">
               
              <a class="" href=" <?php echo 'https://api.whatsapp.com/send?phone=5804121271277&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 1</a> <br>
                <a class="" href=" <?php echo 'https://api.whatsapp.com/send?phone=5804121727855&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 2</a> <br>
                <a class="" href="<?php echo 'https://api.whatsapp.com/send?phone=5804126403077&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Asesor 3</a> <br>
                
              </div>


            </div>
          </div>
        </div>
      </div>
</div>

<?php endwhile; ?>


  </div>

</section>

<style>
	#sidebar, .woocommerce-breadcrumb{
		display: none;
	}	   
</style>