<div class="container">
	<div class="title-lines m-bot-30">
		<div class="title-block">
			<?php if($header)print $header; ?>
		</div>
		<div class="view-all-container">
			<div class="customNavigation clearfix">
				<div class="carousel-va-container">
					<a class="button medium gray-lite" href="<?php print base_path(); ?>blog">VIEW ALL</a>
				</div>
				<div class="customNavigation-container">
					<a class="prev-blog"></a>
					<a class="next-blog"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row box-with-hover" >
		<div id="owl-blog" class="owl-carousel" >
			<?php if($rows)print $rows; ?>
		</div>
	</div>
</div>