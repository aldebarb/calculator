<?php 
class Triangle implements Shape
{
	private $base;
	private $height;

	public function __construct($base, $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	public function calculateArea()
	{
		return ($this->base * $this->height) / 2;
	}
}
?>