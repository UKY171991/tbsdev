<?php
/*
*
* Template Name: Blog
*
*/

?>
<?php get_header();?>

<!----------------------------slider-section-ends---------------------------------------->
<section class="nit-banner">
    <?php 
	if ( has_post_thumbnail() ) :
	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	?>
	<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" class="img-fluid">
	<?php endif; ?>
    <div class="nit-banner-content">
        <div class="container">
            <h3 class="nit-banner-title"><?php the_title();?></h3>
            <ul>
                <li><a href="<?php echo get_home_url();?>">Home</a></li>
                <li><a href="javascript:void(0)"><?php the_title();?></a></li>
            </ul>
        </div>
    </div>
</section>  
<!----------------------------about-section---------------------------------------->
 <section class="nit-blog-page nit-common-page">
        <div class="container">
            <div class="nit-blog-box">
			<div class="row">
			
			
			 <?php  query_posts('post_type=post&posts_per_page=-1&order=asc');
				if( have_posts() ){
					$i=1;
					$j=1;
					while( have_posts() ){ the_post();?>
					
					<?php
						echo $i."<br>";
						echo $j;
					if ($i == 3) { ?>
						<div class="col-md-4">
						   <div class="nit-box">
						   <?php 
							if ( has_post_thumbnail() ) :
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							?>
							<figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" class="img-fluid"></figure>
							<?php endif; ?>
								<div class="nit-content">
									<div class="nit-date"><?php echo get_the_date();?></div>
									<a href="<?php echo get_permalink();?>" class="nit-title"><?php the_title();?></a>
									<p><?php echo substr(get_the_content(),0,100);?>...</p>
									<a href="<?php echo get_permalink();?>" class="tbtn tbtn-inverse">Read More <i class="fas fa-arrow-right"></i> </a>
								</div>
							</div>
						</div>
				<?php  $i=1;  }else{ ?>
				
						<?php  if ($i == 1) { ?>
						<div class="col-md-8">
				
						
						
						   <div class="nit-box">
						   <?php 
							if ( has_post_thumbnail() ) :
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							?>
							<figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" class="img-fluid"></figure>
							<?php endif; ?>
								<div class="nit-content">
									<div class="nit-date"><?php echo get_the_date();?></div>
									<a href="<?php echo get_permalink();?>" class="nit-title"><?php the_title();?></a>
									<p><?php echo substr(get_the_content(),0,100);?>...</p>
									<a href="<?php echo get_permalink();?>" class="tbtn tbtn-inverse">Read More <i class="fas fa-arrow-right"></i> </a>
								</div>
							</div>
						<?php }
						if($i == 2){ ?>
						<div class="nit-box">
						   <?php 
							if ( has_post_thumbnail() ) :
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							?>
							<figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>" class="img-fluid"></figure>
							<?php endif; ?>
								<div class="nit-content">
									<div class="nit-date"><?php echo get_the_date();?></div>
									<a href="<?php echo get_permalink();?>" class="nit-title"><?php the_title();?></a>
									<p><?php echo substr(get_the_content(),0,100);?>...</p>
									<a href="<?php echo get_permalink();?>" class="tbtn tbtn-inverse">Read More <i class="fas fa-arrow-right"></i> </a>
								</div>
							</div>
					</div>
					<?php } ?>
					
				
				<?php } $i++; $j++; } } ?>
			
				   <div class="col-md-8">
                       <div class="nit-box">
                            <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/more/blog-1.jpg" alt="" class="img-fluid"></figure>
                            <div class="nit-content">
                                <div class="nit-date"><span>April</span> <span>15,2021</span></div>
                                <a href="https://tbsdemo.com/dev/security-camera/there-are-many-variations-of-passages-ipsum-available/" class="nit-title">There are many variations of passages Ipsum available</a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have  even slightly believable.</p>
                                <a href="https://tbsdemo.com/dev/security-camera/there-are-many-variations-of-passages-ipsum-available/" class="tbtn tbtn-inverse">Read More <i class="fas fa-arrow-right"></i> </a>
                            </div>
                        </div> 
					   <div class="nit-box">
                            <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/more/blog-1.jpg" alt="" class="img-fluid"></figure>
                            <div class="nit-content">
                                <div class="nit-date"><span>April</span> <span>15,2021</span></div>
                                <a href="https://tbsdemo.com/dev/security-camera/there-are-many-variations-of-passages-ipsum-available/" class="nit-title">There are many variations of passages Ipsum available</a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have  even slightly believable.</p>
                                <a href="https://tbsdemo.com/dev/security-camera/there-are-many-variations-of-passages-ipsum-available/" class="tbtn tbtn-inverse">Read More <i class="fas fa-arrow-right"></i> </a>
                            </div>
                        </div> 
                       
                    </div>
					
                    <div class="col-md-4">
                        <div class="nit-box">
                            <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/more/blog-2.jpg" alt="" class="img-fluid"></figure>
                            <div class="nit-content">
                                <div class="nit-date"><span>April</span> <span>15,2021</span></div>
                                <a href="https://tbsdemo.com/dev/security-camera/variations-of-passages-of-lorem-ipsum-available/" class="nit-title">There are many variations of passages Ipsum available</a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have  even slightly believable.</p>
                                <a href="https://tbsdemo.com/dev/security-camera/variations-of-passages-of-lorem-ipsum-available/" class="tbtn tbtn-inverse">Read More <i class="fas fa-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
<!----------------------------about-section-ends---------------------------------------->
<?php get_footer();?>