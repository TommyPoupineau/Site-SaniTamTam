<?php
/**
 * @file views-bootstrap-grid-plugin-style.tpl.php
 * Default simple view template to display Bootstrap Grids.
 *
 *
 * - $columns contains rows grouped by columns.
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 * - $column_type contains a number (default Bootstrap grid system column type).
 *
 * @ingroup views_templates
 */
 
 
?>

<div id="views-bootstrap-grid-<?php print $id ?>" class="<?php print $classes ?>">
  <?php if ($options['alignment'] == 'horizontal'): ?>

   <?php if($rows)print $rows; ?>

  <?php else: ?>

   <?php if($rows)print $rows; ?>

  <?php endif ?>
</div>

<div class="m-bot-80">
		<?php if($pager)print $pager; ?>
	</div>