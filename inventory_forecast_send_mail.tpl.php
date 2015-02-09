<?php
/**
 * @file
 * Theme implementation to display the email for each node.
 */
?>
<div style="width:100%;">
  <div>
	<h3><?php print $summary['title']; ?></h3>
    <h3> From: <?php print $summary['start'] ; ?> To: <?php print $summary['end'] ; ?></h3>
  </div>
	<table style="width:100%">
    <tr style="background: #e4e4e4;">
      <th style ="width:30%;padding:2px 0;"><?php print t('Matched'); ?></th>
      <td style ="width:20%;padding:2px 0;"><?php print number_format($summary['matchedUnits']); ?></td>

    </tr>
    <tr style="background: #efefef;">
	  <th style ="width:20%;padding:2px 0;"><?php print t('Available'); ?></th>
      <td style ="width:20%;padding:2px 0;"><?php print number_format($summary['availableUnits']); ?></td>
    </tr>
    <tr style="background: #e4e4e4;">
      <th style ="width:20%;padding:2px 0;"><?php print t('Percent Available'); ?></th>
      <td style ="width:20%;padding:2px 0;"><?php print $summary['percentAvailableUnits']; ?></td>
    </tr>
  </table>
</div>