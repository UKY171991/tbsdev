<?php
/**
* Welcome Tab
*/
if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}
?>
<div class="et-tab-content ui-tabs-panel ui-widget-content ui-corner-bottom">
	<div class="et-epanel-box et-epanel-box__checkbox-list" >
		<div class="et-box-title">
        	<h2 style="line-height:25px;text-align:justify;" ><?php _e( dct_themename .' Child Theme', 'dctonepage' ); ?> <?php _e( dct_themedesc .' Child Theme', 'dctonepage' ); ?></h2>
            <p style="text-align:justify">We know what it's like to need support. This is the reason why our customers are the top priority and we treat every issue with the utmost seriousness. The team is working hard to help every customer, to keep the theme's documentation up to date, to produce video tutorials and to develop new ways to make everything easier.</p>
        <p>You can contact on us, we are here for you!</p>
    	</div>
		<div class="et-box-content">
        	<img src="<?php echo get_stylesheet_directory_uri().'/screenshot.jpg' ?>" style="width: 70%;float: right;"  />
        </div>
	</div>
    <div class="et-epanel-box" id="dct_panel_box" style="margin:50px 50px 50px 0px ;" >
    	<div class="info-box">
           <h2>Support Email</h2>
            <p>We offer outstanding support through our email. To get support first you need to email us on <a href="mailto:<?php echo dct_support_mail; ?>"><?php echo dct_support_mail; ?></a>  For <?php echo dct_themename; ?> Child Theme.</p>
            <a class="et-save-button" href="<?php echo dct_support_url; ?>" target="_blank">Open forum</a>        </div>
        <div class="info-box">
            <h2>Docs and Learning</h2>
            <p>Our online documentation will give you important information about the theme. This is a exceptional resource to start discovering the theme's true potential.</p>
            <a class="et-save-button" href="<?php echo dct_docs_url; ?>" target="_blank">Open documentation</a>        </div>
        <div class="info-box">
            <h2>Video tutorials</h2>
            <p>We believe that the easiest way to learn is watching a video tutorial. We have a growing library of narrated video tutorials to help you do just that.</p>
            <a class="et-save-button" href="<?php echo dct_video_url; ?>" target="_blank">View tutorials</a>        </div>
            <div class="info-box">
            <h2>Join Our Facebook Group</h2>
            <p>Check out the useful Freebies we have and keep your eyes peeled for more! To get Latest Updates and check our upcoming themes & layouts join our facebook group. </p>
            <a class="et-save-button" href="<?php echo dct_fb_group; ?>" target="_blank">Join Group</a>        </div>
    </div>
    </div>
</div>