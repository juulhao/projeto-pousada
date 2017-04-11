<?php

define('BASE_URL', 'http://localhost/pousadasys/');
define('ENV', 'develop');

global $config;

$config = array();

if (ENV === 'develop') {
	$config['dbname'] = 'database_name';
	$config['dbhost'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'database_name';
	$config['dbhost'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}