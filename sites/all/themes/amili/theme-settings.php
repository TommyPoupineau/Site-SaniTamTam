<?php 
	function amili_form_system_theme_settings_alter(&$form, &$form_state) {
		//$form['#submit'][] = 'amili_settings_form_submit';
		// Get all themes.
		$themes = list_themes();
		// Get the current theme
		$active_theme = $GLOBALS['theme_key'];
			$form_state['build_info']['files'][] = str_replace("/$active_theme.info", '', $themes[$active_theme]->filename) . '/theme-settings.php';
		$theme_path = drupal_get_path('theme', 'amili');
		$form['settings'] = array(
			'#type' => 'vertical_tabs',
			'#title' => t('Theme settings'),
			'#weight' => 2,
			'#collapsible' => TRUE,
			'#collapsed' => FALSE,
		    '#attached' => array(
		        'css' => array(drupal_get_path('theme', 'amili') . '/css/drupalet_base_css/admin.css'),
		        'js' => array(
		          drupal_get_path('theme', 'amili') . '/css/drupalet_admin_js/admin.js',
		        ),
		       ),
		);

		$form['settings']['header'] = array(
			'#type' => 'fieldset',
			'#title' => t('Header settings'),
			'#collapsible' => TRUE,
			'#collapsed' => FALSE,
		);

		$form['settings']['header']['header_style'] = array(
			'#type' => 'select',
			'#title' => t('STYLE'),
			'#options' => array(
			'style1' => t('Style 1'),
			'style2' => t('Style 2'),
			'style3' => t('Style 3'),
			'style4' => t('Style 4'),
			'style5' => t('Style 5'),
			'style6' => t('Style 6-Header Below'),
			'style7' => t('Style 7-Header Always Sticky'),
			'style8' => t('Style 8-Header Not Sticky'),
			),
			'#default_value' => theme_get_setting('header_style', 'amili'),
			'#description'  => t('Choose Style on your Header') 
		);
		$form['settings']['footer'] = array(
			'#type' => 'fieldset',
			'#title' => t('Footer settings'),
			'#collapsible' => TRUE,
			'#collapsed' => FALSE,
		);
		$form['settings']['footer']['footer_style'] = array(
			'#type' => 'select',
			'#title' => t('STYLE'),
			'#options' => array(
			'style1' => t('Style 1'),
			'style2' => t('Style 2'),
			'style3' => t('Style 3'),
			'style4' => t('Style 4'),
			'style5' => t('Style 5-Animate'),
			),
			'#default_value' => theme_get_setting('footer_style', 'amili'),
			'#description'  => t('Choose Style on your Footer') 
		);
		$form['settings']['footer']['footer_massage'] = array(
			'#type' => 'textarea',
			'#title' => t('Footer Configure Message'),
			'#default_value' => theme_get_setting('footer_massage', 'amili'),
		);
		$form['settings']['blog_settings'] = array(

		    '#type' => 'fieldset',		
		    '#title' => t('Blog settings'),
		    '#collapsible' => TRUE,
		    '#collapsed' => FALSE,
	 	);
		$form['settings']['blog_settings']['style_blog'] = array(
			'#type' => 'select',
			'#title' => t('Blog Style'),
			'#options' => array(
			'lgleft' => t('Blog Large Image - Left Sidebar'),
			'lgright' => t('Blog Large Image - Right Sidebar'),
			'lgnone' => t('Blog Large Image - None Sidebar'),
			'smleft' => t('Blog Small Image - Left Sidebar'),
			'smright' => t('Blog Small Image - Right Sidebar'),
			'smnone' => t('Blog Small Image - None Sidebar'),
			),
			'#default_value' => theme_get_setting('style_blog', 'amili'),
			'#description'  => t('Choose style on your blog')
		);
		$form['settings']['portfolio_settings'] = array(
		    '#type' => 'fieldset',		
		    '#title' => t('Portfolio settings'),
		    '#collapsible' => TRUE,
		    '#collapsed' => FALSE,
	 	);
		$form['settings']['portfolio_settings']['style_portfolio'] = array(
			'#type' => 'select',
			'#title' => t('Blog Style'),
			'#options' => array(
			'left' => t('Left Sidebar'),
			'right' => t('Right Sidebar'),
			'none' => t('None Sidebar'),
			),
			'#default_value' => theme_get_setting('style_portfolio', 'amili'),
			'#description'  => t('Choose style on your Portfolio')
		);
			$form['settings']['skin'] = array(
		        '#type' => 'fieldset',
		        '#title' => t('Switcher Style'),
		        '#collapsible' => TRUE,
		        '#collapsed' => FALSE,
		    );
		  //Disable Switcher style;
		  $form['settings']['skin']['amili_disable_switch'] = array(
		      '#title' => t('Switcher style'),
		      '#type' => 'select',
		      '#options' => array('on' => t('ON'), 'off' => t('OFF')),
		      '#default_value' => theme_get_setting('amili_disable_switch', 'amili'),
		  );

		$form['settings']['skin']['style_box'] = array(
			'#type' => 'select',
			'#title' => 'Chose Style',
			'#options' => array(
				'wide'=> t('Wide'),
				'boxed' => t('Box'),
				),
			'#default_value' => theme_get_setting('style_box', 'amili'),
			);
		$form['settings']['skin']['built_in_skins'] = array(
		    '#type' => 'radios',
		    '#title' => t('Choose Color Color'),
		    '#options' => array(
		        'yellow' => t('Yellow'),
		        'cyan' => t('Cyan'),
		        'blue' => t('Blue'),
		        'teal' => t('Teal'),
		        'green' => t('Green'),
		        'lime' => t('Lime'),
		        'deeporange' => t('Deeporange'),
		    ),
		    '#default_value' => theme_get_setting('built_in_skins','amili'),
		  );
	 	$form['settings']['general_setting'] = array(
		    '#type' => 'fieldset',
		    '#title' => t('General Settings'),
		    '#collapsible' => TRUE,
		    '#collapsed' => FALSE,
		);
		$form['settings']['general_setting']['general_setting_tracking_code'] = array(
		    '#type' => 'textarea',
		    '#title' => t('Tracking Code'),
		    '#default_value' => theme_get_setting('general_setting_tracking_code', 'amili'),
		);

		$form['settings']['custom_css'] = array(
			'#type' => 'fieldset',
			'#title' => t('Custom CSS'),
			'#collapsible' => TRUE,
			'#collapsed' => FALSE,
		);

		$form['settings']['custom_css']['custom_css'] = array(
			'#type' => 'textarea',
			'#title' => t('Custom CSS'),
			'#default_value' => theme_get_setting('custom_css', 'amili'),
			'#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
		);
	}

