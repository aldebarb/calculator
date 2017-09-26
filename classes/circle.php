<?php 
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
?>