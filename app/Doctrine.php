<?php
// Doctrine.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "/libs/doctrine/vendor/autoload.php";

class Doctrine{

	private $_em;
	private $_path;

	public function __construct(Request $petition, $db_usr, $db_pass, $db_host, $db_name){
		$module = $petition->getModule();

		if (isset($module)){
			$this->_path = ROOT . 'modules' . DS . $module . DS . 'entities' . DS;
		}

		$paths = array($this->_path);
		$isDevMode = true;

		// the connection configuration
		$dbParams = array(
		    'driver'   => 'pdo_mysql',
		    'user'     => $db_usr,
		    'password' => $db_pass,
		    'dbname'   => $db_name,
		    'host'		=> $db_host
		);

		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

		// Obtaining the entity manager
		$this->_em = EntityManager::create($dbParams, $config);

		$this->registerEntities();
	}

	public function getEm(){
		return $this->_em;
	}

	public function registerEntities(){
		if ($opendir = opendir($this->_path)){
            while (($file = readdir($opendir)) !==FALSE){
            	if($file != '.' && $file != '..' ){
                	include_once $this->_path . $file;
                }
            }
        }
	}

	public function clearCache(){
		$cacheDriver = new \Doctrine\Common\Cache\ArrayCache();
    	$deleted = $cacheDriver->deleteAll();
	}

}

?>