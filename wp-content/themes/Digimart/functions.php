<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/




// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'digimart' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'digimart' ),
		'menu_name'             => __( 'Banners', 'digimart' ),
		'name_admin_bar'        => __( 'Banners', 'digimart' ),
		'archives'              => __( 'Archivo', 'digimart' ),
		'attributes'            => __( 'Atributos', 'digimart' ),
		'parent_item_colon'     => __( 'Artículo principal', 'digimart' ),
		'all_items'             => __( 'Todos los artículos', 'digimart' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'digimart' ),
		'add_new'               => __( 'Añadir nuevo', 'digimart' ),
		'new_item'              => __( 'Nuevo artículo', 'digimart' ),
		'edit_item'             => __( 'Editar elemento', 'digimart' ),
		'update_item'           => __( 'Actualizar artículo', 'digimart' ),
		'view_item'             => __( 'Ver ítem', 'digimart' ),
		'view_items'            => __( 'Ver artículos', 'digimart' ),
		'search_items'          => __( 'Buscar artículo', 'digimart' ),
		'not_found'             => __( 'Extraviado', 'digimart' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'digimart' ),
		'featured_image'        => __( 'Foto principal', 'digimart' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'digimart' ),
		'remove_featured_image' => __( 'Remove featured image', 'digimart' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'digimart' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'digimart' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'digimart' ),
		'items_list'            => __( 'Lista de artículos', 'digimart' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'digimart' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'digimart' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'digimart' ),
		'description'           => __( 'Post Type Description', 'digimart' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


// Register Custom Banner Home
function Oferta() {

	$labels = array(
		'name'                  => _x( 'Oferta ', 'Post Type General Name', 'digimart' ),
		'singular_name'         => _x( 'Oferta', 'Post Type Singular Name', 'digimart' ),
		'menu_name'             => __( 'Oferta', 'digimart' ),
		'name_admin_bar'        => __( 'Oferta', 'digimart' ),
		'archives'              => __( 'Archivo', 'digimart' ),
		'attributes'            => __( 'Atributos', 'digimart' ),
		'parent_item_colon'     => __( 'Artículo principal', 'digimart' ),
		'all_items'             => __( 'Todos los artículos', 'digimart' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'digimart' ),
		'add_new'               => __( 'Añadir nuevo', 'digimart' ),
		'new_item'              => __( 'Nuevo artículo', 'digimart' ),
		'edit_item'             => __( 'Editar elemento', 'digimart' ),
		'update_item'           => __( 'Actualizar artículo', 'digimart' ),
		'view_item'             => __( 'Ver ítem', 'digimart' ),
		'view_items'            => __( 'Ver artículos', 'digimart' ),
		'search_items'          => __( 'Buscar artículo', 'digimart' ),
		'not_found'             => __( 'Extraviado', 'digimart' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'digimart' ),
		'featured_image'        => __( 'Foto principal', 'digimart' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'digimart' ),
		'remove_featured_image' => __( 'Remove featured image', 'digimart' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'digimart' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'digimart' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'digimart' ),
		'items_list'            => __( 'Lista de artículos', 'digimart' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'digimart' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'digimart' ),
	);
	$args = array(
		'label'                 => __( 'Oferta Home', 'digimart' ),
		'description'           => __( 'Post Type Description', 'digimart' ),
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Oferta', $args );

}
add_action( 'init', 'Oferta', 0 );

// Register Custom Banner Home
function Footer() {

	$labels = array(
		'name'                  => _x( 'Footer ', 'Post Type General Name', 'digimart' ),
		'singular_name'         => _x( 'Footer', 'Post Type Singular Name', 'digimart' ),
		'menu_name'             => __( 'Footer', 'digimart' ),
		'name_admin_bar'        => __( 'Footer', 'digimart' ),
		'archives'              => __( 'Archivo', 'digimart' ),
		'attributes'            => __( 'Atributos', 'digimart' ),
		'parent_item_colon'     => __( 'Artículo principal', 'digimart' ),
		'all_items'             => __( 'Todos los artículos', 'digimart' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'digimart' ),
		'add_new'               => __( 'Añadir nuevo', 'digimart' ),
		'new_item'              => __( 'Nuevo artículo', 'digimart' ),
		'edit_item'             => __( 'Editar elemento', 'digimart' ),
		'update_item'           => __( 'Actualizar artículo', 'digimart' ),
		'view_item'             => __( 'Ver ítem', 'digimart' ),
		'view_items'            => __( 'Ver artículos', 'digimart' ),
		'search_items'          => __( 'Buscar artículo', 'digimart' ),
		'not_found'             => __( 'Extraviado', 'digimart' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'digimart' ),
		'featured_image'        => __( 'Foto principal', 'digimart' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'digimart' ),
		'remove_featured_image' => __( 'Remove featured image', 'digimart' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'digimart' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'digimart' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'digimart' ),
		'items_list'            => __( 'Lista de artículos', 'digimart' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'digimart' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'digimart' ),
	);
	$args = array(
		'label'                 => __( 'Footer Home', 'digimart' ),
		'description'           => __( 'Post Type Description', 'digimart' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-info',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Footer', $args );

}
add_action( 'init', 'Footer', 0 );


function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



// colocar en el title el nombre de la page 
function wpdocs_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

    // Add the site name.
	$title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

    // Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );