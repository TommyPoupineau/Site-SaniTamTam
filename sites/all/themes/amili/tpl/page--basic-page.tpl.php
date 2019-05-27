<?php require_once(path_to_theme('theme','amili').'/tpl/header.tpl.php'); ?>


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
<?php print render($page['page_t']); ?>
<div class="title-lines-container"><!-- !IMPORTANT CONTAINER  FOR LINES-->	
<!-- COTENT CONTAINER -->
	<div class="container m-bot-40">
			<?php if($page['content']):?>
				<?php
						if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
							print render($tabs);
						endif;
						print $messages;
				?>
				<?php print render($page['content']); ?>
			<?php endif; ?>
			<?php print render($page['page']); ?>
	</div>
</div>
<div class="title-lines-container">
	<?php if(render($page['section'])){ ?>
		<div class="container">
			<div class="row ">
				<?php print render($page['section']); ?>
				<div class="col-md-3 m-bot-80">
					<?php print render($page['sidebar_blog']); ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>


<?php print render($page['page_b']); ?>
<?php require_once(path_to_theme('theme','amili').'/tpl/footer.tpl.php'); ?>