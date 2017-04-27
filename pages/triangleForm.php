<form method="post" action="">
	Enter the base: <input type="text" name="base"><br><br>
	Enter the height: <input type="text" name="heights"><br><br>
	<input type="submit" name="submit" value="Calculate the Area">
</form>

<?php 

if (isset($_POST['submit'])) {
	$base = removeMaliciousCode($_POST['base'])
	$height = removeMaliciousCode($_POST['height'])

	if (numberValidation($base) && numberValidation($height)) {
		$triangleArea = new Triangle();
		echo "The area of the triangle is: " . $trianlgeArea->calculateArea();
	}
}