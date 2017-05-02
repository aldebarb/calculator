<form method="post" action="">
Enter the length: <input type="text" name="length"><br><br>
Enter the width: <input type="text" name="witdth"><br><br>
<input type="submit" name="submit" value="Calculate the Area">
</form>

<?php 

if (isset($_POST['submit'])) {
	$length = removeMalicousCode($_POST['length']);
	$width = removeMaliciousCode($_POST['width']);

	if (numberValidation($length) && numberValidation($width)) {
		$rectangleArea = new Rectangle($length, $width);
		echo "The area of the rectangle is: " . $rectangleArea->calculateArea();
	}
}