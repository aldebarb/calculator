<form method="post" action="">
Enter the loan amount: <input type="text" name="loan"><br><br>
Enter the amount of years: <input type="text" name="years"><br><br>
Enter the interest amount: <input type="text" name="interest"><br><br>
<input type="submit" name="submit" value="Calculate Payment">
</form>

<?php 

if (isset($_POST['submit'])) {
	array_map('removeMaliciousCode', $_POST);
	$loan = $_POST['loan'];
	$months = $_POST['years'] * 12;
	$interest = ($_POST['interest'] / 100) / 12;

	if (numberValidation($loan) && numberValidation($months) && numberValidation($interest)) {
		$mortgageCalculation = new Mortgage($loan, $months, $interest);
		$payment = round($mortgageCalculation->calculatePayment(), 2);
		echo "Your monthly payment will be $" . $payment;

	}
}

?>