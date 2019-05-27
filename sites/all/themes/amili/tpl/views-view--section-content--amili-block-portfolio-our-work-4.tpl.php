<div class="title-lines-container m-top-min-35" >

	<div class="container">

		<div class="title-lines" >

		<?php if($header)print $header; ?>

		</div>	

	</div>	

</div>	

<div class="container portfolio-filter-container">

	<div class="row m-bot-30">

		<div id="options" class="col-md-12">

			<ul id="filters" class="option-set clearfix" data-option-key="filter"> 

				<li><a href="#filter" data-option-value="*" class="selected">ALL</a></li> 

				<?php if($footer)print $footer; ?>

			</ul>

		</div>

	</div>

	

	<div class="row box-with-hover m-bot-30">

	

		<div class="filter-portfolio clearfix">

			<div id="filter-container" class="clearfix">

			<?php if($rows)print $rows; ?>

			</div>

		</div>



	</div>



</div>	