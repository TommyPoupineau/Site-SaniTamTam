<?php require_once(path_to_theme('theme','amili').'/tpl/header1.tpl.php'); ?>
<?php print render($page['page_t']); ?>



<?php if($page['content']):?>
	<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
	?>
	<?php print render($page['content']); ?>
<?php endif; ?>


<div class="title-lines-container">
	<div class="container">
		<div class="title-lines">
			<div class="title-block">
				Derniers contenus			</div>
			<div class="view-all-container">
				<a class="button medium r-m-plus r-m-full" href="/node/34">TOUT VOIR</a>
			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col-md-6">


		<?php print render($page['page_l']); ?>
		</div>
		<div class="col-md-6">

		<?php print render($page['page_r']); ?>
		</div>
	</div>
</div>


<?php print render($page['page']); ?>

<?php print render($page['page_b']); ?>


<?php print render($page['section']); ?>

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