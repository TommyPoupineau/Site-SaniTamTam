<!-- TABS  -->

<?php if($header)print $header; ?>
	<div class="tab-content">
		<div id="tab1" class="tab-pane tab-pop-cat-container active">
			<ul class="latest-post-container">
			<?php if($rows)print $rows;?>
			</ul>
		</div>
		<div id="tab2" class="tab-pane tab-pop-cat-container">
			<ul class="latest-post-container">
			<?php if($attachment_before)print $attachment_before;  ?>
			</ul>
		</div>
	</div>
