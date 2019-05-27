<?php require_once(path_to_theme('theme','amili').'/tpl/header.tpl.php'); ?>
<?php 
	$style = '';
	if(isset($_GET['style']) &&($_GET['style'] == 'lgleft' || $_GET['style'] == 'lgright' || $_GET['style'] == 'lgnone' || $_GET['style'] == 'smleft' || $_GET['style'] == 'smleft' || $_GET['style'] == 'smnone') ){
		$style = $_GET['style'];
	}else{
		$blog_style = theme_get_setting('style_blog','amili');
		if($blog_style){
			$style = theme_get_setting('style_blog','amili');
		}else{
			$style = 'smnone';
		}
	}
	if(($style == 'smnone') || ($style == 'lgnone')){
		$class = 'col-md-12';
	}else{
		$class = 'col-md-9';
	}

	$sidebar='';
	if(isset($node->field_blog_sidebar) && !empty($node->field_blog_sidebar)){
		$sidebar_blog = $node->field_blog_sidebar['und'][0]['value'];
	}else{
		$sidebar_blog ='none';
	}
	if($sidebar_blog == 'none' ){
		$sidebar='col-sm-12';
	}else{
		$sidebar='col-sm-9';
	}
?>


<div class="page-title-bg indent-header-1 page-main-content m-bot-40">
	<div class="container">
		<div class="page-title-container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="big-text"><?php print $title; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-title"><?php print $breadcrumb; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(arg(0) != 'node'){//listing?>
	<div class="title-lines-container">
		<div class="container">
			<div class="row m-bot-40">
				<?php if($style == 'lgleft' || $style == 'smleft'){ ?>
					<div class="col-md-3 left-sidebar">
					<?php print render($page['sidebar_blog']); ?>
					</div>
				<?php } ?>
				<div class="<?php if($class)print $class; ?>">
					<div class="row box-with-hover">
						<?php if($page['content']):?>
							<?php
									if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
										print render($tabs);
									endif;
									print $messages;
							?>
							<?php print render($page['content']); ?>
						<?php endif; ?>
						<?php print render($page['section']); ?>
					</div>
				</div>
				<?php if($style == 'lgright' || $style == 'smright'){ ?>
					<div class="col-md-3">
					<?php print render($page['sidebar_blog']); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

<?php } ?>
<?php require_once(path_to_theme('theme','amili').'/tpl/footer.tpl.php'); ?>