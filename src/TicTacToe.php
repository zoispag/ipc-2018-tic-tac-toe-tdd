<?php

class TicTacToe
{
	/**
	 * @var Field
	 */
	private $fields;

	public function __construct()
	{
		foreach (range(0, 8) as $i) {
			$this->fields[$i] = new Field;
		}
	}

	public function isEmpty(): bool
	{
		foreach ($this->fields as $field) {
			if (!$field->isEmpty()) {
				return false;
			}
		}

		return true;
	}

	public function placeCross($i): void
	{
		$this->fields[$i]->placeCross();
	}

	public function getField($i): Field
	{
		return $this->fields[$i];
	}
}