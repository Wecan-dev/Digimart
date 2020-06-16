<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/about.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/products.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/sub-category.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
<?php wp_head(); ?>
</head>
<body>
  <!-- Modal -->
  <?php if (is_home()): ?>
  <?php $args = array( 'post_type' => 'oferta', 'posts_per_page' => 1);?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="modal fade" id="modal-digimart" role="dialog">
      <div class="modal-dialog">
        <div class="modal-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
          <div class="mask-modal"></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>    
      </div>
    </div>
  <?php endwhile; endif; ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid header hvr-shadow">
      <header id="header" class="">
        <div class="padding__general main-navbar__contentop "> 
          <div class="logo">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-digimart-negro.png" alt="Digimart"></a>
          </div>
          <div class=" container-social-media">
            <div class="social-media">
              <a href="https://www.facebook.com/digimartvzla" title=""><i class="fa fa-facebook icon-social" aria-hidden="true"></i></a>
              <a href="https://twitter.com/DigimartVzla" title=""><i class="fa fa-twitter icon-social" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/digimartvzla/" title=""><i class="fa fa-instagram icon-social" aria-hidden="true"></i></a>
            </div>
          </div>  
         
        </div>
      </header><!-- /header -->
      <hr>
      <div class="container-nav">
        <div class=" padding__general main-navbar__contentop ">
          <div class="  navbar-menu hidden-xs-down">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link active hvr-overline-nav" href="<?php bloginfo('url'); ?>">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-overline-nav" href="<?php bloginfo('url'); ?>/about">Nosotros</a>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a href="#" class="dropdown-toggle nav-link hvr-overline-nav" data-toggle="dropdown">Productos</a>
                <ul class="dropdown-menu dropdown-menu-large row">
                  <li class="">
                          <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
      foreach($wcatTerms as $wcatTerm) : 
       ?>
                    <ul>

      
        <li class="dropdown-header"><?php echo $wcatTerm->name; ?></li>
                    <?php
          $wsubargs = array(
            'hierarchical' => 1,
            'show_option_none' => '',
            'hide_empty' => 1,
            'parent' => $wcatTerm->term_id,
            'taxonomy' => 'product_cat',
            'posts_per_page' => 2
          );
          $wsubcats = get_categories($wsubargs);
          foreach ($wsubcats as $wsc):
            ?>
                     
                      <li><a href="sub-category.html"><?php echo $wsc->name; ?></a></li>

                      <?php  endforeach;  ?>             
                    </ul>
                  <?php  endforeach;  ?>  
                  </li>
               
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-overline-nav" href="<?php bloginfo('url'); ?>/#contacto">Contacto</a>
              </li>
            </ul>
            
          </div><!-- /navbar menu -->
          <div class=" small-options " >
            <div class="search">
              <form action="<?php bloginfo('url'); ?>" method="get" class="search-form">
                <div class="form-group has-feedback">
                  <label for="search" class="sr-only"></label>
                  <input type="text" class="form-control" name="s" id="search" placeholder="Busca nuestros productos">
                  <button type="submit" class="form-control-feedback">
                    <span class="glyphicon glyphicon-search "></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
