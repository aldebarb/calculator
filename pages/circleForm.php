<form method="post" action="">
	Enter the radius: <input type="text" name="radius"><br><br>
	<input type="submit" name="submit" value="Calculate the Area">
</form>

<?php 

if (isset($_POST['submit'])) {
	$radius = removeMaliciousCode($_POST['radius']);

	if (numberValidation($radius)) {
		$circleArea = new Circle($radius);
		echo "The area of your circle is: " . $circleArea->calculateArea();
	}
}
?>