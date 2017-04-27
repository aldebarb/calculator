<?php 
class Mortgage
{
	private $loan;
	private $months;
	private $interest;
	private $payment;

    public function __construct($loan, $months, $interest)
    {
    	$this->loan = $loan;
    	$this->months = $months;
    	$this->interest = $interest;
    }

    public function calculatePayment() 
    {
        $this->payment = ($this->loan * ($this->interest * pow(1 + $this->interest, $this->months))) / (pow(1 + $this->interest, $this->months) -1);
        return $this->payment;
    }
}