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


  <section class="main-category padding__general">
    <div class="main-category__content">

      <div class="main-category--sidebar">
          <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
      foreach($wcatTerms as $wcatTerm) : 
       ?>

      
        <div class="panel-group" id="accordion<?php echo $wcatTerm->term_id; ?>">
          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion<?php echo $wcatTerm->term_id; ?>" href="#<?php echo $wcatTerm->name; ?>">
                <?php echo $wcatTerm->name; ?></a>
              </h4>
            </div>
            <div id="<?php echo $wcatTerm->name; ?>" class="panel-collapse collapse in">
              <div class="panel-body panel-body2">
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
                <div class="panel-group" id="accordion2<?php echo $wsc->term_id; ?>">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-sub">
                        <a data-toggle="collapse" data-parent="#accordion2<?php echo $wsc->term_id; ?>" href="#<?php echo $wsc->name; ?>">
                         <?php echo $wsc->name; ?></a>
                      </h4>
                    </div>
                    <div id="<?php echo $wsc->name; ?>" class="panel-collapse collapse in">
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
                   <?php
            endforeach;
            ?>
              </div>
            </div>
          </div>
        </div>
                   <?php
            endforeach;
            ?>
          </div>
      <?php
wc_get_template( 'archive-product.php' ); ?>
      </div>
</div>

</section>



<?php get_footer(); ?>