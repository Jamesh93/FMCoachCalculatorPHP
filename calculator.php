<?php


if (isset($_POST['submit'])) 
{ 
	$determination = $_POST['determination'];
	$levelOfDiscipline = $_POST['levelOfDiscipline'];
	$motivating = $_POST['motivating'];
	$fitness = $_POST['fitness'];
	$goalkeeping = $_POST['goalkeeping'];
	$tactical = $_POST['tactical'];
	$technical = $_POST['technical'];
	$mental = $_POST['mental'];
	$attacking = $_POST['attacking'];
	$defending = $_POST['defending'];

} 

	//echo $levelOfDiscipline;
	//echo $determination;
	//echo $motivating;
$fitnessvalue = ($fitness * 9) + (($determination + $levelOfDiscipline + $motivating) *2);
$keepingvalue = ($goalkeeping * 8) + ($tactical * 3) + (($determination + $levelOfDiscipline + $motivating) * 2);
$attackingvalue = ($attacking * 6) + ($tactical * 3) + (($determination + $levelOfDiscipline + $motivating)*2);


$fitStars = "";
echo $fitnessvalue;
echo $keepingvalue;

echo "hello";
	$fitStars = "";
	if ($fitnessvalue < 29) {
		$fitStars = 0.5;
	} else if ($fitnessvalue >= 29 && $fitnessvalue < 59  ) {
		$fitStars = 1;
	} else if ($fitnessvalue >= 60 && $fitnessvalue <= 89  ) {
		$fitStars = 1.5;
	} else if ($fitnessvalue >= 90 && $fitnessvalue <= 119  ) {
		$fitStars = 2;
	} else if ($fitnessvalue >= 120 && $fitnessvalue <= 149  ) {
		$fitStars = 2.5;
	} else if ($fitnessvalue >= 150 && $fitnessvalue <= 179  ) {
		$fitStars = 3;
	} else if ($fitnessvalue >= 180 && $fitnessvalue <= 209  ) {
		$fitStars = 3.5;
	} else if ($fitnessvalue >= 210 && $fitnessvalue <= 239  ) {
		$fitStars = 4;
	} else if ($fitnessvalue >= 240 && $fitnessvalue <= 269 ) {
		$fitStars = 4.5;
	} else if ($fitnessvalue >= 270) {
		$fitStars = 5;
	}
	
	$keepStars = "";
	if ($keepingvalue < 39) {
		$keepStars = 0.5;
	} else if ($keepingvalue >= 40 && $keepingvalue < 79  ) {
		$keepStars = 1;
	} else if ($keepingvalue >= 80 && $keepingvalue <= 119  ) {
		$keepStars = 1.5;
	} else if ($keepingvalue >= 120 && $keepingvalue <= 159  ) {
		$keepStars = 2;
	} else if ($keepingvalue >= 160 && $keepingvalue <= 199  ) {
		$keepStars = 2.5;
	} else if ($keepingvalue >= 200 && $keepingvalue <= 239  ) {
		$keepStars = 3;
	} else if ($keepingvalue >= 240 && $keepingvalue <= 279  ) {
		$keepStars = 3.5;
	} else if ($keepingvalue >= 280 && $keepingvalue <= 319  ) {
		$keepStars = 4;
	} else if ($keepingvalue >= 320 && $keepingvalue <= 339  ) {
		$keepStars = 4.5;
	} else if ($keepingvalue >= 340) {
		$keepStars = 5;
	}

	$attackStars = "";
	if ($attackingvalue < 29) {
		$attackStars = 0.5;
	} else if ($attackingvalue >= 30 && $attackingvalue < 59  ) {
		$attackStars = 1;
	} else if ($attackingvalue >= 60 && $attackingvalue <= 89  ) {
		$attackStars = 1.5;
	} else if ($attackingvalue >= 90 && $attackingvalue <= 119  ) {
		$attackStars = 2;
	} else if ($attackingvalue >= 120 && $attackingvalue <= 149  ) {
		$attackStars = 2.5;
	} else if ($attackingvalue >= 150 && $attackingvalue <= 179  ) {
		$attackStars = 3;
	} else if ($attackingvalue >= 180 && $attackingvalue <= 209  ) {
		$attackStars = 3.5;
	} else if ($attackingvalue >= 210 && $attackingvalue <= 239 ) {
		$attackStars = 4;
	} else if ($attackingvalue >= 240 && $attackingvalue <= 269  ) {
		$attackStars = 4.5;
	} else if ($attackingvalue >=270) {
		$attackStars = 5;
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
	echo "Fitness: $fitStars </br>";
	echo "Goalkeeping: $keepStars </br>";
	echo "Attacking: $attackStars </br>";
	?>