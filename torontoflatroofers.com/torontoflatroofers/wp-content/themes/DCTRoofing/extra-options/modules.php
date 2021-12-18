<?php 
/**
* Social
* Extra Theme Options
* Extra Theme Tabs Options
* Preloader
*/
/* Add Extra Social Icons Code Here
-------------------------------------------------------------- */
function dct_social_icons($dctpagenoptions) {
	global $themename, $shortname;
	$open_social_new_tab = array( "name" =>esc_html__( "Open Social URLs in New Tab", $themename ),
	   "id" => $shortname . "_show_in_newtab",
	   "type" => "checkbox",
	   "std" => "off",
	   "desc" =>esc_html__( "Set to ON to have social URLs open in new tab. ", $themename ) );
	$replace_array_newtab = array ( $open_social_new_tab );
	$show_pinterest_icon = array( "name" =>esc_html__( "Show Pinterest Icon", $themename ),
	   "id" => $shortname . "_show_pinterest_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Pinterest Icon on your header or footer. ", $themename ) );
	$show_tumblr_icon = array( "name" =>esc_html__( "Show Tumblr Icon", $themename ),
	   "id" => $shortname . "_show_tumblr_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Tumblr Icon on your header or footer. ", $themename ) );
	$show_dribbble_icon = array( "name" =>esc_html__( "Show Dribbble Icon", $themename ),
	   "id" => $shortname . "_show_dribbble_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Dribbble Icon on your header or footer. ", $themename ) );
	$show_vimeo_icon = array( "name" =>esc_html__( "Show Vimeo Icon", $themename ),
	   "id" => $shortname . "_show_vimeo_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Vimeo Icon on your header or footer. ", $themename ) );
	$show_linkedin_icon = array( "name" =>esc_html__( "Show LinkedIn Icon", $themename ),
	   "id" => $shortname . "_show_linkedin_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the LinkedIn Icon on your header or footer. ", $themename ) );
	$show_myspace_icon = array( "name" =>esc_html__( "Show MySpace Icon", $themename ),
	   "id" => $shortname . "_show_myspace_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the MySpace Icon on your header or footer. ", $themename ) );
	$show_skype_icon = array( "name" =>esc_html__( "Show Skype Icon", $themename ),
	   "id" => $shortname . "_show_skype_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Skype Icon on your header or footer. ", $themename ) );
	$show_youtube_icon = array( "name" =>esc_html__( "Show Youtube Icon", $themename ),
	   "id" => $shortname . "_show_youtube_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Youtube Icon on your header or footer. ", $themename ) );
	$show_flickr_icon = array( "name" =>esc_html__( "Show Flickr Icon", $themename ),
	   "id" => $shortname . "_show_flickr_icon",
	   "type" => "checkbox2",
	   "std" => "on",
	   "desc" =>esc_html__( "Here you can choose to display the Flickr Icon on your header or footer. ", $themename ) );
	
	$repl_array_opt = array( 
		$show_pinterest_icon,
		$show_tumblr_icon,
		$show_dribbble_icon,
		$show_vimeo_icon,
		$show_linkedin_icon,
		$show_myspace_icon,
		$show_skype_icon,
		$show_youtube_icon,
		$show_flickr_icon,
	);
	$show_pinterest_url =array( "name" =>esc_html__( "Pinterest Profile Url", $themename ),
	   "id" => $shortname . "_pinterest_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Pinterest Profile. ", $themename ) );
	$show_tumblr_url =array( "name" =>esc_html__( "Tumblr Profile Url", $themename ),
	   "id" => $shortname . "_tumblr_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Tumblr Profile. ", $themename ) );
	$show_dribble_url =array( "name" =>esc_html__( "Dribbble Profile Url", $themename ),
	   "id" => $shortname . "_dribble_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Dribbble Profile. ", $themename ) );
	$show_vimeo_url =array( "name" =>esc_html__( "Vimeo Profile Url", $themename ),
	   "id" => $shortname . "_vimeo_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Vimeo Profile. ", $themename ) );
	$show_linkedin_url =array( "name" =>esc_html__( "LinkedIn Profile Url", $themename ),
	   "id" => $shortname . "_linkedin_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your LinkedIn Profile. ", $themename ) );
	$show_myspace_url =array( "name" =>esc_html__( "MySpace Profile Url", $themename ),
	   "id" => $shortname . "_mysapce_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your MySpace Profile. ", $themename ) );
	$show_skype_url =array( "name" =>esc_html__( "Skype Profile Url", $themename ),
	   "id" => $shortname . "_skype_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Skype Profile. ", $themename ) );
	$show_youtube_url =array( "name" =>esc_html__( "Youtube Profile Url", $themename ),
	   "id" => $shortname . "_youtube_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Youtube Profile. ", $themename ) );
	$show_flickr_url =array( "name" =>esc_html__( "Flickr Profile Url", $themename ),
	   "id" => $shortname . "_flickr_url",
	   "std" => "#",
	   "type" => "text",
	   "validation_type" => "url",
	   "desc" =>esc_html__( "Enter the URL of your Flickr Profile. ", $themename ) );
	
	$repl_array_url = array( 
		$show_pinterest_url,
		$show_tumblr_url,
		$show_dribble_url,
		$show_vimeo_url,
		$show_linkedin_url,
		$show_myspace_url,
		$show_skype_url,
		$show_youtube_url,
		$show_flickr_url,
	);
	$srch_key = array_column($dctpagenoptions, 'id');
	$key = array_search('divi_show_facebook_icon', $srch_key);
	array_splice($dctpagenoptions, $key + 6, 0, $replace_array_newtab);
	$key = array_search('divi_show_google_icon', $srch_key);
	array_splice($dctpagenoptions, $key + 8, 0, $repl_array_opt);
	$key = array_search('divi_rss_url', $srch_key);
	array_splice($dctpagenoptions, $key + 17, 0, $repl_array_url);
	return $dctpagenoptions;
}
/* End Extra Social Icons Code Here*/
/* Add Theme Options Panel Tabs Code Here*/
function dct_epanel_tabs(){
  dct_epanel_fields();  ?><li><a href="#wrap-dct"><?php echo 'DCT Options'; ?></a></li><?php
}
/* End Theme Options Panel Tabs Code Here**/
/* Add Theme Options Panel Tabs Options Code Here
*  Preloader
*  Blog
*  404-Page
*  Woocommerce
-------------------------------------------------------------- */
function dct_epanel_fields(){
	global $epanelMainTabs, $themename, $shortname, $options ;
	$options[] = array(
		"name" => "wrap-dct",
		"type" => "contenttab-wrapstart",);
			$options[] = array(
			"type" => "subnavtab-start",);
				$options[] = array(
					"name" => "dct-1",
					"type" => "subnav-tab",
					"desc" => esc_html__("General", $themename)
				);
				$options[] = array(
					"name" => "dct-2",
					"type" => "subnav-tab",
					"desc" => esc_html__("Preloader", $themename)
				);
			$options[] = array(
			"type" => "subnavtab-end",);	
			$options[] = array(
				"name" => "dct-1",
				"type" => "subcontent-start",);
				$options[] = array( 
					"name" =>esc_html__( 'Theme Color Options', $themename ),
					"id" => $shortname . "_DCT_show_color_option",
					"type" => "checkbox2",
					"std" => "off",
					"desc" =>esc_html__( "Define the default color palette for color pickers in the Divi Builder.", $themename ),
				);
				$options[] = array( "name"         => esc_html__( "Default Primary Color", $themename ),
					"id"           => $shortname . "_DCT_color_palette_01",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#ee212b',
					"desc"         => esc_html__( "Define the default color palette for color pickers in the Divi Builder.", $themename ),
				);
				$options[] = array( "name"         => esc_html__( "Default secondary Color", $themename ),
					"id"           => $shortname . "_DCT_color_palette_02",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#082c4b',
					"desc"         => esc_html__( "Define the default secondary color palette for color pickers in the Divi Builder.", $themename ),
				);
			$options[] = array(
				"name" => "dct-1",
				"type" => "subcontent-end",);
			//**************************Pre-Loader Options Start Here******************************************//	
			$options[] = array(
				"name" => "dct-2",
				"type" => "subcontent-start",);
				$options[] = array(
					'name' => esc_html__('Preloader', $themename),
					'id' => $shortname . "_DCT_preloader_option",
					'desc' => esc_html__('Prealoder ENABLE/DISABLE',$themename),
					'std' => 'off',
					"type" => "checkbox"
				);
				$options[] = array(
					'name' => esc_html__('Preloader Images', $themename),
					'desc' => '',
					"type" => "callback_function",
					"function_name" => 'et_preloader_option',
				);
				$options[] = array(
					'name' => esc_html__('Preloader Custom Image', $themename),
					'id' => $shortname . "_DCT_preloader_custom_image_option",
					'desc' => esc_html__('Prealoder Custom Image ENABLE/DISABLE',$themename),
					'std' => 'off',
					"type" => "checkbox"
				);
				$options[] = array(
					'name' => esc_html__('Preloader Image Uploader', $themename),
					'id' => $shortname . "_DCT_preloader_custom_image",
					'desc' => esc_html__('You can Upload your Desire image.Image size will be maximum width: 200px and maximum height : 200px', $themename),
					'std' => '',
					"type" => "upload"
				);
				$options[] = array(
					'name' => esc_html__('Preloader color', $themename),
					'id' => $shortname . "_DCT_preloader_color",
					'desc' => esc_html__('Please Select Preloader color here. You can also add html HEX color code.', $themename),
					'std' => '#ee212b',
					"type" => "et_color_palette"
				);
				$options[] = array(
					'name' => esc_html__('Preloader background color', $themename),
					'id' => $shortname . "_DCT_preloader_background_color",
					'desc' => esc_html__('Please Select preloader background color here. You can also add html HEX color code.', $themename),
					'std' => '#082c4b',
					"type" => "et_color_palette"
				);
				$options[] = array(
					'name' => esc_html__('Preloader Effects', $themename),
					'id' => $shortname . "_DCT_preloader_effects",
					'desc' => esc_html__('Preloader Effects.', $themename),
					'std' => 'fadeOut',
					"type" => "select",
					"options" => array(
						'fadeOut' => esc_html__('FadeOut ', $themename),
						'slideUp' => esc_html__('SlideUp', $themename),
					),
					'et_save_values' => true,
				);
				$options[] = array(
					'name' => esc_html__('Preloader Delay time', $themename),
					'type' => 'text',
					'id' => $shortname . "_DCT_preloader_delay_time",
					'desc' => esc_html__('Please put delay time, only use number. Default value is 350. Example: 350', $themename),
					'std' => '350',
				);
				$options[] = array(
					'name' => esc_html__('Body Delay time', $themename),
					'type' => 'text',
					'id' => $shortname . "_DCT_preloader_body_delay_time",
					'desc' => esc_html__('Please put delay time, only use number. Default value is 350. Example: 350', $themename),
					'std' => '350',
				);
				$options[] = array(
					'name' => esc_html__('Preloader Fadeout Speed', $themename),
					'id' => $shortname . "_DCT_preloader_fadeout_speed",
					'desc' => esc_html__('Preloader Fadeout Speed.', $themename),
					'std' => 'fast',
					"type" => "select",
					"options" => array(
					  'fast' => esc_html__('Fast', $themename),
					  'slow' => esc_html__('Slow', $themename),
					),
					'et_save_values' => true,
				);	
			$options[] = array(
				"name" => "dct-2",
				"type" => "subcontent-end",);	
			//**************************Pre-Loader Options End Here******************************************//	
		///***************************Particle Ground Options End Here*****************************************//						
		$options[] = array( 
		"name" => "wrap-dct",
		"type" => "contenttab-wrapend",);
}
/** End Theme Options Panel Tabs Options Code Here **/

/* Adding Preloader Options Code Here **/
function DCT_custom_preloader_option_css(){ 
	if( et_get_option('divi_DCT_preloader_option') != '' ){
		$divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');
	}else{
		$divi_DCT_preloader_option = 'on';
	}//if( et_get_option('divi_DCT_preloader_option') != '' )
	if( $divi_DCT_preloader_option == 'on' ){
		$divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');
		$divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');
		$divi_DCT_preloader_background_color = et_get_option('divi_DCT_preloader_background_color');
		$divi_DCT_preloader_effects = et_get_option('divi_DCT_preloader_effects');
		$divi_DCT_preloader_delay_time = et_get_option('divi_DCT_preloader_delay_time');
		$divi_DCT_preloader_body_delay_time = et_get_option('divi_DCT_preloader_body_delay_time');
		$divi_DCT_preloader_fadeout_speed = et_get_option('divi_DCT_preloader_fadeout_speed');
		 ?>
		<style type="text/css">
				.preloader{position:fixed;top:0;left:0;right:0;bottom:0; z-index:100000;height:100%;width:100%;overflow:hidden !important;z-index:9999999999999999;background-color: <?php echo $divi_DCT_preloader_background_color; ?>;}
				.preloader .status{width:100px;height:100px;position:absolute;left:50%;top:50%;background-repeat:no-repeat;background-position:center;-webkit-background-size:cover;background-size:cover;margin:-50px 0 0 -50px;}
		</style>
<?php
	}//if( $divi_DCT_preloader_option == 'on' ){
}
/** Adding Preloader Options Section **/
function DCT_preloader_option_section(){ 
	if( et_get_option('divi_DCT_preloader_option') != '' ){
		$divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');
	}else{
		$divi_DCT_preloader_option = 'on';
	}//if( et_get_option('divi_DCT_preloader_option') != '' )
	$is_et_fb_enabled = function_exists( 'et_fb_enabled' ) && et_fb_enabled();
	if( $divi_DCT_preloader_option == 'on' && !$is_et_fb_enabled){	?>
	<!-- PRE LOADER -->
    <div class="preloader">
      <div class="status">
        <?php
        $divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');
        $divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');
        if($divi_DCT_preloader_custom_image != '' &&  et_get_option('divi_DCT_preloader_custom_image_option') == 'on' ){?>
        <img src="<?php echo $divi_DCT_preloader_custom_image; ?>" alt="<?php echo get_bloginfo(); ?>" />
        <?php	
        } else { 
            if ( $divi_DCT_preloader_images!= '' ){
            	require_once( get_stylesheet_directory().'/extra-options/preloader/'.str_replace("gif","php",end(explode('/',  esc_attr(get_option("divi_DCT_preloader_images", '/preloader1.gif' ))))));
            }else{
            	require_once( get_stylesheet_directory().'/extra-options/preloader/preloader1.php' );
            }//if ( $divi_DCT_preloader_images!= '' ){
        }//if($divi_DCT_preloader_custom_image != '' &&  et_get_option('divi_DCT_preloader_custom_image_option') == 'on' )
        ?>
      </div>
    </div>
<!-- .preloader -->
<?php }//if( $divi_DCT_preloader_option == 'on' && !$is_et_fb_enabled)
}
/* Adding Preloader Active jQuery**/
function DCT_preloader_js(){ 
	if( et_get_option('divi_DCT_preloader_option') != '' ){
		$divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');
	}else{
		$divi_DCT_preloader_option = 'on';
	}//if( et_get_option('divi_DCT_preloader_option') != '' ){
	if( $divi_DCT_preloader_option == 'on' ){	
		 $divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');
		 $divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');
		 $divi_DCT_preloader_background_color = et_get_option('divi_DCT_preloader_background_color');
		 $divi_DCT_preloader_effects = et_get_option('divi_DCT_preloader_effects','fadeOut');
		 $divi_DCT_preloader_delay_time = et_get_option('divi_DCT_preloader_delay_time',350);
		 $divi_DCT_preloader_body_delay_time = et_get_option('divi_DCT_preloader_body_delay_time',350);
		 $divi_DCT_preloader_fadeout_speed = et_get_option('divi_DCT_preloader_fadeout_speed','fast');
?>
		<script type="text/javascript">
            jQuery(window).load(function(){	
                jQuery('.status').fadeOut('<?php echo $divi_DCT_preloader_fadeout_speed; ?>'); // will first fade out the loading animation
                jQuery('.preloader').delay(<?php echo $divi_DCT_preloader_delay_time; ?>).<?php echo $divi_DCT_preloader_effects; ?>('<?php echo $divi_DCT_preloader_fadeout_speed; ?>'); // will fade out the white DIV that covers the website.
                jQuery('.home').delay(<?php echo $divi_DCT_preloader_body_delay_time; ?>).css({'overflow':'visible'});
            })
        </script>
<?php
	}//if( $divi_DCT_preloader_option == 'on' )
}

/* Adding Preloader Options jQuery **/
function et_preloader_option(){
		$preloader_images = array(
			'preloader_images1' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader1.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader1.gif'
			),
			'preloader_images2' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader2.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader2.gif'
			),	
			'preloader_images3' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader3.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader3.gif'
			),	
			'preloader_images4' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader4.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader4.gif'
			),	
			'preloader_images5' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader5.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader5.gif'
			),	
			'preloader_images6' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader6.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader6.gif'
			),	
			'preloader_images7' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader7.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader7.gif'
			),	
			'preloader_images8' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader8.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader8.gif'
			),	
			'preloader_images9' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader9.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader9.gif'
			),	
			'preloader_images10' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader10.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader10.gif'
			),	
			'preloader_images11' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader11.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader11.gif'
			),	
			'preloader_images12' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader12.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader12.gif'
			),	
			'preloader_images13' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader13.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader13.gif'
			),	
			'preloader_images14' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader14.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader14.gif'
			),	
			'preloader_images15' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader15.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader15.gif'
			),	
			'preloader_images16' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader16.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader16.gif'
			),	
			'preloader_images17' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader17.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader17.gif'
			),	
			'preloader_images18' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader18.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader18.gif'
			),	
			'preloader_images19' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader19.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader19.gif'
			),	
			'preloader_images20' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader20.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader20.gif'
			),	
			'preloader_images21' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader21.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader21.gif'
			),	
			'preloader_images22' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader22.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader22.gif'
			),	
			'preloader_images23' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader23.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader23.gif'
			),	
			'preloader_images24' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader24.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader24.gif'
			),	
			'preloader_images25' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader25.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader25.gif'
			),	
			'preloader_images26' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader26.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader26.gif'
			),	
			'preloader_images27' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader27.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader27.gif'
			),	
			'preloader_images28' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader28.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader28.gif'
			)
	);
	$gt_preloader_images = get_option( 'divi_DCT_preloader_images' ) ;
	foreach( $preloader_images as $activate ) : ?>
		<div style="margin-right:50px; display: inline-block; line-height: 70px;">
			<input type="radio"  name="divi_DCT_preloader_images" 
					value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $gt_preloader_images, $activate['value'] ); ?>  class="dct-preloader-radio"/>
			<label for="<?php echo $activate['value']; ?>"> 
				<img src="<?php echo $activate['img']; ?>"  width="70" alt="preloader" /> 
			</label>
		</div>
	<?php endforeach; 
} 

/* Save Preloader Theme Options */
function et_epanel_save_callback_new( $source ){
	update_option('divi_DCT_preloader_images',$_POST['divi_DCT_preloader_images']);
}



/* Custom page footer on Woo pages */
/* Add Hook For Blog Category Footer */
//add_action('et_after_main_content', 'dct_blog_category_footer');
/* Add Hook For Social Icons*/
add_filter('et_epanel_layout_data', 'dct_social_icons', 99);
/* Add Hook For Add Extra Theme Options */
add_action("epanel_render_maintabs", 'dct_epanel_tabs');
/* Add Hook For  Add Extra Theme Tabs Options */
add_action("et_epanel_changing_options", 'dct_epanel_fields');
/* Add Preloader Theme Options */
add_action('wp_head' , 'DCT_custom_preloader_option_css');
/* Add Preloader Options Section */
add_action('wp_footer' , 'DCT_preloader_option_section');
/* Add Preloader Footer Js */
add_action('wp_footer' , 'DCT_preloader_js');
/* Save Preloader Theme Options */
add_action( 'wp_ajax_save_epanel', 'et_epanel_save_callback_new' );
/** Blog Options **/
//add_action('et_before_main_content', 'dct_blog_page_title');
/* Change Footer Admin Text */ 
function dct_remove_footer_admin()
{   echo '<a href="'.__(dct_themeauthorurl).'" target="_blank">'.__(dct_themename).' Child Theme Design By  '.__(dct_themeauthor).' </a>';}
add_filter('admin_footer_text', 'dct_remove_footer_admin');
/* Add Add To cart Button On All Shop Page */

?>
