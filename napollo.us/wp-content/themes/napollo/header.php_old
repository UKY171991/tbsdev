<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package napollo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
    <!-- Favicon -->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="favicon/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="favicon/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
<meta name="google-site-verification" content="qWGeIEMYQvEC0CxoFTptkn33W8PlmDyDqe0OtJIAGJI" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155763723-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155763723-1');
</script>
	<!-- Facebook Pixel Code -->
<!--script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '701316593949198');
  fbq('track', 'PageView');
</script-->
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class( $body_class ); ?>>
    
    <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=701316593949198&ev=PageView&noscript=1"
/></noscript>
<div id="wrapper">
		
		<!-- Header -->
		<header id="header" class="bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex justify-content-between align-items-center holder">
						
						<!-- Site Logo -->
						<strong class="logo d-block">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo ot_get_option( 'header_logo' ); ?>" alt="logo"></a>
						</strong>
	
						<!-- Mian Navigation -->
						<nav class="cross outer-menu">
							<input class="checkbox-toggle" type="checkbox">
							<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
								<circle cx="50" cy="50" r="30"></circle>
								<path class="line--1 line--debug" d="M0 40h62c13 0 6 28-4 18L35 35"></path>
								<path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35"></path>
								<path class="line--2 line--debug" d="M0 50h70"></path>
								<path class="line--2" d="M0 50h70"></path>
								<path class="line--3 line--debug" d="M0 60h62c13 0 6-28-4-18L35 65"></path>
								<path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65"></path>
							</svg>
							<div class="menu">
								<div>
									<div>
										<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'container' => false,
												'menu_class'     => 'list-unstyled mb-4 mb-lg-0',
												'walker' => new submenu_wrap()
											) );
										?>
										<div class="links-holder d-flex align-items-center">
										   
											<a href="JavaScript:void(0);" class="btn btn-default quote-open d-none d-lg-inline-block">FREE ESTIMATION</a>
											
											<!-- Social Networks -->
											<ul class="list-inline social-networks call-usqa m-0 ml-lg-3">
<!-- 												<li class="list-inline-item align-middle whatsapp"><a href="<?php echo ot_get_option( 'header_whatsapp' ); ?>" target="_blank"><span class="icon-whatsapp"></span></a></li>
												<li class="list-inline-item align-middle"><a href="tel:<?php echo ot_get_option( 'header_phone' ); ?>"><span class="icon-phone"></span></a></li>
												<li class="list-inline-item align-middle"><a href="mailto:<?php echo ot_get_option( 'header_email' ); ?>"><span class="icon-envelope"></span></a></li> -->
												<li><a href="tel:<?php echo ot_get_option( 'header_phone' ); ?>"><?php echo ot_get_option( 'header_phone' ); ?><span class="icon-phone"></span></a></li>
											</ul>
											
											<!-- Language Select -->
<!-- 											<div class="custom-select-box ml-2">
												<div class="qa-flag">
													<ul>
														<li><a href="https://napollo.ae/"><img src="https://www.napollo.ae/wp-content/uploads/2019/11/ui-flag.png"></a></li>
														<li><a href="http://napollo.us/"><img src="https://www.napollo.ae/wp-content/uploads/2019/11/us-flag.png"></a></li>
													</ul>
												</div>
											    
											   <?php echo do_shortcode('[google-translator]'); ?> --> 

											</div>
										</div>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- Main -->
		<main id="main">
		    <?php
		    if (is_singular('post')) {
		    ?>

               
            
            <?php 
		        
		    }
		    ?>