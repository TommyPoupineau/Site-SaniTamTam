<?php
Global $base_url;
$flickr_id = $settings['widget_flickr_id'];
$flickr_photos_count = $settings['widget_flickr_photo_count'];
?>
<div class="title-block m-bot-30">FLICKR</div>
<ul id="nvs-flickr" class="popup-gallery clearfix m-bot-30">
	
</ul>

<script src="<?php print base_path().drupal_get_path('module', 'widget').'/js_flickr/jquery-1.11.3.min.js'; ?>"></script>
<script src="<?php print base_path().drupal_get_path('module', 'widget').'/js_flickr/jflickrfeed.js'; ?>"></script>
<script type="text/javascript">
   	jQuery('#nvs-flickr').jflickrfeed({
			limit: <?php print $flickr_photos_count; ?>,
			qstrings: {
  			id: '<?php print $flickr_id; ?>'
			},
			itemTemplate: 
		   '<li>' +
		      '<a class="lightbox" rel="colorbox" href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" width="75" height="75" /></a>' +
		   '</li>'
	});
</script>
