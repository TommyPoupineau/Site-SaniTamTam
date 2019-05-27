<?php 
	$style = '';
	$footer_style = '';
	$style = theme_get_setting('footer_style', 'amili');
	if(isset($style) && !empty($style)){
		$footer_style = theme_get_setting('footer_style', 'amili');
	}else{
		$footer_style = 'style1';
	}
	$footer_massages = theme_get_setting('footer_massage', 'amili');
?>
<?php if($footer_style == 'style1'){ ?>
	<footer>
		<!-- Google Maps -->
		<?php print render($page['map_footer']); ?>
		<!-- Google Maps / End -->
		<!-- FOOTER -->
		<div class="footer-grey-bg title-lines-container">
			<div class="container">
				<div class="row">
					<!-- LOGO 44444444 -->
					<?php print render($page['footer1_1']) ?>

					<!-- LATEST POSTS -->
					<?php print render($page['footer2_1']); ?>
					<!-- CONTACT INFO -->
					<?php print render($page['footer3_1']); ?>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT  -->
		<div class="copyright-container title-lines-container">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="footer-menu-container">
							<?php print render($page['footer_menu']); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-copyright-container">
							<div class="mask-footer-copyright-container"></div>
							<div class="footer-copyright-text">
								<?php if($footer_massages){print $footer_massages;}  ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT -->
		<p id="back-top">
			<a href="#top" title="Back to Top"><span></span></a>
		</p>
	</footer>
<?php }elseif($footer_style == 'style2'){ ?>
	<footer>
		<!-- FOOTER 2-->
		<div class="footer-white-bg title-lines-container">
			<div class="container">
				<div class="row">
					<!-- LOGO  -->
					<?php print render($page['footer1_2']); ?>
					<!-- LATEST TWEETS -->
					<?php print render($page['footer2_2']); ?>
					<!-- CONTACT INFO -->
					<?php print render($page['footer3_2']); ?>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT  -->
		<div class="copyright-container title-lines-container">
			<div class="container">
				<div class="row">
				<div class="col-md-8">
						<div class="footer-menu-container">
							<?php print render($page['footer_menu']); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-copyright-container">
							<div class="footer-copyright-text">
								<?php if($footer_massages){print $footer_massages;}  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT -->
		<p id="back-top">
			<a href="#top" title="Back to Top"><span></span></a>
		</p>
	</footer>
<?php }elseif($footer_style == 'style3'){ ?>
	<footer id="footer-demo">
		<div class="features3-bg p-top-40 p-bot-10">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<!-- BLOG-SMALL -->
							<div id="owl-blog-small" class="owl-carousel" >
								<div class="item">
									<div class="blog-small-title-container">
										<div class="blog-item-date-small">
											<div class="blog-item-date">30</div>
											<div class="blog-item-mounth">MAY</div>
										</div>
										<h4><a class="a-invert" href="blog-single.html">PELLENTESQUE NISI</a></h4>
									</div>
									<div class="blog-small-text-container">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis mauris, luctus in risus et, volutpat malesuada mi. Ut mauris lectus, malesuada nec nisl sed.
									</div>
									<div class="blog-carousel-button-container">
										<a class="button medium blog-rm" href="blog-single.html">READ MORE</a>
									</div>
								</div>
								<div class="item">
									<div class="blog-small-title-container">
										<div class="blog-item-date-small">
											<div class="blog-item-date">20</div>
											<div class="blog-item-mounth">MAY</div>
										</div>
										<h4><a class="a-invert" href="blog-single.html">MAECENAS CONSETUR</a></h4>
									</div>
									<div class="blog-small-text-container">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis mauris, luctus in risus et, volutpat malesuada mi. Ut mauris lectus, malesuada nec nisl sed.
									</div>
									<div class="blog-carousel-button-container">
										<a class="button medium blog-rm" href="blog-single.html">READ MORE</a>
									</div>
								</div>
								<div class="item">
									<div class="blog-small-title-container">
										<div class="blog-item-date-small">
											<div class="blog-item-date">25</div>
											<div class="blog-item-mounth">MAY</div>
										</div>
										<h4><a class="a-invert" href="blog-single.html">LOREM IPSUM</a></h4>
									</div>
									<div class="blog-small-text-container">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis mauris, luctus in risus et, volutpat malesuada mi. Ut mauris lectus, malesuada nec nisl sed.
									</div>
									<div class="blog-carousel-button-container">
										<a class="button medium blog-rm" href="blog-single.html">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<!-- TESTIMONIALS-SMALL -->
							<div id="owl-tls-small" class="owl-carousel" >
								<div class="item">
									<div class="tls-small">
										<div class="tls-small-text-container" >
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis mauris, luctus in risus et, volutpat malesuada mi. Quisque efficitur augue eu dapibus fermentum. Ut mauris lectus, malesuada nec nisl sed, rhoncus aliquam urna. Vivamus purus sem, dictum vel egestas sit amet, facilisis ac tortor.
										</div>
										<div class="tls-small-author-container  clearfix" >
											<div class="tls-small-img-container">
												<img src="images/content/client-1.jpg" alt="client" >
											</div>
											<div class="tls-small-author">
												<div class="tls-small-author-name">JOHN DOE</div>
												<div class="tls-small-author-role">CEO, Company</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="item">
									<div class="tls-small">
										<div class="tls-small-text-container" >
											Nulla venenatis ac orci at placerat. Vivamus quam odio, sagittis vitae dui in, faucibus euismod metus. Vivamus purus sem, dictum vel egestas sit amet, facilisis ac tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vivamus felis mauris, luctus in risus et, volutpat malesuada mi.
										</div>
										<div class="tls-small-author-container  clearfix" >
											<div class="tls-small-img-container">
												<img src="images/content/client-1.jpg" alt="client" >
											</div>
											<div class="tls-small-author">
												<div class="tls-small-author-name">JOHN DOE</div>
												<div class="tls-small-author-role">CEO, Company</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER 3-->
		<div class="footer-3-bg title-lines-container">
			<div class="container">
				<div class="row">
					<!-- LOGO  -->
					<?php print render($page['footer1_2']); ?>
					<!-- LATEST TWEETS -->
					<?php print render($page['footer2_2']); ?>
					<!-- CONTACT INFO -->
					<?php print render($page['footer3_1']); ?>
						
				</div>
			</div>
		</div>
	
		<!-- COPYRIGHT  -->
		<div class="copyright-container title-lines-container">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="footer-menu-container">
							<?php print render($page['footer_menu']); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-copyright-container">
							<div class="mask-footer-copyright-container"></div>
							<div class="footer-copyright-text">
								<?php if($footer_massages){print $footer_massages;}  ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT -->
		<p id="back-top">
			<a href="#top" title="Back to Top"><span></span></a>
		</p>
	</footer>
<?php }elseif($footer_style == 'style4'){ ?>
	<footer>
		<!-- FOOTER 3-->
			<div class="footer3-bg">
				<div class="container">
					<div class="row">
				<!-- ICON CONTAINER  -->	
					<?php print render($page['footer_icon']); ?>
					</div>
				</div>
			</div>
			<!-- COPYRIGHT  -->	
			<div class="footer3-copyright-container title-lines-container">
				<div class="container">
					<div class="row">	
						<div class="col-md-8">
							<div class="footer-menu-container">
								<?php print render($page['footer_menu']); ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-copyright-container">
								<div class="footer3-copyright-text">
								<?php if($footer_massages){print $footer_massages;}  ?>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		<!-- COPYRIGHT -->
			<p id="back-top">
				<a href="#top" title="Back to Top"><span></span></a>
			</p>
	</footer>
<?php }elseif($footer_style == 'style5'){ ?>
	<footer>
		<!-- Google Maps -->
		<?php print render($page['map_footer']); ?>
		<!-- Google Maps / End -->
		<!-- FOOTER -->
		<div class="footer-grey-bg title-lines-container">
			<div class="container">
				<div class="row">
					<!-- LOGO  -->
					<?php print render($page['footer1_3']); ?>
					<!-- LATEST POSTS -->
					<?php print render($page['footer2_1']); ?>
					<!-- CONTACT INFO -->
					<?php print render($page['footer3_3']); ?>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT  -->
		<div class="copyright-container title-lines-container">
			<div class="container">
				<div class="row">
					<div class="col-md-8 wow fadeInUp" >
						<div class="footer-menu-container">
							<nav class="clearfix" id="footer-nav">
								<ul class="footer-menu">
									<li><a href="index.html">HOME</a></li>
									<li><a href="shortcodes.html">FEATURES</a></li>
									<li><a href="portfolio.html">PORTFOLIO</a></li>
									<li><a href="blog-large-images.html">BLOG</a></li>
									<li><a href="contact.html">CONTACT</a></li>
									<li><a href="">PURCHASE</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" >
						<div class="footer-copyright-container">
							<div class="mask-footer-copyright-container"></div>
							<div class="footer-copyright-text">
								© Amili - Build with Passion by <a class="author" href="">Admin</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT -->
		<p id="back-top">
			<a href="#top" title="Back to Top"><span></span></a>
		</p>
	</footer>
<?php }?>
