<?php
	$footer_massages =theme_get_setting('footer_massage', 'amili');
?>
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