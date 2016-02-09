<?php
class UserTest extends PHPUnit_Framework_TestCase
{
	public $fixtures = array('users' => 'User');

	/**
	* @test
	*/
	public function testLoginForm(){
		/*$stack = array();
		$this->assertEquals(0, count($stack));
		array_push($stack, 'foo');
		$this->assertEquals('foo', $stack[count($stack)-1]);
		$this->assertEquals(1, count($stack));
		$this->assertEquals('foo', array_pop($stack));
		$this->assertEquals(0, count($stack));*/

		/*$user = new User();
		// Add new records first
        $user->add("Bob", "Hi, I'm Bob.");
        $user->add("Tom", "Hi, I'm Tom.");
        $entries = $user->viewAll();
         
        $count_is_greater_than_zero = (count($entries) > 0);
        $this->assertTrue($count_is_greater_than_zero);
        $this->assertIsA($entries, 'array');

        // $user = new User();     
        $user->deleteAll(); // Delete all the entries first so we know it's an empty table
        $entries = $user->viewAll();
        $this->assertEqual($entries, array());*/
	}
}
?>