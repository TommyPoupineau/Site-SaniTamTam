
	<div class="container">
		<div class="row m-bot-30">
			<div id="options" class="col-md-12">
				<ul id="filters" class="option-set clearfix" data-option-key="filter"> 
					<li><a href="#filter" data-option-value="*" class="selected">ALL</a></li> 
					<?php if($header)print $header; ?>
				</ul>
			</div>
		</div>
	</div>
		
		<div class="box-with-hover m-bot-70">
			<div class="filter-portfolio clearfix">
				<div id="filter-container-all" class="portfolio-full-width clearfix">
			<!-- PORTFOLIO ITEM 1-->
					<?php if($rows)print $rows; ?>				
				</div>
			</div>
		</div>