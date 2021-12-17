<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<!----------------------------slider-section--------------------------------------------->
<section class="slider">
       <div class="bgoverlay"></div>
        <div class="owl-carousel slider-carousel owl-theme">
            <?php query_posts('post_type=slide&posts_per_page=-1&order=asc'); if( have_posts() ): while( have_posts() ): the_post();?>
			<div class="item">
				<?php if ( has_post_thumbnail() ) :
					$thumbnail_id = get_post_thumbnail_id( $post->ID );
					$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
					$title = get_post(get_post_thumbnail_id())->post_title; //The Title
					$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
					$description = get_post(get_post_thumbnail_id())->post_content; // The Description
					?>     
					<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" title="<?php echo $caption;?>" class="slider-img img-fluid"> 
				<?php endif; ?>
                
                <div class="item-content text-top" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="container">
                        <div class="content-box" data-aos="fade-down">
                           <div class="nit-description">
                               <?php the_content();?>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
			 <?php endwhile; endif; wp_reset_query();?>
        </div>
    </section>
    <section class="nit-about">
        <div class="container">
            <div class="nit-about-box">
			<?php while(have_posts()): the_post();?>
                <div class="nit-flex">
                    <div class="nit-box">
                        <div class="nit-img-box">
                            
							<?php if ( has_post_thumbnail() ) :
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							$title = get_post(get_post_thumbnail_id())->post_title; //The Title
							$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
							$description = get_post(get_post_thumbnail_id())->post_content; // The Description
							?>     
							<figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" title="<?php echo $caption;?>" class="slider-img img-fluid"></figure> 
							<?php endif; ?>
                            
                        </div>
                    </div>
                    <div class="nit-content-box">
                       <?php the_content();?>
                    </div>
                </div>
				<?php endwhile;?>
            </div>
        </div>
        <div class="bg-pro"></div>
    </section>
    <section class="nit-our-product">
        <div class="container">
            <div class="nit-heading-box">
                <h3 class="nit-heading">our product</h3>
                <p>There are many variations of passages of Lorem Ipsum <br>words which don't look even believable.</p>
            </div>
            <div class="nit-tab-box">
<ul class="nav nav-tabs">
<?php $cat_terms = get_terms(
						array('product_cat'),
						array(
							'hide_empty'    => false,
							'orderby'       => 'name',
							'order'         => 'ASC',
							'number'        => 6 
						)
					);

					if( $cat_terms ):
						$i=1;
						foreach( $cat_terms as $term ):
				?> 
				
  <li class=""><a data-toggle="tab" class="<?php if($i==1): echo 'active'; endif;?>" href="#p-<?php echo $i;?>"><span class="nit-icon-box"><?php $image = get_field('icon');?><img src="<?php echo esc_url($image['url']); ?>" alt="" class="img-fluid"></span><?php echo $term->name; ?></a></li>
  <?php $i++; endforeach; endif; ?>
  </ul>

<div class="tab-content">

<?php
		if( $cat_terms ) :
			$j=1;
			foreach( $cat_terms as $term ) :

			$args = array(
					'post_type'       => 'our-product',
					'posts_per_page'  => 3, //specify yours
					'post_status'     => 'publish',
					'tax_query'       => array(array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => $term->slug,
										),
									 ),
					'ignore_sticky_posts'   => true 
					);
					?>
				

  <div id="p-<?php echo $j;?>" class="tab-pane <?php if($j==1): echo 'in active'; endif;?>">
    <div class="owl-carousel product-carousel owl-theme">
	
			<?php $_posts = new WP_Query( $args ); 
			if( $_posts->have_posts() ) :
			while( $_posts->have_posts() ) : $_posts->the_post();
			?>
        <div class="item">
            <?php if ( has_post_thumbnail() ) :
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							$title = get_post(get_post_thumbnail_id())->post_title; //The Title
							$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
							$description = get_post(get_post_thumbnail_id())->post_content; // The Description
							?>     
							<figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" title="<?php echo $caption;?>" class="img-fluid"></figure> 
							<?php endif; ?>
            <figcaption>
                <h3 class="nit-title"><?php the_title();?></h3>
            </figcaption>
        </div>
       <?php  endwhile; endif; wp_reset_postdata(); ?>
	   
     </div>
  </div>
  <?php $j++; endforeach; endif; ?>
  
 
</div>
            </div>
        </div>
    </section>
    <section class="nit-testimonial">
        <div class="container">
            <div class="nit-testimonial-box">
               <h3 class="nit-heading">what our clients <br>
are saying</h3>
                <div class="nit-flex">
                    <div class="owl-carousel testimonial-carousel owl-theme">
                        <?php query_posts('post_type=client-feedback&posts_per_page=-1&order=asc'); if( have_posts() ): while( have_posts() ): the_post();?>
						<div class="item">
                           <?php the_content();?>
						   <h3 class="nit-name"><?php the_title();?></h3>
                        </div>
                       <?php endwhile; endif; wp_reset_query();?>
                    </div>
                    <div class="nit-img-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/more/testimonial-home.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nit-camera-features">
        <div class="container">
            <h3 class="nit-heading">Camera Features</h3>
            <div class="img-box"><img src="<?php the_field('camera_image');?>" alt="" class="img-fluid"></div>
            <div class="nit-content-box">
                <?php the_field('camera_features');?>
            </div>
        </div>
    </section>
 
<?php
get_footer();
