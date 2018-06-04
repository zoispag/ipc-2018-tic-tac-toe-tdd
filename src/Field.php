<?php

class Field
{
	private $symbol = null;

	public function isEmpty(): bool
	{
		return $this->symbol === null;
	}

	public function placeCross()
	{
		if (!$this->isEmpty()) {
			throw new \Exception('Marked fields cannot be marked again');
		}

		$this->symbol = 'x';
	}

	public function isCrossed(): bool
	{
		return $this->symbol === 'x';
	}

	public function placeCircle()
	{
		if (!$this->isEmpty()) {
			throw new \Exception('Marked fields cannot be marked again');
		}

		$this->symbol = 'o';
	}

	public function isCircled(): bool
	{
		return $this->symbol === 'o';
	}
}
