<?php
// Doctrine.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "/libs/doctrine/vendor/autoload.php";

class Doctrine{

	private $_em;

	public function __construct(Request $petition, $db_usr, $db_pass, $db_host, $db_name){
		$module = $petition->getModule();

		if (isset($module)){
			$pathModule = ROOT . 'modules' . DS . $module . DS . 'entities' . DS;
		}

		// Create a simple "default" Doctrine ORM configuration for Annotations
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration(array($pathModule), $isDevMode);

		$connectionParams = array(
		    'url' => 'mysql://$db_usr:$db_pass@$db_host/$db_name',
		);

		$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

		// Obtaining the entity manager
		$this->_em = EntityManager::create($conn, $config);
	}

	public function getEm(){
		return $this->_em;
	}

}

?>