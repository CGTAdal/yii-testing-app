<?php

/**
 * Change the following URL based on your server configuration
 * Make sure the URL ends with a slash so that we can use relative URLs in test cases
 */
define('TEST_BASE_URL','http://localhost/yii-testing/index-test.php/');

/**
 * The base class for functional test cases.
 * In this class, we set the base URL for the test application.
 * We also provide some common methods to be used by concrete test classes.
 * CWebTestCase
 */
class WebTestCase extends PHPUnit_Extensions_Selenium2TestCase
{
	protected $captureScreenshotOnFailure = TRUE;
    protected $screenshotPath = '/var/www/html/yii-testing/protected/tests/screenshots/';
    protected $screenshotUrl = 'http://localhost/yii-testing/protected/tests/screenshots';

	// protected $captureScreenshotOnFailure = true;
    // protected $screenshotPath = '/var/www/html/yii-testing/protected/tests/screenshots/';
    // protected $screnshotUrl = 'http://localhost/screenshots';

	/**
	 * Sets up before each test method runs.
	 * This mainly sets the base URL for the test application.
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowserUrl(TEST_BASE_URL);
        // $this->setBrowser('phantomjs');
        $this->setBrowser('firefox');
        // $this->setBrowser('chrome');

		// $this->setBrowser('*firefox');
		// $this->setBrowser('phantomjs');
		// $this->setBrowserUrl(TEST_BASE_URL);
	}
}
