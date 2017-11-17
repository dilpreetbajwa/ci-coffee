

	<!-- ========== Home ========== -->
	<div id="home" data-stellar-background-ratio="0.5" style="background-image: url(<?=base_url(); ?>assets/images/home.jpg)">
		<div class="text">
			<h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Welcome to the world of</h1>
			<img src="<?=base_url();?>assets/images/coffee.png" alt="image" class="img-responsive wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">
			<h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">Food & Drinks, Everyday & Everynight.</h3>
		</div>
		<a href="#about" class="bouncing-icon"><i class="fa fa-angle-double-down"></i></a> <!-- Bouncing Icon -->
	</div>
	<!-- ========== End Of Home ========== -->

	<!-- ========== About ========== -->
	<div id="about">
		<div class="heading">
			<h1>About expresso</h1>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<img src="<?=base_url();?>assets/images/about.jpg" alt="image" class="img-responsive wow fadeIn" data-wow-delay="0.4s"> <!-- Profile Image -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h3>Serving since 1997</h3>
					<p>We began in 1997 with the dream of bringing great coffee to the people of Mumbai. When we set up shop with an espresso machine up front and a roaster in the back, we hoped to some day be a part of Mumbai's rich tradition of service and culinary achievement. Everyday this aspiration drives us. We love our history while keeping our eyes on the future. We are diverse yet the same.</p>
					<p>We are commited to quality. From the coffee we source, to the precision with which it is roasted and packaged, to our constant training and pursuit of knowledge.</p>
					<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
					<div class="col-md-6 downloadmenu">
						<a href="#" class="downloadmenu-btn btn">Download Menu</a>
					</div>
					<div class="col-md-6 seegallery">
						<a href="#gallery" class="seegallery-btn btn">See Gallery</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ========== End Of About ========== -->

	<!-- ========== Services ========== -->
	<div id="service">
		<div class="service-bg">
		<?php foreach($offers as $row) {?>
			<div class="heading">
				<h1>What We Offer</h1>
				<hr>
			</div>
			<div class="container">
				<div class="row">
					<!-- First Service Item -->
					<div class="col-sm-6 col-md-4 space wow fadeIn" data-wow-delay="0.2s">
						<div class="back">
							<i class="fa fa-<?= $row->icon;?> fa-2x" aria-hidden="true"></i>
							<div class="subtitle"><?= $row->title;?></div><!-- Edit Title -->
							<p><?= $row->description;?></p> <!-- Edit description -->
						</div>
		    <?php } ?>
					</div> 
					<!-- Second Service Item -->

					<!-- Third Service Item -->

					<!-- Fourth Service Item -->

					<!-- Fifth Service Item -->
					
					<!-- Sixth Service Item -->

				</div>
			</div>
		</div>

		<!-- ========== Featured Drinks ========== -->
		<div class="heading">
			<h1>Featured Drinks</h1>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-drink wow fadeIn" data-wow-delay="0.2s">
						<div class="frame">
							<img src="<?=base_url();?>assets/images/p1.jpg" alt="image" class="img-responsive">
						</div>
						<div class="subtitle">Expresso Classic</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div> 
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-drink wow fadeIn" data-wow-delay="0.35s">
						<div class="frame">
							<img src="<?=base_url();?>assets/images/p2.jpg" alt="image" class="img-responsive">
						</div>
						<div class="subtitle">Expresso Mocha</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>     
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-drink wow fadeIn" data-wow-delay="0.5s">
						<div class="frame">
							<img src="<?=base_url();?>assets/images/p3.jpg" alt="image" class="img-responsive">
						</div>
						<div class="subtitle">Expresso Hot Chocolate</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-drink wow fadeIn" data-wow-delay="0.2s">
						<div class="frame">
							<img src="<?=base_url();?>assets/images/p1.jpg" alt="image" class="img-responsive">
						</div>
						<div class="subtitle">Expresso Classic</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div> 
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-drink wow fadeIn" data-wow-delay="0.35s">
						<div class="frame">
							<img src="<?=base_url();?>assets/images/p2.jpg" alt="image" class="img-responsive">
						</div>
						<div class="subtitle">Expresso Mocha</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>     
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-drink wow fadeIn" data-wow-delay="0.5s">
						<div class="frame">
							<img src="<?=base_url();?>assets/images/p3.jpg" alt="image" class="img-responsive">
						</div>
						<div class="subtitle">Expresso Hot Chocolate</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>         
			</div>
		</div>
		<!-- ========== End Of Featured Drinks ========== -->

		<!-- ========== Marketing ========== -->
		<div id="marketing">
			<div class="container">
				<h1>Start your day with Coffee!</h1>
				<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>-->
				<p>Expresso specializes in sourcing and roasting seasonal, stand-out coffees. What we've learned from our coffee travels we've brought back to Mumbai to offer our customers some enriching coffee wisdom as well as help you brew a consistently tasty cup every morning.</p>
			</div>
		</div>
		<!-- ========== End Of Marketing ========== -->
	</div> 
	<!-- ========== End Of Service ========== -->

	<!-- ========== Gallery ========== -->
	<div id="gallery">
		<div class="heading">
			<h1>Gallery</h1>
			<hr>
		</div>
		<ul class="gallery-list text-center">
			<li class="filter active" data-filter="all">ALL</li>
			<li class="filter" data-filter=".Coffee">COFFEE</li>
			<li class="filter" data-filter=".Pastery">PASTRY</li>
			<li class="filter" data-filter=".Softdrink">SOFT DRINK</li>
		</ul>
		<div class="container" id="parent">
			<div class="row">
				<!-- First gallery Item -->
  				<?php foreach($gallery as $row){ ?>
				<div class="col-sm-6 col-md-4 mix <?=$row->type;?>">
  					<div class="gallery-item">
  						<img style="height: 400px;" src="<?=base_url();?>assets/images/gallery/<?=$row->image;?>" alt="image" class="img-responsive"> <!-- Edit Image -->
  						<div class="overlay">
  							<div class="work-table">
  								<div class="table-cell">
  									<h3><?=$row->title;?></h3>
  									<a href="<?=base_url();?>assets/images/gallery/<?=$row->image;?>" class="gallery">zoom</a> 
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
				<?php } ?>
  				<!-- First gallery Item -->  				
			</div>
		</div>  
	</div>      
	<!-- ========== End of Gallery ========== -->

	<!-- ========== Blog ========== -->
	<div id="blog">
		<!-- ========== Review ========== -->
		<div id="review">
		
			<div class="heading">
				<h1>Reviews</h1>
				<hr>
			</div>    
			<div class="container">        
				<div id="owl-review" class="owl-carousel owl-theme"> 
					<!-- First review Item --> 
					<?php foreach($reviews as $row) {?>
					<div class="col-sm-12">
						<div class="item">
							<div class="single-review">
								<img src="<?=base_url();?>assets/images/reviews/<?=$row->image;?>" alt="" class="img-responsive img-circle">
								<div class="subtitle"><?= $row->title?></div>
								<p class="company"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Google Inc.</p>
								<p class="description"><?=$row->description;?></p> <!-- Edit  -->
							</div>	
						</div>
					</div>
		           <?php }?>
					
					
				</div>
			</div>
		</div>
		
		<!--=============== End of Review ==============-->

		<div class="heading">
			<h1>Recent Posts</h1>
			<hr>
		</div>
		<div class="container">
			<div class="row text-center">
				<!-- First Blog Item -->
				<?php foreach($blogs as $row) {?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-blog wow fadeIn" data-wow-delay="0.2s">
						<a href="/expresso/single-post.html" target="_blank"> <img src="<?=base_url();?>assets/images/blogs/<?=$row->image;?>" alt="image" class="img-responsive"></a>
						<div class="post-description"><?=$row->created?></span>
							
						</div>
						<div class="subtitle"><?=$row->title ;?></div>
						<p><?=$row->description;?></p>
						<a href="/expresso/single-post.html" target="_blank" class="blog-btn">Read More</a>
					</div>
				</div> 
				<?php } ?>
				<!-- Second Blog Item -->
				
				<!-- Third Blog Item -->   
				          
			</div>
		</div>
	</div>
	<!-- ========== End Of Blog ========== -->

	<!-- ========== Contact ========== -->
	<div id="contact">
		<div class="contact-bg">
			<div class="heading">
				<h1>Contact Us</h1>
				<hr>
			</div>
			<div class="container">
				<h3>For any Improvements, please write to us.</h3>
				<div class="row">  
					<div class="col-xs-12 col-sm-6 col-md-6">
						<form id="form" action="/expresso/php/contact.php" method="POST">              
							<input type="text" id="name" name="name" size="40" class="contact-text mb-10" placeholder="Your Name">
							<br>                
							<input type="email" name="email" size="40" class="contact-text mt-20 mb-10" placeholder="Your email address">
							<br>                
							<input type="text" name="subject" size="40" class="contact-text mt-20 mb-10" placeholder="Subject">
							<br>                             
							<textarea name="message" cols="40" rows="10" class="contact-message mt-20 mb-10" placeholder="Message"></textarea>        
							<br>
							<input type="submit" value="SEND MESSAGE" class="send-btn mt-20">               
						</form>
					</div>     
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- ========== Partners ========== -->
		<div id="client">
			<div class="heading">
				<h1>Our Partners</h1>
				<hr>
			</div>
			<div id="partners" class="owl-carousel">
				<!-- Replace following images with logos of your Partners -->
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c1.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c2.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c3.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c4.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c5.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c6.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c7.png" alt="image"></a></div>
				<div class="item"><a href="#"><img src="<?=base_url();?>assets/images/c8.png" alt="image"></a></div>  
			</div>
		</div>
		<!-- ========== End of Partners ========== -->

