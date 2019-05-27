<div class="title-lines-container m-top-min-35 m-bot-15">
	<div class="container">
		<div class="title-lines">
			<div class="title-block">
				<?php if($header)print $header; ?>
			</div>
			<div class="view-all-container">
				<div class="customNavigation clearfix">
					<div class="carousel-va-container">
						<a class="button medium gray-lite" href="<?php print base_path(); ?>node/48">VIEW ALL</a>
					</div>
					<div class="customNavigation-container">	
						<a class="prev-portfolio"></a>
						<a class="next-portfolio"></a>
					</div>
				</div>					
			</div>
		</div>	
	</div>	
</div>	
<div class="container portfolio-container-2">
	<div class="row">
		<div class="col-md-4">
			<div class="title-block-text">
				THIS IS THE LIST OF<br>
				OUR RECENT<br>
				<strong>WORKS</strong>
			</div>
		</div>	
		<div class="col-md-8">
			<div class="row box-with-hover">
				<div class="filter-portfolio clearfix">
					<div id="owl-portfolio" class="owl-carousel portfolio-filter clearfix">
					<?php if($rows)print $rows; ?>

					</div>
				</div>
			</div>
		</div>
	
	</div>	
</div>