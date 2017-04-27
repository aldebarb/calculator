<?php 
interface Shape 
{
	public function calculateArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
    	$this->radius = $radius;
    }

    public function calculateArea()
    {
    	return pow($this->radius, 2) * pi();
    }
}

class Rectangle implements Shape
{
    private $length;
    private $width;

    public function __construct($length, $height)
    {
    	$this->legnth = $length;
    	$this->height = $height;
    }

    public function calculateArea()
    {
    	return $this->length * $this->height;
    }
}

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