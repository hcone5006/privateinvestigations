<?php $current_options = get_option('appointment_options',theme_data_setup()); 
 if($current_options['home_banner_enabled'] == 'on')  { 
?>
<!-- Slider Section -->	
<div class="homepage-mycarousel">
	<div id="carousel-example-generic" class="carousel slide <?php echo $current_options['slider_options']; ?>" data-ride="carousel" 
	<?php if($current_options['slider_transition_delay']) { ?> data-interval="<?php echo $current_options['slider_transition_delay']; } ?>" >
	<!-- Indicators -->
		<?php
			
			if($current_options['slider_radio']=='demo')
			{
			$query_args =''; 
			$slider_default_title = array('Powerful Bootstrap Theme', 'Unique Design', 'Creative Business Design', 'Unique Design', 'Designed for Any Website', 'Unique Design');
			
			?>
		
		<div class="carousel-inner" role="listbox">
		<?php for($i=1; $i<=1; $i++) {  ?>
			<div class="item <?php if($i==1) { echo "active";} ?> container" >
				<!-- <img src="http://foxinvestigations.co.nz/wp-content/themes/appointment-child/images/slide1.jpg"> -->
				<div class="slide-caption">
					<div class="slide-text-bg1 "><h2>John Doe Investigations</h2></div>
					<div class="slide-text-bg2"><span>Licensed Private Investigators</span></div>
					
				</div>
			</div>
			<?php } ?>
		</div> 
		
		<?php
			}
			else if($current_options['slider_radio']=='post')
			{
				$featured_slider_post=$current_options['featured_slider_post'];
				$featured_slider_post=explode(',',$featured_slider_post);
				//print_r($featured_slider_post); wp_die();
				$query_args =array( 'post_type' => 'post', 'post__in' =>$featured_slider_post,'ignore_sticky_posts' => 1 );
				
			}
			else
			{
			$slider_select_category=$current_options['slider_select_category'];
			$slider_select_category= substr_replace($slider_select_category, '',-1);
			//$slider_select_category=explode(',',$slider_select_category);
			//print_r($slider_select_category);
			$query_args =array( 'category_name' =>$slider_select_category ,'ignore_sticky_posts' => 1 );
			}
			$t=true;
			$the_query = new WP_Query($query_args); ?>
			
		<div class="carousel-inner" role="listbox">
			
		<?php
		//echo '<pre>';print_r($the_query); wp_die();
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
			 
		?>
		<div class="item <?php if($t==true){echo 'active';}$t=false; ?>">
			<?php $default_arg =array('class' => "img-responsive"); ?>
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('', $default_arg); ?>
			<?php endif; ?>
			
		<div class="slide-caption">
				<div class="slide-text-bg1"><h2>Licensed Private Investigators</h2></div>
				<?php echo get_the_excerpt();?>
				
		</div>
		
		</div>
		<?php } wp_reset_postdata(); }
		?> 
		</div> 
		<!-- Pagination --> 
		<?php  if($i>1){ ?>
		 
		<?php } ?>
		<!-- /Pagination -->
	</div>
</div>
<?php } ?>
<!-- /Slider Section -->