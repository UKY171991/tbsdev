<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php the_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('template_url');?>/assets/images/logo/favicon.png" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/fontawesome.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/bootstrap_v4.3.1_min.css" type="text/css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/aos.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.css" type="text/css">
<?php wp_head(); ?> 
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ebb90d7967ae56c52194a32/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <header>
        <div class="nit-navtop">
            <div class="container">
                <div class="nit-uppernav">
                  <div class="nit-upper-social"> 
					      <?php dynamic_sidebar('blog_search'); ?>
					  <!-- hitwebcounter Code START -->
                                    
              
					      <?php //pvc_stats_update( $postid, 1 ); ?>
                                             <?php dynamic_sidebar('social'); ?>
		</div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="nit-nav  navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu(array('theme_location'=>'headermenu','menu_class'=>'nit-navbar','menu_id'=>'#mynavbar')); ?>
                
                <?php //dynamic_sidebar('contact'); ?> 
                
            </nav>
        </div>
    </header>
