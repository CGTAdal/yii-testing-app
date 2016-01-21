<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			// uncomment the following to provide test database connection
			'db'=>require(dirname(__FILE__).'/database_test.php'),
			/*'db'=>array(
				// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive_test.db',
				'connectionString' => 'mysql:host=localhost;dbname=testdrive_test',
				'emulatePrepare' => true,
				'username' => 'admin',
				'password' => 'admin',
				'charset' => 'utf8',
				'tablePrefix' => 'tst_'
			),*/
		),
	)
);
