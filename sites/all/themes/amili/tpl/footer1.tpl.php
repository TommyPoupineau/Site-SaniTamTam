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
				<!-- LOGO jjjjjj -->
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