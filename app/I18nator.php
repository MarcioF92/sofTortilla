<?php
require_once "/libs/i18n/i18n.class.php";

class I18nator extends i18n{

	public function __construct($langs, $folder, $fallback){
		parent::__construct($langs, $folder, $fallback);
	}

}

?>