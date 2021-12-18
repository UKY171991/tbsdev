<?php

if ( ! defined( 'ABSPATH' ) ) {die();}
/*
if ( ! class_exists( 'DCTRoofing_License_Theme' ) ) {
    require_once( get_stylesheet_directory() . '/lib/dctroofing-license.php' );
}
if (  class_exists('DCTRoofing_License_Theme') ) {
     $dctroofing_lib = new DCTRoofing_License_Theme( __FILE__, '4386070', '1.0.0', 'theme', 'https://divi-childthemes.com/', 'DIVI Roofing' );
}
*/
 
/**
* dct_enqueue_css
* dct_enqueue_admin
* Extra Theme Tabs Options
* 
*/
/* Hook 
-------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'dct_enqueue_css' );
add_action('admin_enqueue_scripts', 'dct_enqueue_admin', 9999);
/* Include Config
------------------------------------------------------------- */
include_once(get_stylesheet_directory() . '/extra-options/config.php');
/* Add Default Parent Css
-------------------------------------------------------------- */ 
function dct_enqueue_css() { 
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' ); 
wp_enqueue_style( 'carousel-theme-style', get_stylesheet_directory_uri() . '/assets/css/owl.theme.min.css' ); 
	wp_enqueue_script( 'dct-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'dct-custom', get_stylesheet_directory_uri() . '/assets/js/dctcustom.js', array( 'jquery' ), '', true );
	 
}
/* Activation Child Theme Plugins
-------------------------------------------------------------- */
require_once get_stylesheet_directory() . '/class-tgm-plugin-activation.php';
/* Add Admin Css And JS
-------------------------------------------------------------- */
function dct_enqueue_admin() {
	wp_enqueue_style('dct-custom-admin', get_stylesheet_directory_uri().'/assets/css/admin.css');
	if ( ! wp_style_is( 'epanel-style', 'enqueued' ) ) {
		wp_enqueue_style('dct-epanel-css', get_template_directory_uri().'/epanel/css/panel.css');
	}
}
/* Child Theme Plugins List
-------------------------------------------------------------- */
function dct_register_required_plugins() {
  //Require Plugins For Child Theme
  $plugins = array(
				array(
				  'name'      => 'Customizer Export/Import',
				  'slug'      => 'customizer-export-import',
				  'required'  => true,
				),
				array(
				  'name'      => 'One Click Demo Import',
				  'slug'      => 'one-click-demo-import',
				  'required'  => true,
				),
			  );
	//Child Theme Details
	  $config = array(
		    'id'           => __(dct_themename),                 // Unique ID for hashing notices for multiple instances of TGMPA.
		    'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
		    'parent_slug'  => 'themes.php',            // Parent menu slug.
		    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
		    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		    'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		    'message'      => '',                      // Message to output right before the plugins table.
	  );
	  tgmpa( $plugins, $config );
}
/*Override Default One Click Installation Class
-------------------------------------------------------------- */
function dct_ocdi_import_files() {
    return array(
        array(
            'import_file_name'           => __(dct_themename,'divi'),
            'import_file_url'            => 'https://divifixer.com/dcttheme/mini/'.__(dct_docs_folder_name).'/'.__(dct_docs_file_name).'.xml',
			'import_widget_file_url'     => 'https://divifixer.com/dcttheme/mini/'.__(dct_docs_folder_name).'/'.__(dct_docs_file_name).'_widgets.wie',
            'import_customizer_file_url' => 'https://divifixer.com/dcttheme/mini/'.__(dct_docs_folder_name).'/'.__(dct_docs_file_name).'_export.dat',
			'preview_url'                => __(dct_demo_url),
        ),
    );
}
/*add_filter( 'pt-ocdi/plugin_intro_text', 'dct_ocdi_plugin_intro_text' );
-------------------------------------------------------------- */
function dct_ocdi_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text" style="padding-bottom:20px;"><div style="background-color: #F5FAFD; margin:10px 0;padding: 5px 10px;color: #0C518F;border: 2px solid #CAE0F3; clear:both; width:90%; line-height:18px;"> <p style="font-size:18px;">Please click the import button once and wait for the process to complete. Please do not navigate away from this page until the import is complete.</p><p style="font-size:18px;">Please be patient and allow the import to finish before navigating away.</p><p class="tie_message_hint" style="color:red;"><b style="font-size: 13px;font-weight: 400;">After you install this demo data by clicking on the button below, <ol ><li>You need to install the Theme options data using <a target="_blank" href="'.__(dct_theme_options_url).'" style="color:red;text-decoration: none;" >'.__(dct_theme_options_file_name).'</a> file. </li><li>For Customizer Settings using <a target="_blank" style="color:red;text-decoration: none;" href="'.__(dct_customizer_settings_url).'"  >'.__(dct_customizer_settings_file_name).'</a> file.</li><li >For Theme Builder Settings using <a target="_blank" href="'.__(dct_theme_builder_options_url).'"  style="color:red;text-decoration: none;" >'.__(dct_theme_builder_options_file_name).'</a> file.</li></ol> <p  style="color:red;text-decoration: none;" >Note:- You can also copy all imports file from '.__(dct_themename).' Child Theme imports folder .</p></b></p>You can check video tutorial for one click installation here <a href="'.__(dct_one_click_url).'" target="_new"  style="color:red;text-decoration: none;" >'.__(dct_themename).' Child Theme One Click Installation Guide </a></div></div>';
return $default_text;
}
/*add_filter( 'pt-ocdi/importer_options', 'dct_ocdi_importer_options' );
-------------------------------------------------------------- */
function dct_ocdi_importer_options( $options ) {
    $options['aggressive_url_search'] = true;
    return $options;
}
/*add_filter( 'pt-ocdi/import_files', 'dct_ocdi_confirmation_dialog_options' );
-------------------------------------------------------------- */
function dct_ocdi_confirmation_dialog_options ( $options ) {
	return array_merge( $options, array(
		'width'       => 300,
		'dialogClass' => 'wp-dialog',
		'resizable'   => false,
		'height'      => 'auto', 
		'modal'       => true,
	) );
}
/* Assign Menu , Home Page And Add Content
-------------------------------------------------------------- */
function dct_ocdi_after_import_setup() {
    //Menus to assign after import.
	$main_menu  = get_term_by( 'name', __(main_menu,'Home'), 'nav_menu' );
	$secondary_menu    = get_term_by('name', __(secondary_menu,''), 'nav_menu');
	$footer_menu = get_term_by('name', __(footer_menu,''), 'nav_menu');
	set_theme_mod( 'nav_menu_locations', array(
		'primary-menu'    =>  $main_menu->term_id,
		'secondary-menu' => $secondary_menu->term_id,
		'footer-menu' => $footer_menu->term_id
	));
	/*Set Front Page from Reading Options*/
	$front_page = get_page_by_title( __(front_page,'Home') );
	if(isset( $front_page ) && $front_page->ID) {
		  update_option( 'show_on_front','page' );
		  update_option( 'page_on_front', $front_page->ID );
	}
	global $wpdb;
	$oldurl = "'".__(dct_demo_url).""; 
	$newurl = site_url();
	$results = array();
	$queries = array(
	    'content' =>        "UPDATE $wpdb->posts SET post_content = replace(post_content, %s, %s)",
	    'excerpts' =>        "UPDATE $wpdb->posts SET post_excerpt = replace(post_excerpt, %s, %s)",
	    'attachments' =>    "UPDATE $wpdb->posts SET guid = replace(guid, %s, %s) WHERE post_type = 'attachment'",
    	'guids' =>            "UPDATE $wpdb->posts SET guid = replace(guid, %s, %s)",
    );
    foreach ( $queries as $query_exe ){
        $result = $wpdb->query( $wpdb->prepare( $query_exe, $oldurl, $newurl) );
    }
}
/* Add Widget Data 
-------------------------------------------------------------- */
function dct_ocdi_before_widgets_import( $selected_import ) {
   delete_option('sidebars_widgets');
}
/* Include Extra Options
-------------------------------------------------------------- */
include get_stylesheet_directory() . '/extra-options/modules.php';
/* Include Admin One Click Options
-------------------------------------------------------------- */
include get_stylesheet_directory() . '/extra-options/admin/dct-panel.php';
/* Add Front-Site Css And JS
-------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'dct_enqueue_css' );
/* Add Admin Css And JS
-------------------------------------------------------------- */
add_action('admin_enqueue_scripts', 'dct_enqueue_admin', 9999);
/* Activation Child Theme Plugins
-------------------------------------------------------------- */
add_action( 'tgmpa_register', 'dct_register_required_plugins' );
/* Add One Click Installtion Hooks
-------------------------------------------------------------- */
add_filter( 'pt-ocdi/plugin_intro_text', 'dct_ocdi_plugin_intro_text' );
add_filter( 'pt-ocdi/import_files', 'dct_ocdi_import_files' );
add_filter( 'pt-ocdi/importer_options', 'dct_ocdi_importer_options' );
/*
function ocdi_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'dct-options';
    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );
/* Add Confirm Popup For Child Theme Data
-------------------------------------------------------------- */
add_filter( 'pt-ocdi/confirmation_dialog_options', 'dct_ocdi_confirmation_dialog_options', 10, 1 );
/* Assign Menu , Home Page And Add Content
-------------------------------------------------------------- */
add_action( 'pt-ocdi/after_import', 'dct_ocdi_after_import_setup' );
wp_delete_post(1);
/* Add Widget Data 
-------------------------------------------------------------- */
add_action( 'pt-ocdi/before_widgets_import', 'dct_ocdi_before_widgets_import' );
// Admin footer modification
function dct_footer_opt() {
?>	
	<style type="text/css">
			:root {
			  --color-1: <?php echo esc_attr( et_get_option( 'divi_DCT_color_palette_01', '#ee212b' ))  ;  ?> ;
			  --color-2: <?php echo esc_attr( et_get_option( 'divi_DCT_color_palette_02', '#082c4b' ))  ;  ?>;
			}
	</style>
<?php        
	 include get_stylesheet_directory() . '/extra-options/opt.php';  
}
add_action('wp_footer', 'dct_footer_opt');
?>