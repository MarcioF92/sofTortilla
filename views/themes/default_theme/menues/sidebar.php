<?php
	foreach ($items as $item) {
	?> <li class="<?php echo $_item_style; ?>"><a href="<?php echo $item['information']; ?>"><?php echo $item['label']; ?></a></li>
<?php }

?>