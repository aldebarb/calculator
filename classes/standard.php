<?php 
//May not need classes in this.

class Standard
{
	protected $firstNumber;
	protected $secondNumber;
	protected $finalNumber;

    public function __construct($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }
    public function add()
    {
    	return $this->finalNumber = $this->firstNumber + $this->secondNumber;
    }

    public function subtract() 
    {
    	return $this->finalNumber = $this->firstNumber - $this->secondNumber;
    }

    public function multiply() 
    {
    	return $this->finalNumber = $this->firstNumber * $this->secondNumber;
    }

    public function divide()
    {
    	return $this->finalNumber = $this->firstNumber / $this->secondNumber;
    }
}
?>