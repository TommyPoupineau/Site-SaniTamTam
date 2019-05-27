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

	if(isset($_GET['style']) &&($_GET['style'] == 'lgleft' || $_GET['style'] == 'lgright' || $_GET['style'] == 'lgnone' || $_GET['style'] == 'smleft' || $_GET['style'] == 'smright' || $_GET['style'] == 'smnone') ){

		$style = $_GET['style'];

	}else{

		$blog_style = theme_get_setting('style_blog','amili');

		if($blog_style){

			$style = theme_get_setting('style_blog','amili');

		}else{

			$style = 'small-none';

		}

	}

	if(isset($node->field_blog_fomat) && !empty($node->field_blog_fomat)){

		$blog_format = trim($node->field_blog_fomat['und'][0]['value']);

	}else{

		$blog_format = 'image';

	}

	$soundcloud = render($content['field_soundcloud']);

    $video_embed= render($content['field_video_embed']);

    $categories = strip_tags(render($content['field_blog_categories']),'<a>');

    $tag = render($content['field_blog_tags']);

    $summary = $node->body['und'][0]['summary'];

    $body = render($content['body'][0]['#markup']);

    $url_imageone = '';

    if(!empty($node->field_blog_image)){

        $imageone = $node->field_blog_image['und'][0]['uri'];

        $uri =$node->field_blog_image['und'][0]['uri'];

        $url_imageone = file_create_url($uri);

        $ni = count($node->field_blog_image['und']);

    }else{

        $imageone ='';

        $ni = 0;

    }

    if($node->field_video_embed){

    	$video_url = $node->field_video_embed['und'][0]['video_url'];

    }else{

    	$video_url = '';

    }

    if($node->field_video_embed){

	    $vi = $node->field_video_embed['und'][0]['thumbnail_path'];

	    $video_thumbnail_path = file_create_url($vi);

	    $video_img = theme('image_style', array('path' => $vi, 'style_name' => 'img2_90x90', 'alt'=>'image'));

	    $video_imgv2 = theme('image_style', array('path' => $vi, 'style_name' => 'img_450x260', 'alt'=>'image'));

    }else{

    	$video_thumbnail_path = '';

    	$video_img = '';

    	$video_imgv2 = '';

    }

  	$nodevisit = statistics_get($node->nid);

  	$user = user_load($node->uid);

    if($user->field_author_desc['und'][0]['value']){

    	$author_desc = $user->field_author_desc['und'][0]['value'];

    }

    if($node->picture){

        $image3 = $user->picture->uri;

        $url_picture_image = file_create_url($image3);

    }

?>

<?php if(!$page){ //listing?>

	<div class="element col-md-12 m-bot-50">

		<?php if(($style == 'smleft')or($style == 'smright')or($style == 'smnone')){ ?>

			<div class="row">

				<?php if($blog_format == 'images'){ ?>

				    <div class="col-xs-12 col-sm-6 col-md-4">

				        <div class="view view-first hovered">

				            <a href="<?php if($url_imageone){print $url_imageone;} ?>" class="lightbox">

				                <?php print theme('image_style', array('path' => $uri, 'style_name' => 'img_500x500', 'alt'=>'image'))?>

				                <div class="mask">

				                    <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>

				                </div>

				            </a>

				        </div>

				    </div>

					<div class="col-xs-12 col-sm-6 col-md-8">

					    <div class="blog-caption-container">

					        <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

					        <ul class="post-meta clearfix">

					            <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

					            <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

					            <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

					            <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

					            <li><span aria-hidden="true" class="icon_tags_alt"></span><?php if($categories){print $categories;} ?></li>

					        </ul>

					    </div>

					    <div class="blog-carousel-text-container">

					        <?php if($summary){print $summary;} ?>

					    </div>

					    <div class="blog-carousel-button-container">

					        <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

					    </div>

					</div>

				<?php }elseif($blog_format == 'image'){ ?>

					<div class="col-xs-12 col-sm-6 col-md-4">

						<?php print theme('image_style', array('path' => $uri, 'style_name' => 'img_500x500', 'alt'=>'image'))?>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-8">

					    <div class="blog-caption-container">

					        <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

					        <ul class="post-meta clearfix">

					            <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

					            <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

					            <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

					            <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

					            <li><span aria-hidden="true" class="icon_tags_alt"></span><?php if($categories){print $categories;} ?></li>

					        </ul>

					    </div>

					    <div class="blog-carousel-text-container">

					        <?php if($summary){print $summary;} ?>

					    </div>

					    <div class="blog-carousel-button-container">

					        <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

					    </div>

					</div>

				<?php }elseif($blog_format == 'sound'){ ?>

					<div class="col-xs-12 col-sm-6 col-md-4">

						<div>

							<?php if($soundcloud){print $soundcloud;} ?>

						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-8">

					    <div class="blog-caption-container">

					        <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

					        <ul class="post-meta clearfix">

					            <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

					            <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

					            <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

					            <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

					            <li><span aria-hidden="true" class="icon_tags_alt"></span><?php if($categories){print $categories;} ?></li>

					        </ul>

					    </div>

					    <div class="blog-carousel-text-container">

					        <?php if($summary){print $summary;} ?>

					    </div>

					    <div class="blog-carousel-button-container">

					        <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

					    </div>

					</div>

				<?php }elseif($blog_format == 'gallery'){ ?>

					<div class="col-xs-12 col-sm-6 col-md-4">

					    <div class="carousel-post-style1">

					        <ul class="slides popup-multi-gallery">

								<?php

								    foreach($node->field_blog_image['und'] as $key => $value){

								        $image_uri_gallery  = $node->field_blog_image['und'][$key]['uri'];

								        $url_style_gallery = theme('image_style', array('path' => $image_uri_gallery, 'style_name' => 'img_500x500', 'alt'=>'image'));

								        $url_image_gallery = file_create_url($image_uri_gallery);

								        if($key!=0){

								        	print '<li>

														<div class="view view-first hovered">

														<a href="'.$url_image_gallery.'">

														'.$url_style_gallery.'

														<div class="mask">

														<div class="zoom info">

														<span aria-hidden="true" class="icon_search">

														</span>

														</div>

														</div>

														</a>

														</div>

													</li>';

								    

								        }else{print '<li>

														<div class="view view-first hovered">

														<a href="'.$url_image_gallery.'">

														'.$url_style_gallery.'

														<div class="mask">

														<div class="zoom info">

														<span aria-hidden="true" class="icon_search">

														</span>

														</div>

														</div>

														</a>

														</div>

													</li>';

												}

								    }

								?>

					        </ul>

					    </div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-8">

					    <div class="blog-caption-container">

					        <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

					        <ul class="post-meta clearfix">

					            <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

					            <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

					            <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

					            <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

					            <li><span aria-hidden="true" class="icon_tags_alt"></span> <?php if($categories){print $categories;} ?></li>

					        </ul>

					    </div>

					    <div class="blog-carousel-text-container">

					        <?php if($summary){print $summary;} ?>

					    </div>

					    <div class="blog-carousel-button-container">

					        <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

					    </div>

					</div>

				<?php }elseif($blog_format == 'text'){ ?>



					<div class="blog-caption-container">

					    <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

					    <ul class="post-meta clearfix">

					        <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

					        <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

					        <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

					        <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

					        <li><span aria-hidden="true" class="icon_tags_alt"> </span><?php if($categories){print $categories;} ?></li>

					    </ul>

					</div>

					<div class="blog-carousel-text-container">

					    <?php if($summary){print $summary;} ?>

					</div>

					<div class="blog-carousel-button-container">

					    <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

					</div>

				<?php }elseif($blog_format == 'video'){ ?>

						<div class="col-xs-12 col-sm-6 col-md-4">

						    <div class="embed-responsive embed-responsive-16by9">

						        <?php if($video_embed){print $video_embed;} ?>

						    </div>

						</div>

						<div class="col-xs-12 col-sm-6 col-md-8">

					    <div class="blog-caption-container">

						        <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

						        <ul class="post-meta clearfix">

						            <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

						            <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

						            <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

						            <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

						            <li><span aria-hidden="true" class="icon_tags_alt"></span><?php if($categories){print $categories;} ?></li>

						        </ul>

						    </div>

						    <div class="blog-carousel-text-container">

						        <?php if($summary){print $summary;} ?>

						    </div>

						    <div class="blog-carousel-button-container">

						        <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

						    </div>

						</div>			

				<?php }else{ ?>

	                <div class="col-xs-12 col-sm-6 col-md-4">

	                    <div class="view view-first blog-hover hovered">

	                        <a class="popup-youtube" href="<?php if($video_url){print $video_url;} ?>">

	                           <?php if($video_img){print $video_img;} ?>

	                            <div class="mask">

	                                <div class="zoom info"><span aria-hidden="true" class="icon_film"></span></div>

	                            </div>

	                        </a>

	                    </div>

	                </div>

					<div class="col-xs-12 col-sm-6 col-md-8">

					    <div class="blog-caption-container">

					        <h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

					        <ul class="post-meta clearfix">

					            <li><span aria-hidden="true" class="icon_clock_alt"></span> <?php print format_date($node->created,'custom','j F Y'); ?></li>

					            <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

					            <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php print $node_url; ?>#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

					            <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

					            <li><span aria-hidden="true" class="icon_tags_alt"></span> <?php if($categories){print $categories;} ?></li>

					        </ul>

					    </div>

					    <div class="blog-carousel-text-container">

					        <?php if($summary){print $summary;} ?>

					    </div>

					    <div class="blog-carousel-button-container">

					        <a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

					    </div>

					</div>

				<?php } ?>

			</div>

		<?php }else{ ?>	

			<?php if($blog_format == 'images'){ ?>

				<div class="view view-first hovered">

				<a href="<?php if($url_imageone){print $url_imageone;} ?>" class="lightbox">

				    <img src="<?php if($url_imageone){print $url_imageone;} ?>" alt="Ipsum">

				    <div class="mask">

				        <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>

				    </div>

				</a>

				</div>

			<?php }elseif($blog_format == 'image'){ ?>

				<img src="<?php if($url_imageone){print $url_imageone;} ?>" alt="Ipsum">

			<?php }elseif($blog_format == 'sound'){ ?>

				<div>

				<?php if($soundcloud){print $soundcloud;} ?>

				</div>

			<?php }elseif($blog_format == 'gallery'){ ?>

				<div class="carousel-post-style1">

				    <ul class="slides popup-multi-gallery">

						<?php

						    foreach($node->field_blog_image['und'] as $key => $value){

						        $image_uri_gallery  = $node->field_blog_image['und'][$key]['uri'];

						        $url_image_gallery = file_create_url($image_uri_gallery);

						        if($key!=0){

						        	print '<li>

												<div class="view view-first hovered">

												<a href="'.$url_image_gallery.'">

												<img src="'.$url_image_gallery.'" alt="Ipsum">

												<div class="mask"><div class="zoom info">

												<span aria-hidden="true" class="icon_search">

												</span>

												</div>

												</div>

												</a>

												</div>

											</li>';

						        }else{print '<li>

												<div class="view view-first hovered">

												<a href="'.$url_image_gallery.'">

												<img src="'.$url_image_gallery.'" alt="Ipsum">

												<div class="mask"><div class="zoom info">

												<span aria-hidden="true" class="icon_search">

												</span>

												</div>

												</div>

												</a>

												</div>

											</li>';}

						    }

						?>

				    </ul>

				</div>

			<?php }elseif($blog_format == 'text'){ ?>



			<?php }elseif($blog_format == 'video'){ ?>

				<div class="embed-responsive embed-responsive-16by9">

				    <?php if($video_embed){print $video_embed;} ?>

				</div>

			<?php }else{ ?>

	            <div class="view view-first blog-hover hovered">

	                <a class="popup-youtube" href="<?php if($video_url){print $video_url;} ?>">

	                    <?php if($video_imgv2){print $video_imgv2;} ?>

	                    <div class="mask">

	                        <div class="zoom info"><span aria-hidden="true" class="icon_film"></span></div>

	                    </div>

	                </a>

	            </div>

			<?php } ?>

			<div class="blog-caption-container">

				<h2><a class="a-invert" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

				<ul class="post-meta clearfix">

				    <li><span aria-hidden="true" class="icon_clock_alt"></span><?php print format_date($node->created,'custom','j F Y'); ?></li>

				    <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

				    <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="blog-single.html#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

				    <li><span aria-hidden="true" class="icon_circle-slelected"></span><?php print $nodevisit['totalcount']; ?> VIEWS</li>

				    <li><span aria-hidden="true" class="icon_tags_alt"></span> </span><?php if($categories){print $categories;} ?></li>

				</ul>

			</div>

			<div class="blog-carousel-text-container">

				<?php if($summary){print $summary;} ?>

			</div>

			<div class="blog-carousel-button-container">

				<a class="button medium blog-rm" href="<?php print $node_url; ?>">READ MORE</a>

			</div>

		<?php } ?>

	</div>

<?php }else{ ?>

<?php 

	$class1='';

	$class2='';

	$class3 = '';

	if(isset($node->field_blog_sidebar) && !empty($node->field_blog_sidebar)){

		$sidebar_blog = $node->field_blog_sidebar['und'][0]['value'];

	}else{

		$sidebar_blog ='none';

	}

	if($sidebar_blog == 'right'){

		$class1 = 'left-sidebar';

		$class2 = 'title-lines-sidebar';

		$class3 = 'right-no-before';

	}else{

		$class1 = '';

		$class2 = 'title-lines-sidebar-left';

		$class3 = 'left-no-after';

	}

?>

    <div class="row box-with-hover <?php if($class3)print $class3; ?>">

        <div class="element col-md-12 m-bot-10">

			<?php if($blog_format == 'images'){ ?>

				<div class="view view-first hovered">

				<a href="<?php if($node->field_blog_image){print $url_imageone;} ?>" class="lightbox">

				    <img src="<?php if($node->field_blog_image){print $url_imageone;} ?>" alt="Ipsum">

						    <div class="mask">

				        <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>

				    </div>

				</a>

				</div>

			<?php }elseif($blog_format == 'image'){ ?>

				<img src="<?php if($url_imageone){print $url_imageone;} ?>" alt="Ipsum">

			<?php }elseif($blog_format == 'sound'){ ?>

				<div>

				<?php if($soundcloud){print $soundcloud;} ?>

				</div>

			<?php }elseif($blog_format == 'gallery'){ ?>

				<div class="carousel-post-style1">

				    <ul class="slides popup-multi-gallery">

						<?php

						    foreach($node->field_blog_image['und'] as $key => $value){

						        $image_uri_gallery  = $node->field_blog_image['und'][$key]['uri'];

						        $url_image_gallery = file_create_url($image_uri_gallery);

						        if($key!=0){

						        	print '<li>

												<div class="view view-first hovered">

												<a href="'.$url_image_gallery.'">

												<img src="'.$url_image_gallery.'" alt="Ipsum">

												<div class="mask"><div class="zoom info">

												<span aria-hidden="true" class="icon_search">

												</span>

												</div>

												</div>

												</a>

												</div>

											</li>';

						        }else{print '<li>

												<div class="view view-first hovered">

												<a href="'.$url_image_gallery.'">

												<img src="'.$url_image_gallery.'" alt="Ipsum">

												<div class="mask"><div class="zoom info">

												<span aria-hidden="true" class="icon_search">

												</span>

												</div>

												</div>

												</a>

												</div>

											</li>';}

						    }

						?>

				    </ul>

				</div>

			<?php }elseif($blog_format == 'text'){ ?>



			<?php }elseif($blog_format == 'video'){ ?>

				<div class="embed-responsive embed-responsive-16by9">

				    <?php if($video_embed){print $video_embed;} ?>

				</div>

			<?php }else{ ?>

	            <div class="view view-first blog-hover hovered">

	                <a class="popup-youtube" href="<?php if($video_url){print $video_url;} ?>">

	                    <?php if($video_imgv2){print $video_imgv2;} ?>

	                    <div class="mask">

	                        <div class="zoom info"><span aria-hidden="true" class="icon_film"></span></div>

	                    </div>

	                </a>

	            </div>

			<?php } ?>



            <div class="blog-caption-container">

                <h2 class="a-invert"><?php print $title; ?></h2>

                <ul class="post-meta clearfix">

                    <li><span aria-hidden="true" class="icon_clock_alt"></span><?php print format_date($node->created,'custom','j F Y'); ?></li>

                    <li><span aria-hidden="true" class="icon_profile"></span><?php print $name; ?></li>

                    <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="#comments"> <?php print $comment_count; ?> COMMENTS</a></li>

                    <li><span aria-hidden="true" class="icon_circle-slelected"></span> <?php  print $nodevisit['totalcount']; ?> VIEWS</li>

                    <li><span aria-hidden="true" class="icon_tags_alt"></span><?php if($categories)print $categories; ?></li>

                </ul>

            </div>

            <!-- TEXT -->

            <div class="blog-carousel-text-container">

                <?php if($body)print $body; ?>

            </div>

            <!-- TAG CLOUD -->

            <div class="tag-cloud m-top-10 m-bot-20">

                <ul class="clearfix">

                <?php if($tag)print $tag; ?>

                </ul>

            </div>

            <!-- SOCIAL SHARE -->

            <div class="social-share-container m-bot-30">

                <ul class="social-icons-ul">

                    <li>

                        <a target = "_blank" href="http://www.facebook.com/sharer.php?u=<?php print $pageURL; ?>">

                            <span aria-hidden="true" class="social_facebook main-menu-icon"></span>

                        </a>

                    </li>

                    <li>

                        <a target = "_blank" href="https://twitter.com/intent/tweet?original_referer=<?php print $pageURL; ?>&amp;text=<?php print $title; ?>&amp;tw_p=tweetbutton&amp;url=<?php print $pageURL; ?>">

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

        <!-- AUTHOR -->

        <div class="col-md-12 post-author">

            <div class="post-author-container clearfix">

                <div class="post-author-avatar">

                    <img alt="ava" src="<?php if($url_picture_image)print $url_picture_image; ?>">

                </div>

                <div class="comment-content">

                    <div class="comment-author m-bot-10">

                        <div class="comment-author-name">POSTED BY

                            <?php print $name ?>

                        </div>

                    </div>

                    <p><?php if($author_desc)print $author_desc; ?></p>



                </div>

            </div>

        </div>

		<?php if(getRelatedPosts('blog',$node->nid,$blog_format)): ?>

	        <!-- RELATED POSTS -->

	        <div class="col-md-12 m-bot-30">

	            <div class="heading-line h3-line">

	                <h3><?php print t('RELATED POSTS'); ?></h3>

	            </div>

	        </div>

	        <div class="col-md-12">

	            <div class="row m-bot-20">

	                <!-- ITEM -->

	                <?php 

	                foreach(getRelatedPosts('blog',$node->nid,$node->field_blog_fomat['und'][0]['value']) as $n){

	                	if($n->field_blog_image){

	                		$image_n = $n->field_blog_image['und'][0]['uri'];

	                		$image_m = file_create_url($image_n);

	                	}else{

	                		$image_m = '';

		                	

		                }

		                if($n->field_blog_fomat){

		                	$format_n = $n->field_blog_fomat['und'][0]['value'];

		                }else{

		                	$format_n = '';

		                }

		                if($n->field_soundcloud){

		                	$soundcloud_n = field_view_field('node', $n, 'field_soundcloud');

		               	}

		               	if($n->field_video_embed){

		               		$video = $n->field_video_embed['und'][0]['video_url'];

			                $video_path_n = $n->field_video_embed['und'][0]['thumbnail_path'];

			                $video_path_m = file_create_url($video_path_n);

			                $video_cut = theme('image_style', array('path' => $video_path_n, 'style_name' => 'img_450x260', 'alt'=>'image'));

		                }

		                if($n->nid){

		                	$path_url = url("node/" . $n->nid);

		                }

					print 	'<div class="col-xs-12 col-sm-4 col-md-4 m-bot-30">';

						if($format_n == 'images' || $format_n == 'gallery'){

							print '<div class="pos-relative">

								    <div class="view view-first hovered">

								        <a href="'.$image_m.'" class="lightbox">

								            <img src="'.$image_m.'" alt="Ipsum">

								            <div class="mask">

								                <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>

								            </div>

								        </a>

								    </div>

								</div>';

						}elseif($format_n == 'image'){

							print '<div class="pos-relative">

								    <div class="view view-first hovered">

								        <img src="'.$image_m.'" alt="Ipsum">

								    </div>

								</div>';

						}elseif($format_n == 'video' || $format_n == 'popvideo'){

							print '<div class="pos-relative">

								    <div class="view view-first blog-hover hovered">

								        <a href="'.$video.'" class="popup-youtube">

								            '.$video_cut.'

								            <div class="mask">

								                <div class="zoom info"><span aria-hidden="true" class="icon_film"></span></div>

								            </div>

								        </a>

								    </div>

								</div>';

						}elseif($format_n == 'sound'){

							if($n->field_blog_image){

							print '<div class="pos-relative">

								    <div class="view view-first hovered">

								        <img src="'.$image_m.'" alt="Ipsum">

								    </div>

								</div>';

							}else{

								print '<div></div>';

							}

						}else{

							print '<div></div>';

						}

							print '<div class="blog-related-caption-container">

								    <h2><a class="a-invert" href="'.$path_url.'">'.$n->title.'</a></h2>

								    <ul class="post-meta clearfix">

								        <li><span aria-hidden="true" class="icon_clock_alt"></span> '.format_date($node->created,'custom','j F Y').'</li>

								        <li><span aria-hidden="true" class="icon_comment_alt"></span><a href="'.$path_url.'#comments"> '.$n->comment_count.' COMMENTS</a></li>

								    </ul>

								</div>

								<div class="blog-carousel-text-container">

								    '.$n->body['und'][0]['summary'].'

								</div>

								<div class="blog-carousel-button-container">

								    <a class="button medium blog-rm" href="'.$path_url.'">READ MORE</a>

								</div>

							</div>';







	                	} 

	                	?>



	            </div>

	        </div>

		<?php endif; ?>

        <!--	COMMENTS	-->

        <div id="comments" class="col-md-12 <?php print $class1; ?>">

            <div class="<?php print $class2; ?> m-bot-30">

                <div class="title-block">

                    <?php print $comment_count; ?> COMMENTS

                </div>

            </div>

        </div>

        <?php print render($content['comments']); ?>

    </div>

<?php } ?>

