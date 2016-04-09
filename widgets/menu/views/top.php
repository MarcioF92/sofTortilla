<?php

if (isset($menu) && sizeof($menu) > 0) {
	foreach ($menu as $item) {
		$_item_style = '';

		if (View::getViewId() && $item['id'] == View::getViewId()) {
			$_item_style = 'active';
		}
	?> <li class="<?php echo $_item_style; ?>"><a href="<?php echo $item['link']; ?>"><?php echo $item['label']; ?></a></li>
<?php }
}

?>