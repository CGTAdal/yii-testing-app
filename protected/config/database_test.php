<?php

// This is the database connection configuration.
return array(
	// uncomment the following lines to use a SQL-Lite database
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive_test.db',
	
	'connectionString' => 'mysql:host=localhost;dbname=testdrive_test',
	'emulatePrepare' => true,
	'username' => 'admin',
	'password' => 'admin',
	'charset' => 'utf8',
	'tablePrefix' => 'tst_'
);