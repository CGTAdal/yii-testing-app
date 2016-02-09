<?php
// class ContactTest extends PHPUnit_Framework_TestCase // This is the ancestor class for both classes, we can use all methods inherited from this class.
class ContactTest extends CDbTestCase
{
    public $fixtures = array('contacts' => 'Contact');
    // public $fixtures = array('{{contact}}' => 'Contact');

    
    protected function setUp() {
        parent::setUp();
        fwrite(STDERR, ' setUp ');
        // $contact = $this->contacts('simple_contact_1');
        // your code....
    }

    /**
    * @test
    */
    public function testHomePage(){
        // $this->dispatch('/');
        // $this->assertController('home');
    }

    /**
    * @test
    */
    public function testLoginForm(){
        $contact = new Contact(); // New AR
        // $contact = $this->contacts('simple_contact_1'); // Single row with AR
        // $contact = $this->contacts['simple_contact_1']; // Single row
        $data = $contact->findAll();
        $count_is_greater_than_zero = (count($contact->findAll()) > 0);
        $this->assertTrue($count_is_greater_than_zero);
        
        // INSERT ONE NEW RECORD
        /* $contact->insert(array("c_name"=>"test1", "c_email"=>"test1@gmail.com", "c_subject"=>"test1 subject","c_body"=>"Hi, testing body 1."));
        $contact = new Contact(); // New AR
        $contact = new Contact(); // New AR
        $contact->unsetAttributes();
        $contact->setIsNewRecord(true);
        $contact->insert(array('attributes'=>array(
                                                  'c_name' => 'test3',
                                                  'c_email' => 'test3@gmail.com',
                                                  'c_subject' => 'test3',
                                                  'c_body' => 'test3'
                                                )));*/

        // $contact->c_id = NULL;
        $contact->c_name = 'test3';
        $contact->c_email = 'test3@gmail.com';
        $contact->c_subject = 'test3';
        $contact->c_body = 'test3';
        $contact->insert();

        
        $data = $contact->findAll();
        $this->assertEquals(count($data),3);

        /*$entries = $contact->findAll();
         
        $count_is_greater_than_zero = (count($entries) > 0);

        echo count($entries).' - '. $count_is_greater_than_zero;
        	// Add new records first
        // $contact->add("test1", "test1@gmail.com", "test1 subject","Hi, testing body 1.");
        // $contact->add("Tom", "Hi, I'm Tom.");
        $entries = $contact->findAll();
         
        $count_is_greater_than_zero = (count($entries) > 0);
        $this->assertTrue($count_is_greater_than_zero);*/

        // $this->expectOutputString('two entries');
        // fwrite(STDERR, ' Contact login form '.count($entries).' - '. $count_is_greater_than_zero);

        /*$this->assertIsA($entries, 'array');

        // $contact = new Contact();     
        $contact->deleteAll(); // Delete all the entries first so we know it's an empty table
        $entries = $contact->viewAll();
        $this->assertEqual($entries, array());*/
    }

    protected function tearDown() {
        parent::tearDown();
        fwrite(STDERR, ' tearDown ');
        // your code....
    }
}
?>