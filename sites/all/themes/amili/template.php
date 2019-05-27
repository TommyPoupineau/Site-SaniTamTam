<?php 
$style_box = theme_get_setting('style_box', 'amili');
  if(!empty($style_box)){
    $skin_box = '/css/layout/'.$style_box.'.css';
  }else{
    $skin_box = '/css/layout/wide.css';
  }
  $css_box = array(
    '#tag' => 'link', // The #tag is the html tag - <link />
    '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => base_path().path_to_theme().$skin_box,
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'id' => 'layout',
    'data-color' => $style_box,
    ),
    '#weight' => 2,
  );
  drupal_add_html_head($css_box, 'box');

$amili_skin = theme_get_setting('built_in_skins', 'amili');
  if(!empty($amili_skin)){
    $skin_color = '/css/colors/'.$amili_skin.'.css';
  }else{
    $skin_color = '/css/colors/yellow.css';
  }
  $css_skin = array(
    '#tag' => 'link', // The #tag is the html tag - <link />
    '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => base_path().path_to_theme().$skin_color,
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'id' => 'colorss',
    'data-skin'=>$amili_skin,
    ),
    '#weight' => 2,
  );
  drupal_add_html_head($css_skin, 'skin');
	function amili_preprocess_page(&$vars){
      unset($vars['content']['links']['statistics']['#links']['statistics_counter']);
  		if (isset($vars['node'])){
    		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  		}
      if (arg(0)=='user'){ 
        $vars['theme_hook_suggestions'][] = 'page__user';
      }
	    if(views_get_page_view()){
    		$vars['theme_hook_suggestions'][] = 'page__view';
    	}
      if(arg(0) == 'taxonomy' && arg(1) == 'term') {
        $tid = (int)arg(2);
        $term = taxonomy_term_load($tid);
        if(is_object($term)) {
            $vars['theme_hook_suggestions'][] = 'page__taxonomy__'.$term->vocabulary_machine_name;
        }
      }

      if(arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
        unset($vars['page']['content']['system_main']['term_heading']);
      }
    	drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' .base_path().path_to_theme() . '" });', 'inline');

  		if (drupal_is_front_page()) {
    		unset($vars['page']['content']['system_main']['default_message']); //will remove message "no front page content is created"
  		}
       //update start
      if (arg(0)=='search' && arg(1) && arg(2)) { // we are somewhere down in search/node/term or similar
        $vars['theme_hook_suggestions'][] = 'page__search_results';
      } 
      //update end

        //View portfolio template
	}
     function amili_preprocess_search_result(&$vars) {
      
   
        $node = $vars['result']['node'];
        if ($node->nid) { // if the result is a node we can load the teaser
          $vars['teaser'] = node_view($node, 'teaser'); 
        }
        unset($vars['content']['links']['statistics']['#links']['statistics_counter']['title']);
  }
  function amili_preprocess_node(&$vars) {
        unset($vars['content']['links']['statistics']['#links']['statistics_counter']);
          // Get a list of all the regions for this theme
          foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {
          // Get the content for each region and add it to the $region variable
            if ($blocks = block_get_blocks_by_region($region_key)) {
                $vars['region'][$region_key] = $blocks;
            }else {
                $vars['region'][$region_key] = array();
            }
          }
        
      }


  function amili_menu_tree__menu_footer_menu(&$variables){
    return '<ul class="footer-menu">' . $variables['tree'] . '</ul>';
  }
  //function getLike($nid,$uid){
  // if(isset($nid) && isset($uid)){
  //   $rs = db_query("SELECT * FROM votingapi_vote WHERE entity_type = 'node' and entity_id = :nid and uid = :uid limit 1",array(':nid'=> $nid,':uid'=>$uid))->fetchAll();
//  return $rs;
  //}else{
   // return 0;
// }

 // } 
    
  function amili_menu_tree__main_menu(&$variables){
    return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
  }
  function amili_menu_tree__menu_onepage_menu(&$variables){
    return '<ul class="nav navbar-nav" id="nav-onepage">' . $variables['tree'] . '</ul>';
  }
function amili_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    //print_r($form);
    $form['actions']['submit']['#attributes']['class'][] = 'submit-search';
    $form['actions']['submit']['#attributes']['value'][] = '';
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#default_value'] = t(''); // Set a default value for the textfield
    $form['search_block_form']['#attributes']['placeholder'] = 'SEARCH HERE...';
    $form['search_block_form']['#attributes']['class'][] = 'topline__searchfield';

    //disabled submit button
    //unset($form['actions']['submit']);
    unset($form['search_block_form']['#title']);
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
  }

}
  function amili_breadcrumb(&$variables) {
    $crumbs ='';
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
      $crumbs .= '';
      foreach($breadcrumb as $value) {

        $crumbs .= strip_tags($value,'<a>');
      }
      $crumbs .= drupal_get_title();
      return $crumbs;
    }else{
      return NULL;
    }
  }
  function amili_preprocess_html(&$variables){
    //-- Google web fonts -->  
    drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js', array('type' => 'external'));
    drupal_add_js('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array('type' => 'external')); 
    drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400', array('type' => 'external'));
    //drupal_add_js('http://maps.google.com/maps/api/js?sensor=false', array('type' => 'external'));
	drupal_add_js('http://maps.google.com/maps/api/js?key=AIzaSyCy5jKGsY2dyIqAImIG4_2hdLUskHtXybM&sensor=false&v=3', array('type' => 'external'));
    $variables['classes_array'][] = 'archive';
  }
  function amili_menu_link__main_menu(array $variables) {
      $element = $variables['element'];
      $sub_menu = '';
      //$element['#attributes']['id'][] = 'menu-' . $element['#original_link']['mlid'];
      if ($element['#below']) {
      $sub_menu = drupal_render($element['#below']);
      }
      foreach($element['#attributes']['class'] as $k => $v){
        //print $v;
        if (preg_match("/\bmegamenu-drop-items\b/i", $v)){
          $output = '<h5 class="title">'.$element['#title'].'</h5>';
          return '<li class="boder-none"><div class="box col-md-3 closed">'. $output . $sub_menu . "</div></li>\n";
        }
      }
      $output = l($element['#title'], $element['#href'], $element['#localized_options']);
      return '<li '.drupal_attributes($element['#attributes']).'>'. $output . $sub_menu . "</li>\n";

    }
  function amili_menu_link__menu_footer_menu(array $variables) {
      $element = $variables['element'];
      $sub_menu = '';
      //$element['#attributes']['id'][] = 'menu-' . $element['#original_link']['mlid'];
      if ($element['#below']) {
      $sub_menu = drupal_render($element['#below']);
      }
      $output = l($element['#title'], $element['#href'], $element['#localized_options']);
      return '<li '.drupal_attributes($element['#attributes']).'>'. $output . $sub_menu . "</li>\n";

    }
  function amili_form_comment_form_alter(&$form, &$form_state) {

      $form['your_comment']['subject'] = $form['subject'];
      unset($form['subject']);
      $form['your_comment']['subject']['#access'] = FALSE;
      
      //Comment    
      $form['actions']['submit']['#value'] = 'Envoyer le commentaire';
      $form['actions']['submit']['#attributes']['class'] = array("button medium thin-bg-dark");
      $form['actions']['preview']['#access'] = FALSE;
  //    echo '<pre>'; print_r($form['actions']);echo '</pre>';
  //    echo '<pre>'; print_r($form['your_comment']['comment_body']);echo '</pre>';
  }
  function getRelatedPosts($ntype,$nid,$b_format){
    $nids = db_query("SELECT n.nid, title FROM {node} n INNER JOIN {field_data_field_blog_fomat} field_data_field_blog_fomat ON n.nid = field_data_field_blog_fomat.entity_id WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid AND field_data_field_blog_fomat.field_blog_fomat_value = :bf ORDER BY RAND() LIMIT 3", array(':type' => $ntype, ':nid' => $nid,':bf' => $b_format))->fetchCol();
    $nodes = node_load_multiple($nids);
    //$return_string = '' ;
    return $nodes;    
  }
function amili_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
    if(arg(0) == 'node' && is_numeric(arg(1))){
    $node = node_load(arg(1));
    $ntype = node_type_get_type($node)->type;
  }else{
    $ntype = '';
  }
  if(isset($node->field_header_style) && !empty($node->field_header_style)){
    $onepage = $node->field_header_style['und'][0]['value'];
  }else{
    $onepage = 'h1';
  }
  if($ntype == 'home_page' && $onepage == 'h9'){
      if (strpos(url($element['#href']), 'nolink')) {
        $link = substr(url($element['#href']), 13);

        $output = '<a href="'.$link.'" class="nolink main-menu-title-potion">' . $element['#title'] . '</a>';
      }else{
        $output = l($element['#title'], $element['#href'], $element['#localized_options']);
      }
  }else{
    $link = substr(url($element['#href']), 13);
    $link_cs = base_path().$link;
    $output = '<a href="'.$link_cs.'" class="go-to-homepage">' . $element['#title'] . '</a>';
  }
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}