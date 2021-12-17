<?php
/**
 * napollo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package napollo
 */

if ( ! function_exists( 'napollo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function napollo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on napollo, use a find and replace
		 * to change 'napollo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'napollo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'napollo' ),
		) );

		register_nav_menus( array(
			'menu-2' => esc_html__( 'Use Full Links', 'napollo' ),
		) );

		register_nav_menus( array(
			'menu-3' => esc_html__( 'Footer', 'napollo' ),
		) );

		register_nav_menus( array(
			'menu-4' => esc_html__( 'Footer Bottom', 'napollo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'napollo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'napollo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function napollo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'napollo_content_width', 640 );
}
add_action( 'after_setup_theme', 'napollo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function napollo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'napollo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'napollo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'napollo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function napollo_scripts() {
	// Bootstrap CSS
	wp_enqueue_style( 'napollo-bootstrap', get_template_directory_uri(). '/css/bootstrap.css' );

	// Google Fonts
	wp_enqueue_style( 'napollo-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap' );
	wp_enqueue_style( 'napollo-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap' );

	// Animations
	wp_enqueue_style( 'napollo-aos', get_template_directory_uri(). '/css/aos.css' );

	// Owl Carousel CSS
	wp_enqueue_style( 'napollo-owl-carousel', get_template_directory_uri(). '/css/owl.carousel.css' );

	// Custom CSS
	
	wp_enqueue_style( 'napollo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'napollo-custom', get_template_directory_uri(). '/css/custom.css' );
	wp_enqueue_style( 'napollo-jcf', get_template_directory_uri(). '/css/jcf.css' );

	// jQuery first, then Popper.js, then Bootstrap JS
    wp_enqueue_script( 'napollo-jquery-min', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true );
//	wp_enqueue_script( 'napollo-jquery-slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );

	wp_enqueue_script( 'napollo-jquery-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true );
	wp_enqueue_script( 'napollo-bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true );

	wp_enqueue_script( 'napollo-aos-js', get_template_directory_uri() . '/js/aos.js', array(), '20151215', true );

	wp_enqueue_script( 'napollo-owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );

	wp_enqueue_script( 'napollo-jcf-js', get_template_directory_uri() . '/js/jcf.js', array(), '20151215', true );
	wp_enqueue_script( 'napollo-jcf-select', get_template_directory_uri() . '/js/jcf.select.js', array(), '20151215', true );

	wp_enqueue_script( 'napollo-custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array(), '20151215', true );
	
	wp_localize_script( 'napollo-custom-scripts', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        


	wp_enqueue_script( 'napollo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'napollo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'napollo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * ACF
 */
//require get_template_directory() . '/inc/acf-pro/acf.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Enable SVG Upload
 */
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Client Logo
 */
function napollo_client_logos() {
 
    register_post_type( 'client_logos',
    
        array(
            'labels' => array(
                'name' => __( 'Logo' ),
                'singular_name' => __( 'Logo' )
            ),
            'public' => true,
            'has_archive' => false,
			'rewrite' => array('slug' => 'logo'),
			'supports' => array( 'title', 'custom-fields', 'thumbnail'  ),
        )
	);
	register_taxonomy('client_logos_cats', 'client_logos', array( 'label' => 'Logo Categories', 'hierarchical' => true, 'public' => true, 'rewrite' => array( 'slug' => 'client_logos_cat' ) ));
}

add_action( 'init', 'napollo_client_logos' );

/**
 * EXPERIENCES
 */
function napollo_experiences() {
 
    register_post_type( 'napollo_experiences',
    
        array(
            'labels' => array(
                'name' => __( 'Experiences' ),
                'singular_name' => __( 'Experiences' )
            ),
            'public' => true,
            'has_archive' => false,
			'rewrite' => array('slug' => 'experiences'),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        )
	);
	register_taxonomy('napollo_experiences_cats', 'napollo_experiences', array( 'label' => 'Experience Categories', 'hierarchical' => true, 'public' => true, 'rewrite' => array( 'slug' => 'experiences_cat' ) ));

}

add_action( 'init', 'napollo_experiences' );

/**
 * Sub Menu
 */

class submenu_wrap extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='dropdown-menu'><ul class='list-unstyled'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
    
    function start_el(&$output, $item, $depth, $args) {
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';
       
     $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    // Check our custom has_children property.
    if ( $args->has_children ) {
         $attributes .= ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
        
    }

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
    $id_field = $this->db_fields['id'];
    if ( is_object( $args[0] ) ) {
      $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
    }
    return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
  }
}

//This function is responsible for adding "my-parent-item" class to parent menu item's
function add_menu_parent_class( $items ) {
$parents = array();
foreach ( $items as $item ) {
    //Check if the item is a parent item
    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
        $parents[] = $item->menu_item_parent;
    }
}

foreach ( $items as $item ) {
    if ( in_array( $item->ID, $parents ) ) {
        //Add "menu-parent-item" class to parents
        $item->classes[] = 'dropdown';
    }
}

return $items;
}

//add_menu_parent_class to menu
add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' ); 


/**
 * CPT
 */

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => false,
            //'rewrite' => array('slug' => 'Testimonial'),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/**
 * Pagination for archive pages
 */

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<nav aria-label="Page navigation example"><ul class="pagination">' . "\n";
 
    /** Previous Post Link */
    
    $prev_page = get_previous_posts_link();
    if(empty($prev_page)){
        echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link().'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    }
    else{
        printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link('<span aria-hidden="true">&laquo;</span>') );
    }
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active page-item"' : '';
 
        printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li class="page-item">…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active page-item"' : '';
        printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li class="page-item">…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    $next_page = get_next_posts_link();
    if(empty($next_page)){
        echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link().'" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>';
    }
    else{
        printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link('<span aria-hidden="true">&raquo;</span>') );
    }
 
    echo '</ul></nav>' . "\n";
 
}

/**
 * Add Class to next prev links -- Pagination
 */

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="page-link"';
}


/**
 * Excerpt Limit
 */

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Experience
 */


add_action("wp_ajax_get_sel_cat_data", "get_sel_cat_data");
add_action("wp_ajax_nopriv_get_sel_cat_data", "get_sel_cat_data");
function get_sel_cat_data(){
    $cat_id = $_REQUEST["cat_id"];
    global $paged;
    $curpage = $paged ? $paged : 1;
    $data = array(
        'post_type'   => 'napollo_experiences',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'paged' => $paged,
        'tax_query' => array(
				array(
				'taxonomy' => 'napollo_experiences_cats',
				'terms' => $cat_id
				)
			)
        );
    $experiences = new WP_Query($data);
    $count = $experiences->found_posts;
     $i=0;
     ?>
     <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-first">
		<div class="projects-list">
		    <div class="exp_preload">
		        <img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" style="display:none;" class="project_loader">
		    </div>
		    <?php 
		     $i=0;
		     if($experiences->have_posts()) : while ($experiences->have_posts()) : $experiences->the_post();
		        
                if($i % 2 == 0){
			    ?>
				<div class="row m-0">
					<div class="col-md-6 p-0">
						<div class="image-holder"><?php echo get_the_post_thumbnail(); ?></div>
					</div>
					<div class="col-md-6 p-0">
						<div class="text-box">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							<?php if(!empty(get_field( "project_url" ))){ ?>
								<a href="<?php echo get_field( "project_url" ); ?>" target="_blank" class="more"><span class="icon-arrow-thin-right"></span></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php   
                } else {
                    ?>
                    <div class="row m-0">
						<div class="col-md-6 p-0 order-2 order-md-1">
							<div class="text-box">
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<?php if(!empty(get_field( "project_url" ))){ ?>
									<a href="<?php echo get_field( "project_url" ); ?>" target="_blank" class="more"><span class="icon-arrow-thin-right"></span></a>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-6 p-0 order-1 order-md-2">
							<div class="image-holder"><?php echo get_the_post_thumbnail(); ?></div>
						</div>
					</div>
                    <?php
                }
                $i++;
		     endwhile;
		     wp_reset_postdata();
            endif;
		    
			?>
			
		</div>
		<?php 
		if($count >= 4){
		 echo '
            <nav aria-label="Page navigation example">
            <ul class="pagination exp-page">
                <li class="page-item">
                    <a class="page-link" href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'?paged='.($curpage-1 > 0 ? $curpage-1 : 1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                for($i=1;$i<=$experiences->max_num_pages;$i++)
                    echo '<li class="'.($i == $curpage ? 'active ' : '').'page-item"><a class="page-link" href="'.get_pagenum_link($i).'?paged='.$i.'">'.$i.'</a><li>';
                echo '
                <li class="page-item">
                    <a class="page-link" href="'.get_pagenum_link(($curpage+1 <= $experiences->max_num_pages ? $curpage+1 : $experiences->max_num_pages)).'?paged'.($curpage+1 <= $experiences->max_num_pages ? $curpage+1 : $experiences->max_num_pages).'" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a>
                </li>    
            </ul>
            </nav>
        ';
		}
		?>
	</div>
<?php		
    die();
}


/**
 * Pagination
 */


add_action("wp_ajax_category_pagination", "category_pagination");
add_action("wp_ajax_nopriv_category_pagination", "category_pagination");
function category_pagination(){
    $cat_id = $_REQUEST["cat_id"];
    $page_id = $_REQUEST["paged"];
    global $paged;
    $curpage = $paged ? $paged : $page_id;
    $data = array(
        'post_type'   => 'napollo_experiences',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'paged' => $page_id,
        'tax_query' => array(
				array(
				'taxonomy' => 'napollo_experiences_cats',
				'terms' => $cat_id
				)
			)
        );
    $experiences = new WP_Query($data);
    $count = $experiences->found_posts;
     $i=0;
     ?>
     <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-first">
		<div class="projects-list">
		    <img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" style="display:none;" class="project_loader">
		    <?php 
		     $i=0;
		     if($experiences->have_posts()) : while ($experiences->have_posts()) : $experiences->the_post();
		        //setup_postdata($experiences);
		        //echo '<pre>'; var_dump($experiences); echo '</pre>';
                if($i % 2 == 0){
			    ?>
				<div class="row m-0">
					<div class="col-md-6 p-0">
						<div class="image-holder"><?php echo get_the_post_thumbnail(); ?></div>
					</div>
					<div class="col-md-6 p-0">
						<div class="text-box">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							<?php if(!empty(get_field( "project_url" ))){ ?>
								<a href="<?php echo get_field( "project_url" ); ?>" target="_blank" class="more"><span class="icon-arrow-thin-right"></span></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php   
                } else {
                    ?>
                    <div class="row m-0">
						<div class="col-md-6 p-0 order-2 order-md-1">
							<div class="text-box">
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<?php if(!empty(get_field( "project_url" ))){ ?>
									<a href="<?php echo get_field( "project_url" ); ?>" target="_blank" class="more"><span class="icon-arrow-thin-right"></span></a>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-6 p-0 order-1 order-md-2">
							<div class="image-holder"><?php echo get_the_post_thumbnail(); ?></div>
						</div>
					</div>
                    <?php
                }
                $i++;
		     endwhile;
		     wp_reset_postdata();
            endif;
		    
			?>
			
		</div>
		<?php 
		if($count >= 4){
		 echo '
            <nav aria-label="Page navigation example">
            <ul class="pagination exp-page">
                <li class="page-item">
                    <a class="page-link" href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'?paged='.($curpage-1 > 0 ? $curpage-1 : 1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                for($i=1;$i<=$experiences->max_num_pages;$i++)
                    echo '<li class="'.($i == $curpage ? 'active ' : '').'page-item"><a class="page-link" href="'.get_pagenum_link($i).'?paged='.$i.'">'.$i.'</a><li>';
                echo '
                <li class="page-item">
                    <a class="page-link" href="'.get_pagenum_link(($curpage+1 <= $experiences->max_num_pages ? $curpage+1 : $experiences->max_num_pages)).'?paged'.($curpage+1 <= $experiences->max_num_pages ? $curpage+1 : $experiences->max_num_pages).'" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a>
                </li>    
            </ul>
            </nav>
        ';
		}
		?>
	</div>
<?php		
    die();
}


/**
 * Reviews Shortcode
 */

function reviews_shortcode() {

	$output = '<div class="section reviews-section">';
	$output .=	'<div class="container">';
	$output .=		'<div class="row">';
    $output .=				'<div class="col-12 text-center">';
	$output .=				'<h1>CLIENT <span class="text-black">REVIEWS</span></h1>';
	$output .=				'<p>Napollo clients are always excited about the state of the art work and tremendous customer support given to them.</p>';
	$output .=			'</div>';
	$output .=		'</div>';
	$output .=		'<div class="row">';
	$output .=			'<div class="col-12">';
	$output .=				'<div class="reviews-carousel owl-carousel">';
						    $posts = get_posts(array(
                                'post_type'   => 'testimonial',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                )
                            );
    					//echo '<pre>'; var_dump($posts); echo '</pre>';
					    foreach($posts as $p){
					        $post_id = $p->ID;
	$output .=					'<div class="slide">';
	$output .=						'<blockquote class="blockquote">';
	$output .=							'<div class="image-holder">'.get_the_post_thumbnail($post_id).'</div>';
	$output .=							'<strong class="title">'.$p->post_title.' <span class="d-block">'.get_field( "designation", $post_id ).'</span></strong>';
	$output .=							'<p class="text-justify">'.$p->post_content.'</p>';
	$output .=							'<footer class="blockquote-footer">';
	$output .=								'<ul class="list-inline rating">';
	$output .=									'<li class="list-inline-item"><a href="#"><span class="icon-star"></span></a></li>';
	$output .=									'<li class="list-inline-item"><a href="#"><span class="icon-star"></span></a></li>';
	$output .=									'<li class="list-inline-item"><a href="#"><span class="icon-star"></span></a></li>';
	$output .=									'<li class="list-inline-item"><a href="#"><span class="icon-star"></span></a></li>';
	$output .=									'<li class="list-inline-item"><a href="#"><span class="icon-star"></span></a></li>';
	$output .=								'</ul>';
	$output .=							'</footer>';
	$output .=						'</blockquote>';
	$output .=					'</div>';
					    }
	$output .=				'</div>';
	$output .=			'</div>';
	$output .=		'</div>';
	$output .= 	'</div>';
	$output .= '</div>';
    return $output;
}
add_shortcode('client_reviews', 'reviews_shortcode');
