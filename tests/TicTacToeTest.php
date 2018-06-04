<?php

use PHPUnit\Framework\TestCase;

class TicTacToeTest extends TestCase
{
	public function test_it_is_empty_initially()
	{
		$game = new TicTacToe;
		$this->assertTrue($game->isEmpty());
	}

	public function test_it_can_accept_a_cross_on_field_zero() 
	{
		$game = new TicTacToe;
		$game->placeCross(0);
		$this->assertTrue($game->getField(0)->isCrossed());
	}

	public function test_it_can_accept_a_cross_on_a_field() 
	{
		$int = random_int(0, 8);

		$game = new TicTacToe;
		$game->placeCross($int);
		$this->assertTrue($game->getField($int)->isCrossed());
	}

	public function test_symbol_is_place_on_the_right_field()
	{
		$game = new TicTacToe;
		$game->placeCross(0);

		$this->assertTrue($game->getField(1)->isEmpty());
		$this->assertTrue($game->getField(2)->isEmpty());
		$this->assertTrue($game->getField(3)->isEmpty());
		$this->assertTrue($game->getField(4)->isEmpty());
		$this->assertTrue($game->getField(5)->isEmpty());
		$this->assertTrue($game->getField(6)->isEmpty());
		$this->assertTrue($game->getField(7)->isEmpty());
		$this->assertTrue($game->getField(8)->isEmpty());
	}

	public function test_field_is_not_empty_when_symbol_is_placed() 
	{
		$int = random_int(0, 8);
		
		$game = new TicTacToe;
		$game->placeCross($int);
		$this->assertFalse($game->isEmpty());
	}
}
