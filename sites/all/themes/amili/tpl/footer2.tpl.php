<?php 
	$footer_massages =theme_get_setting('footer_massage', 'amili');

?>
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