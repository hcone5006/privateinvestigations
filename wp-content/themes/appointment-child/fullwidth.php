<?php
/**
Template Name: Fullwidth
*/
get_header();
get_template_part('index','banner');
?>
<div class="blog-section-lg">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
			<div class="col-md-12">
			<?php if( have_posts()) :  the_post(); ?>		
			<div class="blog-lg-area-left">
					<div class="media">						
							<div class="media-body">
							<?php if ( has_post_thumbnail()) : ?>
							<div class="blog-lg-box">
								<a class ="img-responsive" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php appointment_image_thumbnail('blog-area-full','img-responsive'); ?>
								</a>
							</div>
						<?php endif; ?> 
							
							<!-- <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
							<p> <?php the_content( __( 'Read More' , 'appointment' ) ); ?></p>
							<?php wp_link_pages( ); ?>
							<div class="blog-btn-area-lg"><a class=""></a></div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
			</div>
			<!-- /Blog Area -->	
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>