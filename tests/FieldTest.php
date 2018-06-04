<?php

use PHPUnit\Framework\TestCase;

class FieldTest extends TestCase
{
	private $field;

	public function setUp()
	{
		$this->field = new Field;
	}

	public function test_it_is_initially_empty() 
	{
		$this->assertTrue($this->field->isEmpty());
	}

	public function test_it_can_be_marked_with_cross() 
	{
		$this->field->placeCross();

		$this->assertFalse($this->field->isEmpty());
		$this->assertTrue($this->field->isCrossed());
		$this->assertFalse($this->field->isCircled());
	}

	public function test_it_can_be_marked_with_circle() 
	{
		$this->field->placeCircle();

		$this->assertFalse($this->field->isEmpty());
		$this->assertTrue($this->field->isCircled());
		$this->assertFalse($this->field->isCrossed());
	}

	public function test_it_cannot_be_marked_again() 
	{
		$this->field->placeCircle();

		$this->expectException(\Exception::class);

		$this->field->placeCircle();
	}

	public function test_it_cannot_be_marked_as_cross_if_it_is_circle() 
	{
		$this->field->placeCircle();

		$this->expectException(\Exception::class);

		$this->field->placeCross();
	}

	public function test_it_cannot_be_marked_as_circle_if_it_is_cross() 
	{
		$this->field->placeCross();

		$this->expectException(\Exception::class);

		$this->field->placeCircle();
	}
}
