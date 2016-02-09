<?php

class SiteTest extends WebTestCase
{
	/*public function testIndex()
	{
		$this->open('');
		// file_put_contents(__DIR__ . '/../screenshots/screenshot.jpg', $this->currentScreenshot());
		// $this->timeouts()->implicitWait(10000);
		// $this->waitForTextPresent('Welcome');
		
		// $this->setSleep(2);
		$this->assertTextPresent('Welcome');
		// 
		try {
	        $this->assertTrue($this->isTextPresent("You searched for \"Brakes\" (2 matches)"));
	    } catch (PHPUnit_Framework_AssertionFailedError $e) {
	        array_push($this->verificationErrors, $e->toString());
	        // $this->drivers[0]->captureEntirePageScreenshot($this->screenshotPath . DIRECTORY_SEPARATOR . rawurlencode($this->getLocation()) . '.png');
	        // file_put_contents($this->screenshotPath . DIRECTORY_SEPARATOR . rawurlencode($this->getLocation()) . '.png', $this->currentScreenshot());
	    }
	}*/

	/*public function testContact()
	{
		$this->open('?r=site/contact');
		$this->assertTextPresent('Contact Us');
		$this->assertElementPresent('name=ContactForm[name]');

		$this->type('name=ContactForm[name]','tester');
		$this->type('name=ContactForm[email]','tester@example.com');
		$this->type('name=ContactForm[subject]','test subject');
		$this->click("//input[@value='Submit']");
		$this->waitForTextPresent('Body cannot be blank.');
	}*/

	/*public function testLoginLogout()
	{
		$this->open('');
		// ensure the user is logged out
		if($this->isTextPresent('Logout'))
			$this->clickAndWait('link=Logout (demo)');

		// test login process, including validation
		$this->clickAndWait('link=Login');
		$this->assertElementPresent('name=LoginForm[username]');
		$this->type('name=LoginForm[username]','demo');
		$this->click("//input[@value='Login']");
		$this->waitForTextPresent('Password cannot be blank.');
		$this->type('name=LoginForm[password]','demo');
		$this->clickAndWait("//input[@value='Login']");
		$this->assertTextNotPresent('Password cannot be blank.');
		$this->assertTextPresent('Logout');

		// test logout process
		$this->assertTextNotPresent('Login');
		$this->clickAndWait('link=Logout (demo)');
		$this->assertTextPresent('Login');
	}*/


	/**
	 * @dataProvider invalidLoginProvider1
	 */
	/*public function testInValidLogin(array $inputs){
	    // $this->open('');
	    $this->url('/index.php?r=site/login');
	    // $this->assertTextPresent('Welcome');
	    // $this->assertTitle('My Web Application');
	    
	    // file_put_contents($this->screenshotPath.'screenshot.png',$this->currentScreenshot());
	    $this->assertEquals('My Web Application - Login', $this->title());

	    $this->byLinkText('Login')->click();
	    // $this->sleep(5);
	    $this->timeouts()->implicitWait(5000);
		$this->fillFormAndSubmit($inputs);
		// $this->sleep(5);
		// $this->timeouts()->implicitWait(5000);

		$this->assertEquals('My Web Application - Login', $this->title());
		$this->timeouts()->implicitWait(6000);

	    // $this->click($this->byLinkText('Login'));

	    // $this->click('link=Login');
	    /*$this->byCssSelector('li.alert.alert-danger');
	    // $this->assertElementPresent('name=LoginForm[username]');

	    $this->fillFormAndSubmit($inputs);

	    $this->clickAndWait("//input[@value='Login']");
		// $this->assertTextNotPresent('Password cannot be blank.');
		$this->assertTextPresent('Logout'); *******
	    // $content = $this->byTag('body')->text();
	    // $this->assertEquals('Everything is Good!', $content);
	}*/

	/**
	 * @dataProvider validLoginProvider
	 */
	public function testValidLogin(array $inputs){
	    $this->url('/');
	    $this->assertEquals('My Web Application', $this->title());
	    $this->byLinkText('Login')->click();
	    $this->assertEquals('My Web Application - Login', $this->title());

		$this->fillFormAndSubmit($inputs);
		// $this->timeouts()->implicitWait(10000);
		// $this->assertEquals('Logout (admin)', $this->body('Logout (admin)').value());
		
		$this->assertEquals('Logout (admin)', $this->byXPath('//*[@id="yw0"]/li[4]/a')->text());
		// $this->assertEquals('My Web Application', $this->title());
		file_put_contents($this->screenshotPath.'screenshot.png',$this->currentScreenshot());
	}

	public function fillFormAndSubmit(array $inputs){
	    $form = $this->byId('login-form');
	    foreach ($inputs as $input => $value) {
	        $form->byName($input)->value($value);
	    }
	    $this->byXPath('//*[@id="login-form"]/div[4]/input')->click();
	    // $form->submit();
	}

	public function validLoginProvider(){
        $inputs[] = [[
			        	'LoginForm[username]'	=> 'admin',
			            'LoginForm[password]'	=> 'admin',
			        ]];

        return $inputs;
    }
    
    public function invalidLoginProvider1(){
        $inputs[] = [[
			        	'LoginForm[username]'	=> 'demo',
			            'LoginForm[password]'	=> 'demo',
			        ]];

        return $inputs;
    }

	/*
    public function invalidLoginProvider2(){
        $inputs[] = [[
			        	'LoginForm[username]'		=> 'demo',
			            'name=LoginForm[password]'	=> '',
			        ]];

        return $inputs;
    }*/
}
