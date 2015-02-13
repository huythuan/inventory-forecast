<?php
//$id$
//@file
?>
<p><strong><u><em>Inventory forecast</em></u></strong><br/>
<div id="inventory_forecast">
<strong>Matched:</strong> <?php print  isset($data['matchedUnits']) ? number_format($data['matchedUnits']): NULL ;?><br>
<strong>Available:</strong> <?php print  isset($data['availableUnits']) ? number_format($data['availableUnits']) : NULL ;?><br>
<strong>Percent Available:</strong> <?php print  isset($data['percentAvailableUnits']) ?  $data['percentAvailableUnits']: 0 ;?></p>
</div>
<p><a href="/inventory-forecast-summary" target="_blank">View Summary</a></p>
