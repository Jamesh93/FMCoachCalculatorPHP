<?php


if (isset($_POST['submit'])) 
{ 
	$determination = $_POST['determination'];
	$levelOfDiscipline = $_POST['levelOfDiscipline'];
	$motivating = $_POST['motivating'];
	$fitness = $_POST['fitness'];

} 

	//echo $levelOfDiscipline;
	//echo $determination;
	//echo $motivating;
$fitnessvalue = ($fitness * 9) + (($determination + $levelOfDiscipline + $motivating) *2);
$fitStars = "";
echo $fitnessvalue;

echo "hello";

if ($fitnessvalue < 29) {
		$fitStars = 0.5;
	} else if ($fitnessvalue >= "29" && $fitnessvalue < "59"  ) {
		$fitStars = 1;
	} else if ($fitnessvalue >= "60" && $fitnessvalue <= "89"  ) {
		$fitStars = 1.5;
	} else if ($fitnessvalue >= "90" && $fitnessvalue <= "119"  ) {
		$fitStars = 2;
	} else if ($fitnessvalue >= "120" && $fitnessvalue <= "149"  ) {
		$fitStars = 2.5;
	} else if ($fitnessvalue >= "150" && $fitnessvalue <= "179"  ) {
		$fitStars = 3;
	} else if ($fitnessvalue >= "180" && $fitnessvalue <= "209"  ) {
		$fitStars = 3.5;
	} else if ($fitnessvalue >= "210" && $fitnessvalue <= "239"  ) {
		$fitStars = 4;
	} else if ($fitnessvalue >= "240" && $fitnessvalue <= "269"  ) {
		$fitStars = 4.5;
	} else if ($fitnessvalue >= "270") {
		$fitStars = 5;
	}

?>


<html>
	<head>
		</head>
	<body>


		<form action="/FMCoachCalculator/Calculator.php" method="post">
			Determination:<input type ="text" name="determination" size="2" maxlength="2" required><br>
			Level of Discipline:<input type ="text" name="levelOfDiscipline" size="2" maxlength="2" required><br>
			Motivating:<input type ="text" name="motivating" size="2" maxlength="2" required><br>
			Fitness:<input type ="text" name="fitness" size="2" maxlength="2" required><br>
			Goalkeeping:<input type ="text" name="goalkeeping"size="2" maxlength="2"  required><br>
			Attacking:<input type ="text" name="attacking" size="2" maxlength="2" required><br>
			Defending:<input type ="text" name="defending" size="2" maxlength="2" required><br>
			Tactical:<input type ="text" name="tactical"size="2" maxlength="2"  required><br>
			Technical:<input type ="text" name="technical" size="2" maxlength="2" required><br>
			Mental:<input type ="text" name="mental"size="2" maxlength="2"  required><br>
		<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>

<?php 
	echo "Fitness: $fitStars";
	?>