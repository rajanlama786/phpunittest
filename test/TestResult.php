<?php declare(strict_types=1);
require './vendor/autoload.php';
require './test.php';

class TestResult extends PHPUnit\Framework\TestCase {


	public function testDivisibleOfThree()
	{
		
		$this->assertEquals("fizz", divisible_three(3));
		$this->assertEquals("fizz", divisible_three(6));
		$this->assertEquals("fizz", divisible_three(9));
		$this->assertEquals("fizz", divisible_three(12));
		$this->assertEquals("fizz", divisible_three(15));
	}

	public function testNotDivisibleOfThree()
	{
		
		$this->assertNotEquals("fizz", divisible_three(1));
		$this->assertNotEquals("fizz", divisible_three(2));
		$this->assertNotEquals("fizz", divisible_three(4));
		$this->assertNotEquals("fizz", divisible_three(5));
		$this->assertNotEquals("fizz", divisible_three(7));
	}

		public function testDivisibleOfFive()
	{
		
		$this->assertEquals("buzz", divisible_five(5));
		$this->assertEquals("buzz", divisible_five(10));
		$this->assertEquals("buzz", divisible_five(15));
		$this->assertEquals("buzz", divisible_five(20));
		$this->assertEquals("buzz", divisible_five(25));
	}

	public function testNotDivisibleOfFive()
	{
		
		$this->assertNotEquals("buzz", divisible_five(1));
		$this->assertNotEquals("buzz", divisible_five(2));
		$this->assertNotEquals("buzz", divisible_five(4));
		$this->assertNotEquals("buzz", divisible_five(3));
		$this->assertNotEquals("buzz", divisible_five(6));
	}

}