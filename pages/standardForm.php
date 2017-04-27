
<form method="post" action="">
Enter first number: <input type="text" name="firstNumber" value=""><br><br>
Enter second number: <input type="text" name="secondNumber" value=""><br><br>
<input type="submit" name="add" value="+">
<input type="submit" name="subtract" value="-">
<input type="submit" name="multiply" value="x">
<input type="submit" name="divide" value="/"><br><br>	
</form>

<?php
$firstNumber = "";
$secondNumber = "";

if (isset($_POST['add'])) {
    $firstNumber = removeMaliciousCode($_POST['firstNumber']);
    $secondNumber = removeMaliciousCode($_POST['secondNumber']);
   
   if (numberValidation($firstNumber) && numberValidation($secondNumber)) {
    	$standardCalculation = new Standard($firstNumber, $secondNumber);
    	echo "Your answer is: " . $standardCalculation->add();
    }
}

if (isset($_POST['subtract'])) {
	$firstNumber = removeMaliciousCode($_POST['firstNumber']);
	$secondNumber = removeMaliciousCode($_POST['secondNumber']);

	if (numberValidation($firstNumber) && numberValidation($secondNumber)) {
		$standardCalculation = new Standard($firstNumber, $secondNumber);
		echo "Your answer is: " . $standardCalculation->subtract();
	}
}

if (isset($_POST['multiply'])) {
	$firstNumber = removeMaliciousCode($_POST['firstNumber']);
	$secondNumber = removeMaliciousCode($_POST['secondNumber']);

	if (numberValidation($firstNumber) && numberValidation($secondNumber)) {
		$standardCalculation = new Standard($firstNumber, $secondNumber);
		echo "Your answer is: " . $standardCalculation->multiply();
	}
}

if (isset($_POST['divide'])) {
	$firstNumber = removeMaliciousCode($_POST['firstNumber']);
	$secondNumber = removeMaliciousCode($_POST['secondNumber']);

    if (numberValidation($firstNumber) && numberValidation($secondNumber)) {
   	    $standardCalculation = new Standard($firstNumber, $secondNumber);
   	    echo "Your answer is: " . $standardCalculation->divide();
    }
}
?>