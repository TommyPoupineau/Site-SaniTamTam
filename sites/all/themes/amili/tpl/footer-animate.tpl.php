<?php
	$footer_massages =theme_get_setting('footer_massage', 'amili');
?>
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