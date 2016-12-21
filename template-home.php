<?php
/**
 * Template Name: Home Page
 */
?>

<div class="main-slider">
<?php echo do_shortcode('[rev_slider alias="naevette"]'); ?>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>   

<!-- Expert Section -->
<section class="expert padding-v-80">
	<div class="content-wrap aligncenter">
		<div class="col-md-6">
			<h1 class="text-success">Expert advice,<br>custom solutions</h1>
			<p class="primary">Our goal is to bring enterprise level technologies to smaller businesses. Covering the three pillars of business IT, data, email and applications, we look after everything required to make these happen. Software or servers, design or maintenance, local networks or off-site.</p>
			<p class="primary">Leveraging off our work with large Australian corporations, our team brings with a depth of knowledge in optimising your IT infrastructure and its budget. Our dedication to training and skill sharing ensures we are always at the forefront of technology. Combined with our passion for excellence you can rest assured that you’ll get the most efficient outcome with Naevette.</p>
		</div>
	</div>
</section>
<!-- END Expert Section -->

<!-- Business Section -->
<section class="bg-gray padding-top-40 padding-bottom-80">
	<div class="content-wrap col-xs-12">
		<!-- <div class="mobile-menu hidden-lg-up">
			<div class="mobile-icon">
		        <div class="line-1"></div>
		        <div class="line-2"></div>
		        <div class="line-3"></div>
		    </div>
			<div class="mobile-menu-selected">
				Communication &amp; Network
			</div>
			<ul class="mobile-menu-items">
				<li data-id="#communication-network">Communication &amp; Network</li>
				<li data-id="#business-data">Business Data</li>
				<li data-id="#business-software">Business Software</li>
				<li data-id="#cloud-id">Could IT</li>
			</ul>
		</div> -->
		<div class="product-menu text-center hidden-md-down">
			<button class="btn btn-static active" data-id="#communication-network">Communication &amp; Network</button>
			<button class="btn btn-static" data-id="#business-data">Business Data</button>
			<button class="btn btn-static" data-id="#business-software">Business Software</button>
			<button class="btn btn-static" data-id="#cloud-id">Could IT</button>
		</div>
		
		<div id="communication-network" class="row product-content active">
			<div class="col-md-6">
				<h2 class="text-main font-weight-bold">Build on strong footings</h2>
				<h3>Communications &amp; Networks</h3>
				<p class="margin-bottom-40">Communications and networks are the backbone of your business. Whether it be multiple offices, off-site backups or virtual applications, all these rely on a truly optimised network to deliver fast and efficient service. Make sure you have the best configuration with our planning and management services, covering the following areas:</p>
				<a href="communication-networks" class="btn btn-success">Find Out More</a>
			</div>
			<div class="icon-text-center col-md-5 offset-md-1 text-right hidden-sm-down">
				<div class="row">
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" data-wow-delay=".5s">
						<a href="communication-networks/#manage-business-network" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/communication-database.png" alt="">
							<p class="text">Managed Business Networks</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" data-wow-delay=".7s">
						<a href="communication-networks/#voip-telephony" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/communication-call.png" alt="">
							<p class="text">VOIP Telephony</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" data-wow-delay=".9s">
						<a href="communication-networks/#unified-communications" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/communication-group.png" alt="">
							<p class="text">Unified Communications</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" data-wow-delay="1.1s">
						<a href="communication-networks/#business-internet" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/communication-web.png" alt="">
							<p class="text">Business Internet</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="business-data" class="row product-content inactive">
			<div class="col-md-6">
				<h2 class="text-main font-weight-bold">Keep your most important assets safe </h2>
				<h3>Business Data</h3>
				<p class="margin-bottom-40">In the age of information, data is king. Making sure your data is available and protected is the key to maintaining a strong business. From designing a system around your requirements, to keeping it secure and all the way through to disaster recovery,when you work with Naevette you can be sure that your data is protected.</p>
				<a href="business-data" class="btn btn-success">Find Out More</a>
			</div>
			<div class="icon-text-center col-md-5 offset-md-1 text-right hidden-sm-down">
				<div class="row">
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-data" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-data-connect.png" alt="">
							<p class="text">Managed Business Data</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-data/#data-security" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-data-lock.png" alt="" style="width:60px;">
							<p class="text">Data Security</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-data/#data-storage-sharing" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-data-network.png" alt="">
							<p class="text">Data Storage &amp; Sharing</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-data/#disaster-recovery-backup" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-data-refresh.png" alt="">
							<p class="text">Disaster Recovery &amp; Backup</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="business-software" class="row product-content inactive">
			<div class="col-md-6">
				<h2 class="text-main font-weight-bold">Reduce the hassle of software implementation</h2>
				<h3>Business Software</h3>
				<p class="margin-bottom-40">Developing or purchasing new software can be a tricky business. Even off the shelf products can have unintended interactions with your existing software. That’s why we begin at the start with a full scale audit of your business applications. From here, our development team will ensure smooth transitions right through to UAT. And it doesn’t stop there, Naevette can also assist with ongoing software licensing and management to leave you free to focus on the things that matter.</p>
				<a href="business-software" class="btn btn-success">Find Out More</a>
			</div>
			<div class="icon-text-center col-md-5 offset-md-1 text-right hidden-sm-down">
				<div class="row">
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-software/#website-development" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-software-pc.png" alt="">
							<p class="text">Website Development</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-software/#software-development" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-software-code.png" alt="">
							<p class="text">Software Development</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="business-software/#software-licensing" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-software-license.png" alt="">
							<p class="text">Software Licensing Purchase &amp; Management</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="cloud-id" class="row product-content inactive">
			<div class="col-md-6">
				<h2 class="text-main font-weight-bold">Make your business truly agile</h2>
				<h3>Coud IT</h3>
				<p class="margin-bottom-40">There is no mystery to the cloud, it’s here and it will help your business grow. With it you can create a shared digital work space to encourage team collaboration when working from multiple locations. You can add and even subtract storage as required. It can even be integrated with your existing infrastructure. With Naevette, you’ll also get peace of mind that your data is securely hosted and managed in Australia under Australian data privacy laws.</p>
				<a href="cloud-it" class="btn btn-success">Find Out More</a>
			</div>
			<div class="icon-text-center col-md-5 offset-md-1 text-right hidden-sm-down">
				<div class="row">
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="cloud-it/#cloud-infrastructure" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/cloutit-cpu.png" alt="">
							<p class="text">Cloud Infrastructure</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="cloud-it/#cloud-desktop" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/cloutit-pc.png" alt="">
							<p class="text">Cloud Desktop</p>
						</a>
					</div>
					<div class="box col-md-6 text-center d-block c-pointer margin-bottom-20 wow zoomIn" >
						<a href="cloud-it/#cloud-backup" class="d-block">
							<img class="product-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/cloutit-lock.png" alt="">
							<p class="text">Cloud Backup</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Business Section -->

<!-- Pay Section -->
<section class="bg-gradient">
	<div class="bg-payment padding-top-40 padding-bottom-80">
		<div class="content-wrap aligncenter">
			<div class="row">
				<div class="right-dashed col-md-6 text-center padding-bottom-40 hidden-sm-down">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment-cirle.png" alt="" width="316px">
				</div>
				<div class="pay-text col-md-6 padding-left-40">
					<h1 class="text-white">Only pay for what<br>you need</h1>
					<p class="primary text-white">From concept to management and everything in between, we design a service around your requirements, not our products. Every business is unique, and with Naevette you’ll be treated that way, whilst receiving best-practice service from our experienced staff. We pride ourselves on thoroughly understanding your requirements and providing the back end services that enable your business to grow.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Pay Section -->

<!-- Partner Section -->
<section class="bg-partners parallax-small padding-v-40">
	<h1 class="text-white text-center">We have worked with a broad<br>range of industries including</h1>
	<div class="text-center margin-top-40 wowMobile slideInRight">
		<div class="circle">Finance</div>
		<div class="circle">Legal</div>
		<div class="circle">Medical</div>
		<div class="circle multi-text">Creative Industries</div>
		<div class="circle">Hospitality</div>
		<div class="circle">Transport</div>
		<div class="circle">Education</div>
	</div>
</section>
<!-- END Partner Section -->

<!-- Testimonials Section -->
<section class="bg-gray padding-v-40">
	<h2 class="text-center">What our clients say</h2>
	<div class="col-xs-12 text-center margin-top-80">
		<div class="owl-wrap">
	    	<div id="owl-carousel" class="owl-carousel owl-theme col-lg-6 aligncenter">
				<div class="item">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam sapien, auctor sed blandit nec, adipiscing eget elit. Duis tempor elementum quam consequat condimentum. Cumsociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."</p>
					<h6>sample</h6>
					<h6 class="label">Klaus Andrew</h6>
					<img class="margin-top-20" src="<?php echo get_template_directory_uri(); ?>/assets/images/qld-gov-logo.png" alt="qld-gov-logo" width="82px">
				</div>
				<div class="item">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam sapien, auctor sed blandit nec, adipiscing eget elit. Duis tempor elementum quam consequat condimentum. Cumsociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."</p>
					<h6>sample</h6>
					<h6 class="label">Klaus Andrew</h6>
				</div>
				<div class="item">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam sapien, auctor sed blandit nec, adipiscing eget elit. Duis tempor elementum quam consequat condimentum. Cumsociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."</p>
					<h6>sample</h6>
					<h6 class="label">Klaus Andrew</h6>
				</div>
				<div class="item">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam sapien, auctor sed blandit nec, adipiscing eget elit. Duis tempor elementum quam consequat condimentum. Cumsociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."</p>
					<h6>sample</h6>
					<h6 class="label">Klaus Andrew</h6>
				</div>
				<div class="item">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam sapien, auctor sed blandit nec, adipiscing eget elit. Duis tempor elementum quam consequat condimentum. Cumsociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."</p>
					<h6>sample</h6>
					<h6 class="label">Klaus Andrew</h6>
					<img class="margin-top-20" src="<?php echo get_template_directory_uri(); ?>/assets/images/qld-gov-logo.png" alt="qld-gov-logo" width="82px">
				</div>
				<div class="item">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam sapien, auctor sed blandit nec, adipiscing eget elit. Duis tempor elementum quam consequat condimentum. Cumsociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."</p>
					<h6>sample</h6>
					<h6 class="label">Klaus Andrew</h6>
				</div>
		    </div>
	    </div>
	    <div class="customNavigation">
			<a class="btn prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left-s.png" alt="naevette logo"></a>
			<a class="btn next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-s.png" alt="naevette logo"></a>
		</div>
	</div>
</section>
<!-- END Testimonials Section -->

<div class="hidden-sm-down">
<?php 
if ( ! wp_is_mobile() ) {
	get_template_part('templates/contact_form', 'page'); 
}
?>
</div>


