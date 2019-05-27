<?php 
	$out ='';
	if($block->block_id){
		$id = 'id="'.$block->block_id.'"';
	}else{
		$id = '';
	} 	
	if ($block->region == 'main_menu') {
		$out .= render($title_suffix);
		$out .= $content;
	}elseif($block->region == 'onepage_menu') {
		$out .= render($title_suffix);
		$out .= $content;
	}elseif($block->region == 'search') {
		$out .= render($title_suffix);
		$out .= $content;
	}elseif($block->region == 'footer_menu') {
		$out .= '<nav '.$id.' class=" '.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		$out .= $content;
		$out .= '</nav>';
	}elseif ($block->region == 'section') {
		$out .= '<section '.$id.' class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h2>'.$block->subject.'</h2>';  
		endif;
		$out .=$content;
		$out .='</section>';
	}elseif ($block->region == 'map_footer') {
		$out .= '<div '.$id.' class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h2>'.$block->subject.'</h2>';  
		endif;
		$out .=$content;
		$out .='</div>';
	}elseif ($block->region == 'footer2_2') {
		$out .= '<div '.$id.' class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h3 class="title-block footer-2-block">'.$block->subject.'</h3>';  
		endif;
		$out .=$content;
		$out .='</div>';
	}elseif ($block->region == 'page') {
		$out .= '<div '.$id.' class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= $block->subject;  
		endif;
		$out .=$content;
		$out .='</div>';
	}elseif ($block->region == 'page_b') {
		$out .= '<div '.$id.' class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h3>'.$block->subject.'</h3>';
		endif;
		$out .=$content;
		$out .='</div>';
	}elseif($block->region == 'footer'){
		$out .= '<div  class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->title):
			$out .= '<h3 class="widget__title c-gray footer__field__title--grey">'.$block->subject.'</h3>';
		endif;
		$out .= $content;
		$out .= '</div>';
		
	}elseif($block->region == 'sidebar_blog'){
		$out .= '<div class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		$out .= $content;
		$out .= '</div>';
	}elseif($block->region == 'portfolio'){
		$out .= '<div class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h3 class="widget__title">'.$block->subject.'</h3>';
		endif;		
		$out .= $content;
		$out .= '</div>';
	}elseif($block->region == 'left_sidebar_pages'){
		$out .= '<div class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h3 class="widget__title">'.$block->subject.'</h3>';
		endif;		
		$out .= $content;
		$out .= '</div>';
	}elseif ($block->region == 'content') {
		$out .= render($content);
	}else{
		$out .= '<div '.$id.' class="ps '.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		$out .= $content;
		$out .= '</div>';
	}
	print $out;
?>