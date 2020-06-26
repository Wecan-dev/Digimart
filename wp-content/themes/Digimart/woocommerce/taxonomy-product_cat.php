<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php get_header(); ?>


<style>
	.sidebar__cat{
		width: 100%;
		height: 85vh;
		background-color: #eeeeef;
		position:fixed;
		left: -100%;
		padding: 1rem;
		z-index: 999;
		display: none;
		    overflow: scroll;
	}
	
	.sidebar__cat.active-cat{
		left: 0%;
	}
	.content-catbtn button{
		border: none;
		padding: 10px 25px;
		    background-color: #000000;
		margin-left: 1rem;

	}
	.content-catbtn button i{
		font-size: 25px;
	}
	.content-catbtn button p{
		margin-bottom:0;
		color:#fff;
	}
	#button__sidebarcat{
		display:none;
	}
	
	@media screen and (max-width: 767px) and (min-width: 0px) {
		.main-category__content .main-category--sidebar{
			display:none;
		}
		.sidebar__cat{
			display: inherit;
		}
		#button__sidebarcat{
			display: inherit;
			    margin-top: 10rem;
		}
	}
</style>


<div class="content-catbtn">
	<button id="button__sidebarcat">
		<!--<i class="fa fa-bars" aria-hidden="true"></i>-->
		<p>
			Categorias
		</p>
	</button>
	</div>

<div class="sidebar__cat">
	<div class="main-category--sidebar">
         <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
		  
		  $countPanel = 1;
      foreach($wcatTerms as $wcatTerm) : 
       ?>

      
        <div class="panel-group" id="accordion1<?php echo $wcatTerm->term_id; ?>">
          <div class="panel panel-default">
            <div class="panel-heading panel-heading--first hvr-shadow">
              <h4 class="panel-title panel-general">
                <a class="link-tabs" data-toggle="collapse" data-parent="#accordion1<?php echo $wcatTerm->term_id; ?>" href="#m<?php echo $wcatTerm->slug; ?>">
                <?php echo $wcatTerm->name; ?></a>
              </h4>
            </div>
            <div id="m<?php echo $wcatTerm->slug; ?>" class="panel-collapse collapse <?php if($countPanel == 1){echo 'in';} ?> ">
              <div class="panel-body panel-body2">
                    <?php
          $wsubargs = array(
            'hierarchical' => 1,
            'show_option_none' => '',
            'hide_empty' => 1,
            'parent' => $wcatTerm->term_id,
            'taxonomy' => 'product_cat',
            'order' => 'DESC'
          );
          $wsubcats = get_categories($wsubargs);
				  
		  $countPanelSub = 1;
          foreach ($wsubcats as $wsc):
            ?>
                <div class="panel-group" id="accordion21<?php echo $wsc->term_id; ?>">
                  <div class="panel panel-default">
                    <div class="panel-heading panel-heading--two">
                      <h4 class="panel-title panel-sub">
                        <a data-toggle="collapse" data-parent="#accordion21<?php echo $wsc->term_id; ?>" href="#mb<?php echo $wsc->slug; ?>">
                         <?php echo $wsc->name; ?></a>
                      </h4>
                    </div>
                    <div id="mb<?php echo $wsc->slug; ?>" class="panel-collapse collapse-close <?php if($countPanelSub == 1){echo '';} ?>">
                      <div class="panel-body">
                        <div class="content-categories__general">
                          <h2 class="title-marcas">Marcas</h2>

                          <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>" class="title-subproducto">Todos
                          </a>
                                          <?php 
                            $wsubarg = array(
                              'hierarchical' => 1,
                              'show_option_none' => '',
                              'hide_empty' => 0,
                              'parent' => $wsc->term_id,
                              'taxonomy' => 'product_cat'
                              
                            );

                            $subcat = get_categories($wsubarg);

                            foreach($subcat as $sub) : ?>
                          <a href="<?php echo get_term_link( $sub->slug, $sub->taxonomy );?>" class="title-subproducto"><?php echo $sub->name;?>
                          </a>
                             <?php
            endforeach;
            ?>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                   <?php $countPanelSub++;
            endforeach;
            ?>
              </div>
            </div>
          </div>
        </div>
                   <?php $countPanel++;
            endforeach;
            ?>
          </div>
</div>
	


  <section class="main-category padding__general">
    <div class="main-category__content">

      <div class="main-category--sidebar">
          <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
		  
		  $countPanel = 1;
      foreach($wcatTerms as $wcatTerm) : 
       ?>

      
        <div class="panel-group" id="accordion<?php echo $wcatTerm->term_id; ?>">
          <div class="panel panel-default">
            <div class="panel-heading panel-heading--first hvr-shadow">
              <h4 class="panel-title panel-general">
                <a class="link-tabs" data-toggle="collapse" data-parent="#accordion<?php echo $wcatTerm->term_id; ?>" href="#<?php echo $wcatTerm->slug; ?>">
                <?php echo $wcatTerm->name; ?></a>
              </h4>
            </div>
            <div id="<?php echo $wcatTerm->slug; ?>" class="panel-collapse collapse <?php if($countPanel == 1){echo 'in';} ?> ">
              <div class="panel-body panel-body2">
                    <?php
          $wsubargs = array(
            'hierarchical' => 1,
            'show_option_none' => '',
            'hide_empty' => 1,
            'parent' => $wcatTerm->term_id,
            'taxonomy' => 'product_cat',
            'order' => 'DESC'
          );
          $wsubcats = get_categories($wsubargs);
				  
		  $countPanelSub = 1;
          foreach ($wsubcats as $wsc):
            ?>
                <div class="panel-group" id="accordion2<?php echo $wsc->term_id; ?>">
                  <div class="panel panel-default">
                    <div class="panel-heading panel-heading--two">
                      <h4 class="panel-title panel-sub">
                        <a data-toggle="collapse" data-parent="#accordion2<?php echo $wsc->term_id; ?>" href="#<?php echo $wsc->slug; ?>">
                         <?php echo $wsc->name; ?></a>
                      </h4>
                    </div>
                    <div id="<?php echo $wsc->slug; ?>" class="panel-collapse collapse-close <?php if($countPanelSub == 1){echo '';} ?>">
                      <div class="panel-body">
                        <div class="content-categories__general">
                          <h2 class="title-marcas">Marcas</h2>

                          <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>" class="title-subproducto">Todos
                          </a>
                                          <?php 
                            $wsubarg = array(
                              'hierarchical' => 1,
                              'show_option_none' => '',
                              'hide_empty' => 0,
                              'parent' => $wsc->term_id,
                              'taxonomy' => 'product_cat'
                              
                            );

                            $subcat = get_categories($wsubarg);

                            foreach($subcat as $sub) : ?>
                          <a href="<?php echo get_term_link( $sub->slug, $sub->taxonomy );?>" class="title-subproducto"><?php echo $sub->name;?>
                          </a>
                             <?php
            endforeach;
            ?>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                   <?php $countPanelSub++;
            endforeach;
            ?>
              </div>
            </div>
          </div>
        </div>
                   <?php $countPanel++;
            endforeach;
            ?>
          </div>
      <?php
wc_get_template( 'archive-product.php' ); ?>
      </div>
</div>

</section>



<?php get_footer(); ?>

<script>
$('#button__sidebarcat').click(function(){
	$('.sidebar__cat').toggleClass('active-cat')
	$('body').toggleClass('activeFixed')
	
})
</script>