<?php

/**

* Add Admin Menu

* Add Admin SubMenu

*/
if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}
/* Add Add Admin Menu
-------------------------------------------------------------- */ 
function add_dct_admin_menu()
{
    add_menu_page(dct_themename, dct_themename, 'edit_theme_options', 'dct-options', 'dct_divionepage_index');
	add_submenu_page(
			'dct-options',
			esc_html__( 'Welcome' , 'divionepage' ),
			esc_html__( 'Welcome' , 'divionepage' ),
			'switch_themes',
			'dct-options&tab=dct_welcome_tab',
			'dct_divionepage_index');
	if ( is_admin() && is_plugin_active( 'one-click-demo-import/one-click-demo-import.php')) {
		remove_submenu_page( 'themes.php', 'pt-one-click-demo-import' );
		add_submenu_page(
				'dct-options',
				esc_html__( 'Import Demo Data' , 'divionepage' ),
				esc_html__( 'Import Demo Data' , 'divionepage' ),
				'edit_theme_options',
				'themes.php?page=pt-one-click-demo-import',
				'');
	}
	add_submenu_page(
			'dct-options',
			esc_html__( 'Changes Logs' , 'divionepage' ),
			esc_html__( 'Changes Logs' , 'divionepage' ),
			'switch_themes',
			'dct-options&tab=dct_changeslogs_tab',
			'dct_divionepage_index');
	add_submenu_page(
			'dct-options',
			esc_html__( 'Support' , 'divionepage' ),
			esc_html__( 'Support' , 'divionepage' ),
			'switch_themes',
			'dct-options&tab=dct_support_tab',
			'dct_divionepage_index');
	add_submenu_page(
			'dct-options',
			esc_html__( 'Theme Options' , 'divionepage' ),
			esc_html__( 'Theme Options' , 'divionepage' ),
			'switch_themes',
			'et_divi_options#wrap-dct',
			'dct_divionepage_index');
}

function dct_divionepage_index()
{
?>	
	<div id="panel-wrap" >  
    	<div id="epanel-wrapper" >
        	<div id="epanel-content-wrap" >
            	<div id="epanel-content" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                	<div id="epanel-header" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    					<h1 id="epanel-title"><?php _e( 'Welcome To ' .dct_themename .' Child Theme!', 'dctonepage' ); ?></h1>
        				<div class="epanel-text " ><?php echo esc_html__( dct_themename .'  Child Theme is now installed and ready to use! Read below for additional information. We hope you enjoy it!', 'dctonepage' ); ?></div>
                    <div class="dct-logo" >
                        <span class="porto-version">
                            <?php _e( 'Version', 'dctonepage' ); ?> 
                            <?php echo dct_version; ?>
                        </span>
                    </div>
       				</div>
	    <?php settings_errors();
    	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'dct_welcome_tab'; ?>  
        <ul id="epanel-mainmenu" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" >			
        	<li class="ui-state-default ui-corner-top <?php echo $active_tab == 'dct_welcome_tab' ? ' ui-tabs-active ui-state-active' : '';?>" >
           		<a href="?page=dct-options&tab=dct_welcome_tab" class="ui-tabs-anchor" > Welcome</a>
           </li>
           <?php
           if ( is_admin() && is_plugin_active( 'one-click-demo-import/one-click-demo-import.php')) {
           ?>
           <li class="ui-state-default ui-corner-top <?php echo $active_tab == 'dct_plugins_tab' ? ' ui-tabs-active ui-state-active' : '';?>" >
           		<a href="themes.php?page=pt-one-click-demo-import" class="ui-tabs-anchor" >Import Demo Data </a>
           <?php } ?>
           </li>
           <li class="ui-state-default ui-corner-top  <?php echo $active_tab == 'dct_changeslogs_tab' ? ' ui-tabs-active ui-state-active' : '';?>" >
        	   <a href="?page=dct-options&tab=dct_changeslogs_tab" class="ui-tabs-anchor"  >Changes Logs</a>
           </li>
           <li class="ui-state-default ui-corner-top <?php echo $active_tab == 'dct_support_tab' ? 'ui-tabs-active ui-state-active' : '';?>" >
    	       <a href="?page=dct-options&tab=dct_support_tab" class="ui-tabs-anchor"  >Support </a>
           </li>
           <li class="ui-state-default ui-corner-top <?php echo $active_tab == 'dct_themeoptions_tab' ? ' ui-tabs-active ui-state-active' : '';?>" >
	           <a href="?page=et_divi_options#wrap-dct"  class="ui-tabs-anchor" >Theme Options</a>
           </li>
        </ul>  
         <?php do_action('dct_tabs', 'dct-options', $active_tab); ?>
        		<div class="et-content-div ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs ui-widget ui-corner-all" >
                    <div class="et-tab-content ui-tabs-panel ui-widget-content ui-corner-bottom" >
                        <form method="post" action="#">  
                        <?php
                            if ($active_tab == 'dct_welcome_tab') {
                                require_once get_stylesheet_directory() . '/extra-options/admin/welcome.php';
                            } else if ($active_tab == 'dct_plugins_tab') {
                                require_once get_stylesheet_directory() . '/extra-options/admin/plugins.php';
                            } else if ($active_tab == 'dct_changeslogs_tab') {
                                require_once get_stylesheet_directory() . '/extra-options/admin/changeslogs.php';
                            } else if ($active_tab == 'dct_support_tab') {
                                require_once get_stylesheet_directory() . '/extra-options/admin/support.php';
                            } else if ($active_tab == 'dct_themeoptions_tab') {
                                require_once get_stylesheet_directory() . '/extra-options/admin/themeoptions.php';
                            } else if ($active_tab == 'dct_systemstatus_tab') {
                                require_once get_stylesheet_directory() . '/extra-options/admin/systemstatus.php';
                            }
                        ?>
                        </form> 
                        </div>
        			</div>
        		</div>	
        	</div>
        </div>
    </div> 
<?php }
/* Add Child Theme Admin Menu
-------------------------------------------------------------- */ 
add_action('admin_menu', 'add_dct_admin_menu');
?>