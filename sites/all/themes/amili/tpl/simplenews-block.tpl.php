<?php
$form = [] ;
	$form['mail']['#attributes']['placeholder'] = 'VOTRE EMAIL';
	$form['mail']['#attributes']['class'] = array('email', 'nl-email-input');
	$form['submit']['#attributes']['class'] = array('nl-button');
	$form['submit']['#value'] = 'SIGN UP';
?>
<div class="container">
	<div class="nl-container nl-lines" >
		<div class="nl-icon-container-bg" >
			<div class="nl-icon-container" >
				<span aria-hidden="true" class="icon_mail_alt main-menu-icon"></span>
			</div>
		</div>
		<div class="nl-main-container-bg" >
			<div class="nl-main-container clearfix" >
				<div class="nl-caption">NEWSLETTER</div>
				<div id="mc_embed_signup" class="nl-form-container clearfix">
					<?php print render($form); ?>
				<div id="notification_container"  ></div>
				
			</div>
		</div>
	</div>
</div> 
</div>