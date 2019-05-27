
<table class="amili-table-account-info">
	<?php if(isset($user_profile['user_picture']) && !empty($user_profile['user_picture'])): ?>
	<tr class="tap-user-picture">
		<td><label>Picture</label></td>
		<td class="info-picture table-account-info-center"><?php print render($user_profile['user_picture']); ?></td>
	</tr>
	<?php endif; ?>
	<?php if(isset($user_profile['field_first_name']) && !empty($user_profile['field_first_name'])): ?>
	<tr>
		<td><label>First Name</label></td>

		<td class="first-name table-account-info-center"><?php print($user_profile['field_first_name']['#items'][0]['value']);?></td>
	</tr>
	<?php endif; ?>
	<tr class="tap-user-social">
		<td><label>User social</label></td>
		<td class="social-user">
			<?php if(isset($user_profile['field_author_facebook']) && !empty($user_profile['field_author_facebook'])): ?>
				<a target ="_blank" href="<?php print render($user_profile['field_link_facebook']); ?>"><i class="fa fa-facebook"></i></a>
			<?php endif; ?>

			<?php if(isset($user_profile['field_author_twitter']) && !empty($user_profile['field_author_twitter'])): ?>
					<a target ="_blank" href="<?php print render($user_profile['field_author_twitter']); ?>"><i class="fa fa-twitter"></i></a>
			<?php endif; ?>

			<?php if(isset($user_profile['field_author_linkedin']) && !empty($user_profile['field_author_linkedin'])): ?>
				<a target ="_blank" href="<?php print render($user_profile['field_author_linkedin']); ?>"><i class="fa fa-dribbble"></i></a>
			<?php endif; ?>

			<?php if(isset($user_profile['field_author_google']) && !empty($user_profile['field_author_google'])): ?>
				<a target ="_blank" href="<?php print render($user_profile['field_author_google']); ?>"><i class="fa fa-google-plus"></i></a>
			<?php endif; ?>		
			<?php if(isset($user_profile['field_author_pinterest']) && !empty($user_profile['field_author_pinterest'])): ?>
				<a target ="_blank" href="<?php print render($user_profile['field_author_pinterest']); ?>"><i class="fa fa-pinterest"></i></a>
			<?php endif; ?>	

		</td>
	</tr>

	<?php if(isset($user_profile['field_phone_number']) && !empty($user_profile['field_last_name'])): ?>
	<tr>
		<td><label>Last Name</label></td>

		<td class="last-name table-account-info-center"><?php print($user_profile['field_last_name']['#items'][0]['value']); ?></td>
	</tr>
	<?php endif; ?>


	<?php if(isset($user_profile['field_phone_number']) && !empty($user_profile['field_phone_number'])): ?>
	<tr>
		<td><label>Phone Number</label></td>
		<td class="phone-number table-account-info-center"><?php print($user_profile['field_phone_number']['#items'][0]['value']); ?></td>
	</tr>
	<?php endif; ?>

	<?php if(isset($user_profile['field_fax']) && !empty($user_profile['field_fax'])): ?>
	<tr>
		<td><label>Fax</label></td>
		<td class="info-fax table-account-info-center"><?php print($user_profile['field_fax']['#items'][0]['value']); ?></td>
	</tr>
	<?php endif; ?>
	<?php if(isset($user_profile['field_address']['#items'][0]['country']) && !empty($user_profile['field_address']['#items'][0]['country'])): ?>
	<tr>
		<td><label>Country</label></td>
		<td class="info-country table-account-info-center"><?php print($user_profile['field_address']['#items'][0]['country']); ?></td>
	</tr>
	<?php endif; ?>
	<?php if(isset($user_profile['field_address']['#items'][0]['locality']) && !empty($user_profile['field_address']['#items'][0]['locality'])): ?>
	<tr>
		<td><label>City</label></td>
		<td class="info-city table-account-info-center"><?php print($user_profile['field_address']['#items'][0]['locality']); ?></td>
	</tr>
	<?php endif; ?>
	<?php if(isset($user_profile['field_address']['#items'][0]['thoroughfare']) && !empty($user_profile['field_address']['#items'][0]['thoroughfare'])): ?>
	<tr>
		<td><label>Address 1</label></td>
		<td class="address-1 table-account-info-center"><?php print($user_profile['field_address']['#items'][0]['thoroughfare']); ?></td>
	</tr>
	<?php endif; ?>
	<?php if(isset($user_profile['field_address']['#items'][0]['premise']) && !empty($user_profile['field_address']['#items'][0]['premise'])): ?>
	<tr>
		<td><label>Address 2</label></td>
		<td class="address-2 table-account-info-center"><?php print($user_profile['field_address']['#items'][0]['premise']); ?></td>
	</tr>
	<?php endif; ?>
	<?php if(isset($user_profile['field_author_desc']) && !empty($user_profile['field_author_desc'])): ?>
	<tr>
		<td><label>Description</label></td>
		<td class="table-account-info-center"><?php print($user_profile['field_author_desc']['#items'][0]['value']); ?></td>
	</tr>
	<?php endif; ?>
</table>
<?php if($user_profile['summary']): ?>
	<?php print render($user_profile['summary']);?>
<?php endif; ?>