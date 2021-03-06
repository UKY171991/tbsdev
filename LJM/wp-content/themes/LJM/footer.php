<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<section class="nit-news">
          <?php dynamic_sidebar('footer_image'); ?>
         <div class="container">
            <h2>Come Go To Sea With Us</h2>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="nit-footer-info">
                <div class="nit-grid-4">
                 <?php query_posts('post_type=footer_contact&posts_per_page=4&order=asc'); $i=0; if( have_posts() ): while( have_posts() ) : the_post(); ?>
                    <div class="nit-box">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-fluid">
                        <div class="nit-flex">
                            <span><?php the_title(); ?> :</span>
                            <?php the_content(); ?>
                        </div>
                    </div>
          <?php $i++; endwhile; endif; wp_reset_query(); ?>
                    
                </div>
            </div>
                <div class="nit-flex footer-main">
                    <div class="nit-box">
                        <h4>Quick Links</h4>
                        <?php wp_nav_menu(array('theme_location'=>'footermenu')); ?>
                        
                    </div>
                    <div class="nit-box">
                       <?php dynamic_sidebar('course'); ?>
                    </div>
                    <div class="nit-box">
                       <?php dynamic_sidebar('academic'); ?>
                        
                    </div>
                    <div class="nit-box">
                        <?php dynamic_sidebar('payment'); ?>
                        
                    </div>
                    <div class="nit-box">
                        <h4>News</h4>
						<ul>
						<?php query_posts('post_type=news&posts_per_page=3&order=desc'); $j=0; if( have_posts() ): while( have_posts() ) : the_post(); ?>
                       <!--- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.<br><?php echo date('l jS F Y'); ?></a></li>--->
                         <?php $j++; endwhile; endif; wp_reset_query(); ?>
							</ul>
						
                    </div>
                </div>
            <a href="">
<img src="https://hitwebcounter.com/counter/counter.php?page=7347559&style=0011&nbdigits=5&type=ip&initCount=0" title="Web Counter" Alt="counter free"   border="0" >
</a>
                <?php dynamic_sidebar('footer_link'); ?>
	    
        </div>
    </footer>

    <a id="mkd-back-to-top" href="#">
	<span class="mkd-icon-stack">
        <i class="fas fa-angle-up"></i>
    </span>
	<span class="mkd-back-to-top-inner">
		<span class="mkd-back-to-top-text">Top</span>
	</span>
</a>

    <script src="<?php bloginfo('template_url');?>/assets/js/jQuery_v3.4.1_min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/bootstrap_v4.3.1_min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/aos.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/a076d05399.js"></script>

    <script src="<?php bloginfo('template_url');?>/assets/js/custom.js"></script>
    <script>
        window.FontAwesomeConfig = {
            searchPseudoElements: true
        }





    </script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script type="text/javascript">
       $( function() {
            $( "#datepicker1,#datepicker2,#datepicker3,#datepicker4,#datepicker5,#datepicker6,#datepicker7,#datepicker8,#datepicker9,#datepicker10,#datepicker11,#datepicker12,#datepicker13" ).datepicker({dateFormat: 'dd-mm-yy'});
        } );
   </script> 
<script type="text/javascript" src="https://api.fygaro.com/api/v1/payments/product/927e40cb-3fa0-4229-8478-c4efbd6ae66f/donate-button/"></script>
     <!----<script type="text/javascript" src="https://api.fygaro.com/api/v1/payments/product/927e40cb-3fa0-4229-8478-c4efbd6ae66f/donate-button/"></script>---->
<?php wp_footer(); ?>
</body>

</html>
