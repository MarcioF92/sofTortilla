<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

echo __DIR__;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
/*$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);*/

/*$config = new \Doctrine\DBAL\Configuration();*/

$connectionParams = array(
    'url' => 'mysql://root:overflow14@localhost/flight',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

print_r($entityManager);

?>