<?php
if (isset($items_final) && sizeof($items_final) > 0) {
	
	foreach ($items_final as $item) {
		
		$_item_style = '';


		if (isset($item[0]) && is_array($item[0])) {
			if (View::getViewId() && $item[0]['id'] == View::getViewId()) {
				$_item_style = 'active';
			}
			?>
			<li class="<?php echo $_item_style; ?> has-dropdown"><a  href="<?php echo $item[0]['enlace']; ?>"><?php echo $item[0]['titulo']; ?></a>

			<ul class="dropdown">
			<?php
				for($x = 1; $x <= count($item) - 1; $x++) {
					if (View::getViewId() && $item[$x]['id'] == View::getViewId()) {
						$_item_style = 'active';
					}
					?>
					<li><a href="<?php echo $item[$x]['enlace']; ?>"><?php echo $item[$x]['titulo']; ?></a></li>
			<?php } ?>
			</ul>
			</li>

		<?php } else { 

			if (View::getViewId() && $item['id'] == View::getViewId()) {
				$_item_style = 'active';
			}

			?>

			<li class="<?php echo $_item_style; ?>"><a  href="<?php echo $item['enlace']; ?>"><?php echo $item['titulo']; ?></a></li>
<?php 	}

	}

}

?>