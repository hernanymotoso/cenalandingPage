<?php
require 'environment.php';
define("BASE_URL", "http://localhost/landingPage2");
global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'cena';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else{
    $config['dbname'] = 'cena';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>