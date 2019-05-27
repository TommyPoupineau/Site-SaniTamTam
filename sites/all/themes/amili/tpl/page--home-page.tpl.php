<?php
	if($node->field_header_style){
		$h = $node->field_header_style['und'][0]['value'];
	}else{
		$h = 'h1';
	}
	if($node->field_footer_style){
		$f = $node ->field_footer_style['und'][0]['value'];
	}else{
		$f = 'f1';
	}
?>
<?php if($h == 'h1'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header1.tpl.php'); ?>
<?php }elseif($h == 'h2'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header2.tpl.php'); ?>
<?php }elseif($h == 'h3'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header3.tpl.php'); ?>
<?php }elseif($h == 'h4'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header4.tpl.php'); ?>
<?php }elseif($h == 'h5'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header5.tpl.php'); ?>
<?php }elseif($h == 'h7'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header-always-sticky.tpl.php'); ?>
<?php }elseif($h == 'h8'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header-not-sticky.tpl.php'); ?>
<?php }elseif($h == 'h9'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header-onepage.tpl.php'); ?>
<?php }elseif($h == 'h10'){ ?>
	<header class="header-maintenance">
		<div class="container">
		  
		  <div class="logo-row"> 
			<!-- LOGO --> 
			<div class="logo-container">
			  <a href="<?php print base_path(); ?>">
				  <div class="logo">
					  <img src="<?php if($logo){print $logo;}else{print $site_name;} ?>" class="logo-img" alt="Logo" title="<?php print $site_name; ?>">
				  </div>
			  </a>
			</div>
			
		  </div>

		</div><!-- END CONTAINER -->
	</header>
<?php } ?>



<?php print render($page['page_t']); ?>
<?php if($h == 'h6'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/header-below.tpl.php'); ?>
<?php } ?>
<?php if($page['content']):?>
	<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
	?>
	<?php print render($page['content']); ?>
<?php endif; ?>

<?php if(render($page['section'])){ ?>
	<div class="title-lines-container">
		<div class="container">
			<div class="row m-bot-40">
				<?php print render($page['section']); ?>
				<div class="col-md-3">
					<?php print render($page['sidebar_blog']); ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<?php print render($page['page']); ?>
<?php print render($page['page_b']); ?>


<?php if($f == 'f1'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/footer1.tpl.php'); ?>
<?php }elseif($f == 'f2'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/footer2.tpl.php'); ?>
<?php }elseif($f == 'f3'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/footer3.tpl.php'); ?>
<?php }elseif($f == 'f4'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/footer4.tpl.php'); ?>
<?php }elseif($f == 'f5'){ ?>
	<?php require_once(path_to_theme('theme','amili').'/tpl/footer-animate.tpl.php'); ?>
<?php } ?>



