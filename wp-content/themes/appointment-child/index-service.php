<?php $current_options = get_option('appointment_options',theme_data_setup()); 

	if($current_options['service_section_enabled'] == 'on') {
	$service_one_title = $current_options['service_one_title'];
	$service_one_description = $current_options['service_one_description'];
	$service_two_title = $current_options['service_two_title'];
	$service_two_description = $current_options['service_two_description'];
	$service_three_title = $current_options['service_three_title'];
	$service_three_description = $current_options['service_three_description'];
	$service_four_title = $current_options['service_four_title'];
	$service_four_description = $current_options['service_four_description'];
	$service_five_title = $current_options['service_five_title'];
	$service_five_description = $current_options['service_five_description'];
	$service_six_title = $current_options['service_six_title'];
	$service_six_description = $current_options['service_six_description'];
?>
<div class="Service-section">
	<div class="container">
	
		<div class="row">
			<div class="col-md-12">
				<div class="welcome">
				<?php if($current_options['service_title']) { ?>
					<div class="section-heading-title">
						<h1><?php echo esc_html($current_options['service_title']); ?></h1>
						<?php } 
						if($current_options['service_description']) { ?>
						<p><?php echo esc_html($current_options['service_description']); ?></p>
						<?php } ?>
					</div>
					
					<div class="section-heading-title">
						<h1>Why choose us?</h1>
						<p>Bananaaaa jeje hana dul sae daa gelatooo bee do bee do bee do underweaaar jeje bappleees chasy.</p>
					</div>

					<div class="section-heading-title">
						<h1>About Us</h1>
						<p>Wiiiii jiji me want bananaaa! La bodaaa aaaaaah po kass baboiii wiiiii hahaha. Aaaaaah po kass daa hahaha hahaha bappleees gelatooo.</p>

						<p>Wiiiii jiji me want bananaaa! La bodaaa aaaaaah po kass baboiii wiiiii hahaha. Aaaaaah po kass daa hahaha hahaha bappleees gelatooo uuuhhh bee do bee do bee do para tú. Underweaaar chasy aaaaaah belloo! Jiji gelatooo me want bananaaa! Jeje jiji. </p>	
					</div>
				</div>
				<div class="section-heading-title welcome2">
					<h1>Services</h1>
					<div>
						<img src="http://foxinvestigations.co.nz/wp-content/uploads/2015/05/family24.png">
						<h3>Domestic Services</h3>
							<ul>
								<li>Infidelity &amp; Matrimonial Services</li>
								<li>Surveillance</li>
								<li>Missing Persons</li>
							</ul>
						</div>
						<div>
							<img src="http://foxinvestigations.co.nz/wp-content/uploads/2015/05/judge1.png">
							<h3>Legal Services</h3>
							<ul>
								<li>Criminal Support</li>
								<li>Civil Litigation Support</li>
								<li>Document Process Serving</li>
							</ul>
						</div>
						<div>
							<img src="http://foxinvestigations.co.nz/wp-content/uploads/2015/05/fingerprint48.png">
							<h3>Investigations</h3>
							<ul>
								<li>Skip Tracing</li>
								<li>Undercover Agents</li>
								<li>General Investigations</li>
								<li>GPS/Vehicle Tracking</li>
								<li>Computer Forensics &amp; Bug Sweeping</li>
							</ul>
					</div>
				</div>
				<!-- end of services div -->
			</div>
		</div>
		<!-- Contact content taken out here -->
	</div>
</div>
<?php } ?>
<!-- /HomePage Service Section -->
<div class="clearfix"></div>