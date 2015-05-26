<?php

class Database extends PDO
{
	public function __construct($host, $dbname, $usr, $pass, $char)
	{
		parent::__construct(
			'mysql:host=' . $host .
			';dbname=' . $dbname,
			$usr, 
			$pass, 
			array(
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. $char
				));
	}
}

?>