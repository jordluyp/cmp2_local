<?php


  function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ) ,
        'footer-menu' => __( 'Footer Menu Left' ),
        'footer-menu-2' => __( 'Footer Menu Right' )
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );

  function register_sidebar_locations() {
    /* Register the 'primary' widget zone. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    // Nog een zone voor widgets
    register_sidebar(
        array(
            'id'            => 'footer-sidebar',
            'name'          => __( 'Footer Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'register_sidebar_locations' );
// Thumbnail
add_theme_support( 'post-thumbnails' );
add_image_size( 'header-post', 1000, 200, true );


//LOGO 
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

//HEADER
$header_info = array(
    'width'         => 1240,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
);
add_theme_support( 'custom-header', $header_info );

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

# mijn producten voor blog detail pagina

function custom_post_type_producten () {
  $labels = array(
    'name'               => _x( 'Producten', 'post type general name' ),
    'singular_name'      => _x( 'Producten item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Producten item' ),
    'edit_item'          => __( 'Edit Producten item' ),
    'new_item'           => __( 'New Producten item' ),
    'all_items'          => __( 'All Producten items' ),
    'view_item'          => __( 'View Producten item' ),
    'search_items'       => __( 'Search Producten items' ),
    'not_found'          => __( 'No Producten item found' ),
    'not_found_in_trash' => __( 'No Producten item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Producten'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our producten  items specific data',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-producten ',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'producten', $args );
}

add_action( 'init', 'custom_post_type_producten' );


# …

function taxonomies_producten () {
  $labels = array(
    'name'              => _x( 'Producten Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Producten Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Producten Categories' ),
    'all_items'         => __( 'All Producten Categories' ),
    'parent_item'       => __( 'Parent Producten Category' ),
    'parent_item_colon' => __( 'Parent Producten Category:' ),
    'edit_item'         => __( 'Edit Producten Category' ), 
    'update_item'       => __( 'Update Producten Category' ),
    'add_new_item'      => __( 'Add New Producten Category' ),
    'new_item_name'     => __( 'New Producten Category' ),
    'menu_name'         => __( 'Producten Categories' )
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'producten_category', 'producten', $args );
  
}
add_action( 'init', 'taxonomies_producten', 0 );
?>

<?php echo get_post_meta(get_the_ID(), 'PRODUCTEN_CUSTOM_FIELD', true); ?>

<?php /*
$image = get_field('afbeelding');
$link = get_field('link', $image['ID']);
?>
<a href="<?php echo $link; ?>">
	<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>

<?php 
$image['sizes']['thumbnail'];
$image['sizes']['medium'];
$image['sizes']['medium_large'];
$image['sizes']['large'];
*/?>

<?php 
//Metabox aanmaken
function woordenboek_afk_box(){
    add_meta_box( 'woordenboek_afk_box', 'Afkorting woord', 'woordenboek_afk_box_content', 'woordenboek', 'side', 'high');
}
add_action('add_meta_boxes', 'woordenboek_afk_box' );
?>

<?php 
//Metabox vullen met inhoud
function woordenboek_afk_box_content($post){
	// Indien de metadata reeds bestaat, haal de post_meta op uit de databank
	$afkorting   = get_post_meta( $post->ID, 'afkorting', true );

    //Controle als de aanvraag komt van dit scherm - Save Post kan van een andere pagina komen
	wp_nonce_field(plugin_basename(__FILE__), 'woordenboek_afk_box_content_nonce' );

	//Content aanmaken met behulp van echo
	echo '<label for="afkorting">Afkorting <label>';
	echo "<input type='text' id='afkorting' name='afkorting' value='{$afkorting}'/>";
}
?>

<?php 
//De metadata opslaan
function afkorting_box_woordenboek_save($post_id){

    //Controle als de aanvraag komt van dit scherm - Save Post kan van een andere pagina komen
    if ( !wp_verify_nonce( $_POST['woordenboek_afk_box_content_nonce'], plugin_basename(__FILE__) )) {
        return $post_id;
    }

    // Verifieren dat dit een autosave routine is. Als het zo is, dan willen we dat ons formulier niets doet.
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
        return $post_id;

    //Controlleer de toegang om een post / page aan te passen.
    if ( 'page' == $_POST['post_type'] ||  'post' == $_POST['post_type']) {
        if ( !current_user_can( 'edit_page', $post_id ) || !current_user_can( 'edit_post', $post_id ))
          return $post_id;
      } 

    // We hebben de toestemming aanpassingen te doen
    //Haal de data uit het formulier
    $afkorting = $_POST['afkorting'];

    // Sla de data op in een veld
    update_post_meta($post_id, '_afkorting', $afkorting); 

    }
//Controle dat enkel deze functie zal worden uitgevoerd indien het input-veld afkorting bestaat.
if(isset($_POST['afkorting'])){
    add_action('save_post', 'afkorting_box_woordenboek_save');
}
?>

<?php while ( have_posts()) : the_post(); ?>

<!-- Titel oproepen -->
    <h2> <?php the_title(); ?> </h2>

<!-- Inhoud oproepen -->
    <p><?php the_content(); ?></p>

<!-- Post type oproepen-->
    <p> Dit is de post-type: <?php echo get_post_type(); ?> </p>

<!-- Post id oproepen -->
    <p> Post id : <?php the_ID(); ?> </p>

<!-- Metadata uit de databank oproepen -->
    <p> Meta data van mijn post (afkorting)
        <?php echo get_post_meta(get_the_ID(), '_afkorting', true); ?>
    </p>

<!-- Taxonomy oproepen -->
    <p>Gelinkte studierichtingen: 
    <?php 
        $studierichtingen =  get_the_terms(get_the_ID(), 'studierichting');
       
        foreach($studierichtingen as $richting){
            echo $richting->name ." (" . $richting->slug  . "), ";
        }
    ?>
    </p>

<?php endwhile; ?>
