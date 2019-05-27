<!DOCTYPE html>
<!--[if lt IE 7 ]> <html  class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html  class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html  class="ie8"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--><html lang="<?php print $language->language; ?>"> <!--<![endif]-->
<head>
  <title><?php print $head_title ?></title>
  <meta charset="utf-8">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="<?php print base_path().path_to_theme();?>/favicon.ico">
  <!-- CSS begin -->
  <?php print $styles; print $head; ?>
  <?php
  //Tracking code
  $tracking_code = theme_get_setting('general_setting_tracking_code', 'amili');
  print $tracking_code;
  //Custom css
  $custom_css = theme_get_setting('custom_css', 'amili');
  if(!empty($custom_css)){
  ?>
  <style type="text/css" media="all">
  <?php print $custom_css;?>
  </style>
  <?php }?>
  
  <!--STILE SWITCHER in style.css-->
  <!-- CSS end -->
  <!-- JS begin some js files in bottom of file-->
  <!--[if lte IE 7]><script src="<?php print base_path().path_to_theme();?>js/lte-ie7.js"></script><![endif]-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
   
</head>
<!-- <body class="<?php print $classes;?> fixed-header preloader-overflow normal-page" <?php print $attributes;?>> -->
<body class="<?php print $classes;?> fixed-header normal-page" <?php print $attributes;?>>
  <!-- Pre LOADER 
  <div id="preloader"  class="se-pre-con">
    <div class="preloader-container">
      <div id="fountainG">
        <div id="fountainG_1" class="fountainG">
        </div>
        <div id="fountainG_2" class="fountainG">
        </div>
        <div id="fountainG_3" class="fountainG">
        </div>
      </div>
      
    </div>
  </div>-->
  
  <div id="wrap" class="boxed ">
    <div  class="grey-bg "> <!-- Grey bg  -->
    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    </div>
    <!--[if lte IE 7]>
    <div id="ie-container">
      <div id="ie-cont-close">
        <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='<?php print base_path().path_to_theme();?>/images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
      </div>
      <div id="ie-cont-content" >
        <div id="ie-cont-warning">
          <img src='<?php print base_path().path_to_theme();?>/images/ie-warn/ie-warning.jpg' alt='Warning!'>
        </div>
        <div id="ie-cont-text" >
          <div id="ie-text-bold">
            You are using an outdated browser
          </div>
          <div id="ie-text">
            For a better experience using this site, please upgrade to a modern web browser.
          </div>
        </div>
        <div id="ie-cont-brows" >
          <a href='http://www.firefox.com' target='_blank'><img src='<?php print base_path().path_to_theme();?>/images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
          <a href='http://www.opera.com/download/' target='_blank'><img src='<?php print base_path().path_to_theme();?>/images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
          <a href='http://www.apple.com/safari/download/' target='_blank'><img src='<?php print base_path().path_to_theme();?>/images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
          <a href='http://www.google.com/chrome' target='_blank'><img src='<?php print base_path().path_to_theme();?>/images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
        </div>
      </div>
    </div>
    <![endif]-->
 

    <?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>
    </div><!-- End BG -->
    </div><!-- End wrap -->
   
    <?php print $scripts; ?>
    <?php 
      if(theme_get_setting('amili_disable_switch', 'amili')){
        $switcher = theme_get_setting('amili_disable_switch', 'amili');
      }else{
          $switcher = 'off';
      }
    ?>
    <?php if($switcher == 'on'){ 
         print '<div class="switcher"></div>';
       }
    ?>

    
  </body>
</html>