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
	<div class="row box-with-hover">
		<div class="col-md-4">
			<div class="title-block-text">
				THIS IS THE LIST OF<br> OUR RECENT<br>
				<strong>NEWS</strong>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div id="#owl-blog" class="owl-carousel 3item">
					<!-- Item -->
					<?php if($rows)print $rows; ?>
				</div>
			</div>
		</div>
	</div>
</div>