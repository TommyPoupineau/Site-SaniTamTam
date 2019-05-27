<?php 
	$pageURL = 'http';	
	 	if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
	 		$pageURL .= "s";
	 	}
		$pageURL .= '://';
	 	if($_SERVER['SERVER_PORT'] != '80'){
	  	$pageURL .= $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	 	}else{
	  		$pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	 	}

	if(render($content['field_portfolio_video_embed'])){
    	$video_embed= render($content['field_portfolio_video_embed']);
    }
    if(render($content['field_portfolio_categories'])){
    	$categories = strip_tags(render($content['field_portfolio_categories']),'<a>');
	}
	if(render($content['field_portfolio_tags'])){
	    $tag = render($content['field_portfolio_tags']);
	}
	if(render($content['body'][0]['#markup'])){
    	$body = render($content['body'][0]['#markup']);
    }

    $url_imageone = '';
    if(!empty($node->field_portfolio_image)){
        $imageone = $node->field_portfolio_image['und'][0]['uri'];
        $uri =$node->field_portfolio_image['und'][0]['uri'];
        $url_imageone = file_create_url($uri);
        $ni = count($node->field_portfolio_image['und']);
    }else{
        $imageone ='';
        $ni = 0;
    }
    if($node->field_portfolio_video_embed){
    	$video_url = $node->field_portfolio_video_embed['und'][0]['video_url'];
    }else{
    	$video_url = '';
    }
    if($node->field_portfolio_video_embed){
	    $vi = $node->field_portfolio_video_embed['und'][0]['thumbnail_path'];
	    $video_thumbnail_path = file_create_url($vi);
	    $video_img = theme('image_style', array('path' => $vi, 'style_name' => 'img2_90x90', 'alt'=>'image'));
	    $video_imgv2 = theme('image_style', array('path' => $vi, 'style_name' => 'img_450x260', 'alt'=>'image'));
    }else{
    	$video_thumbnail_path = '';
    	$video_img = '';
    	$video_imgv2 = '';
    }
    if(render($content['field_link_project'])){
    	$link_project = render($content['field_link_project']);
    }else{
    	$link_project ='';
    }
    if(render($content['field_client'])){
    	$client = render($content['field_client']);
    }
    if(render($content['field_skills'])){
    	$skill = render($content['field_skills']);
    }
	if(isset($node->field_portfolio_format) && !empty($node->field_portfolio_format)){
		$portfolio = trim($node->field_portfolio_format['und'][0]['value']);
	}else{
		$portfolio = 'video';
	}
	if($node->field_portfolio_style){
		$style_portfolio = $node->field_portfolio_style['und'][0]['value'];
	}else{
		$style_portfolio = 'none';
	}
	if($style_portfolio=='none'){
		$class_n ='col-md-12';
	}else{
		$class_n='col-md-9';
	}
?>

<?php if(!$page){ //listing?>
	<div class="col-md-4">
		<div class="blog-item-caption-container border-none">
			<h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
		</div>
		<?php if($portfolio == 'video'){ ?>
			<div class="embed-responsive embed-responsive-16by9">
			<?php if($video_embed)print $video_embed; ?>
			</div>
		<?php }else{ ?>
			<div class="view view-first hovered element">
				<a href="<?php if($url_imageone)print $url_imageone; ?>" class="lightbox">
					<img src="<?php if($url_imageone)print $url_imageone; ?>" alt="Ipsum" >
					<div class="mask">
						<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
					</div>
				</a>
			</div>	
		<?php } ?>
		<div class="border-bottom-2px"></div>
	</div>
<?php }else{ ?>
	<?php if($style_portfolio=='left'){ ?>
		<div class="col-md-3 left-sidebar">
			<div class="title-lines-sidebar m-bot-30">
				<div class="title-block">
					PROJECT DETAILS
				</div>
			</div>	
			<ul class="list-unstyled project-details-list m-bot-20">
				<li><b>Client:</b> <?php if($client)print $client; ?></li>
				<li><b>Skills:</b> <?php if($skill)print $skill; ?></li>
	            <li><b>Category:</b> <?php if($categories)print $categories; ?></li>
	            <li><b>Date:</b> <?php print format_date($node->created,'custom','j F Y'); ?></li>
	        </ul>
			<a class="button medium teal text-center btn-block m-bot-30" href="<?php if($link_project){print $link_project;}else{print t('#');} ?>">VISIT PROJECT </a>
			<?php print render($region['sidebar_portfolio']); ?>
		</div>
	<?php } ?>
	<div class="<?php if($class_n)print $class_n; ?> element">
		<?php if($portfolio == 'many'){ ?>
			<div class="owl-no-row pos-relative">
				<div id="owl-1-pag-auto" class="owl-carousel popup-gallery2 owl-controls-style-2 box-with-hover" >
				<!-- ITEM -->	
						<?php
						    foreach($node->field_portfolio_image['und'] as $key => $value){
						        $image_uri_gallery  = $node->field_portfolio_image['und'][$key]['uri'];
						        $url_image_gallery = file_create_url($image_uri_gallery);
						        if($key!=0){
						        	print 
											'<div class="item m-bot-0">	
											<div class="view view-first hovered">
											<a href="'.$url_image_gallery.'">
											<img src="'.$url_image_gallery.'" alt="Ipsum" >
											<div class="mask">
											<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
											</div>
											</a>
											</div></div>';
						        }else{print 
											'<div class="item m-bot-0">	
											<div class="view view-first hovered">
											<a href="'.$url_image_gallery.'">
											<img src="'.$url_image_gallery.'" alt="Ipsum" >
											<div class="mask">
											<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
											</div>
											</a>
											</div></div>';
								}
						    }
						?>
					
				</div>
				<div class="customNavigation-container">	
					<a class="prev-carousel-default"><span aria-hidden="true" class="arrow_carrot-left"></span></a>
					<a class="next-carousel-default"><span aria-hidden="true" class="arrow_carrot-right"></span></a>
				</div>
			</div>	
		<?php }elseif($portfolio == 'video'){ ?>
			<div class="embed-responsive embed-responsive-16by9">
			<?php if($video_embed)print $video_embed; ?>
			</div>
		<?php }else{ ?>
			<div class="view view-first hovered">
				<a href="<?php if($url_imageone)print $url_imageone; ?>" class="lightbox">
					<img src="<?php if($url_imageone)print $url_imageone; ?>" alt="Ipsum" >
					<div class="mask">
						<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
					</div>
				</a>
			</div>	
		<?php } ?>
		<div class="blog-item-caption-container">
			<h2><?php print $title; ?></h2>
		</div>		
		<?php if($body)print $body; ?>
		<div class="tag-cloud m-top-30 m-bot-20">
			<ul class="clearfix">
				<?php if($tag)print $tag; ?>
			</ul>
		</div>
		<div class="social-share-container m-bot-30">
            <ul class="social-icons-ul">
                <li>
                    <a target = "_blank" href="http://www.facebook.com/sharer.php?u=<?php print $pageURL; ?>">
                        <span aria-hidden="true" class="social_facebook main-menu-icon"></span>
                    </a>
                </li>
                <li>
                    <a target = "_blank" href="http://twitter.com/intent/tweet?url=%URL%&text=%TITLE%<?php print $pageURL; ?>&amp;text=<?php print $title; ?>&amp;tw_p=tweetbutton&amp;url=<?php print $pageURL; ?>">
                        <span aria-hidden="true" class="social_twitter main-menu-icon"></span>
                    </a>
                </li>
                <li>
                    <a target = "_blank" href="http://www.linkedin.com/shareArticle?url=%URL%&mini=true&title=%TITLE%&ro=false&summary=%DESC%&source=<?php print $pageURL; ?>">
                        <span aria-hidden="true" class="social_linkedin main-menu-icon"></span>
                    </a>
                </li>
                <li>
                    <a target = "_blank" href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php print $pageURL; ?>">
                        <span aria-hidden="true" class="social_googleplus main-menu-icon"></span>
                    </a>
                </li>
                <li>
                    <a target = "_blank" href="http://pinterest.com/pin/create/button/?url=<?php print $pageURL; ?>">
                        <span aria-hidden="true" class="social_pinterest main-menu-icon"></span>
                    </a>
                </li>
            </ul>
		</div>
	</div>
	<?php if($style_portfolio=='right'){ ?>
		<div class="col-md-3">
			<div class="title-lines-sidebar m-bot-30">
				<div class="title-block">
					PROJECT DETAILS
				</div>
			</div>	
			<ul class="list-unstyled project-details-list m-bot-20">
				<li><b>Client:</b> <?php if($client)print $client; ?></li>
				<li><b>Skills:</b> <?php if($skill)print $skill; ?></li>
	            <li><b>Category:</b> <?php if($categories)print $categories; ?></li>
	            <li><b>Date:</b> <?php print format_date($node->created,'custom','j F Y'); ?></li>
	        </ul>
			<a class="button medium teal text-center btn-block m-bot-30" href="<?php if($link_project){print $link_project;}else{print t('#');} ?>">VISIT PROJECT </a>
			<?php print render($region['sidebar_portfolio']); ?>
		</div>
	<?php } ?>

<?php } ?>