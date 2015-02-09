<?php
/**
 * @file
 * Theme implementation to display email for summary.
 */
?>
<div style="width:100%;">
  <div>
	<h3>Inventory Forecast From: <?php print $time['start']; ?> To: <?php print $time['end']; ?> </h3>
  </div>
<?php print($summary);?>
</div>