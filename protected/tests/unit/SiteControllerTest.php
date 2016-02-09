<?php
// require_once('../protected/controllers/SiteController.php');

class SiteControllerTest extends PHPUnit_Framework_TestCase
{
	protected function setUp() {
        parent::setUp();
        fwrite(STDERR, ' setUp ');
        // $contact = $this->contacts('simple_contact_1');
        // your code....
    }

    /**
    * @test
    */
    public function testSiteController(){
        // $this->dispatch('/');
        // $this->assertController('home');
        
        /*$controller = new SiteController('Site','Default');
        $val = $controller->doSomeCalculation();
        $this->assertTrue($val);

        $model = new Contact();
        $val = $model->getCalculation(20);
        $this->assertTrue($val);*/

        $model = new Cart();
        $model->crt_group_id = 1;
        $model->crt_product_id = 1;
        $model->crt_quantitiy = 3;
        $model->crt_price = 200;
        $model->crt_discount = 10;

        $val = $model->getDiscountedAmount();
        $this->assertEquals(20,$val);
    }

    public function tearDown() {
        parent::tearDown();
        fwrite(STDERR, ' tearDown ');
        // your code....
    }
}